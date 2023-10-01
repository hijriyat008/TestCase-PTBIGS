<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Yajra\DataTables\DataTables;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $datapasien = Pendaftaran::latest()->get()->load(['pasien', 'pelayanan']);
            return DataTables::of($datapasien)
                ->addIndexColumn()
                ->addColumn('action', 'pendaftaran.action')
                ->rawColumns(['action'])
                ->make(true);
        }
        $pasien = Pasien::get()->sortBy('nik_pasien');
        $pelayanan = Pelayanan::get()->sortBy('nama_pelayanan');
        return view('pendaftaran.index', [
            "title" => "Menu Pendaftaran",
            "pasien" => $pasien,
            "pelayanan" => $pelayanan
        ]);
    }

    // public function pasien($id)
    // {
    //     $data = Pasien::where('id', $id)->where('nik_pasien', 'LIKE', '%' . request('q') . '%')->paginate(10);
    //     return response()->json($data);
    // }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pasien_id' => 'required',
            'jenis_registrasi' => 'required|max:255',
            'pelayanan_id' => 'required',
            'jenis_pembayaran' => 'required',
            'nama_petugas' => 'required',
        ]);

        $datenow = date('ymd');
        $lastnumber = Pendaftaran::all()->max('no_registrasi');

        $nomorUrut = $datenow . str_pad((int)substr($lastnumber, 8) + 1, 4, '0', STR_PAD_LEFT);

        $validateData['waktu_registrasi'] = date('Y/m/d h:i:s');
        $validateData['waktu_mulai'] = date('Y/m/d h:i:s');
        $validateData['waktu_selesai'] = '-';
        $validateData['no_registrasi'] = $nomorUrut;
        $validateData['no_rekam_medis'] = '00-00-00-00-' . str_pad((int)substr($lastnumber, 8) + 1, 4, '0', STR_PAD_LEFT);
        $validateData['status_registrasi'] = 'Aktif';

        Pendaftaran::create($validateData);
        return redirect('/pendaftaran')->with('Success', 'Dataset has been Added..');
    }

    public function selesai(Pendaftaran $pendaftaran)
    {
        Pendaftaran::where('id', $pendaftaran->id)
            ->update(['status_registrasi' => 'Tutup Layanan', 'waktu_selesai' => date('Y/m/d h:i:s')]);
        return redirect('/pendaftaran')->with('Success', 'Dataset Success Verification.');
    }

    public function destroy(Request $request)
    {
        $pendaftaran = Pendaftaran::where('id', $request->id)->delete();

        return Response()->json($pendaftaran);
    }

    public function print(Request $request)
    {
        $counter = 1;
        $pendaftaran = Pendaftaran::latest()->get()->load(['pasien', 'pelayanan']);
        return view('pendaftaran.print', [
            "title" => "Data Pendaftaran",
            "pendaftaran" => $pendaftaran,
            "counter" => $counter

        ]);
    }
}

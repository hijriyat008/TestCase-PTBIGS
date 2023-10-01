<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Yajra\DataTables\DataTables;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $datapasien = Pasien::latest()->get();
            return DataTables::of($datapasien)
                ->addIndexColumn()
                ->addColumn('action', 'pasien.action')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pasien.index', [
            "title" => "Data Pasien",
            "request" => $request
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nik_pasien' => 'required|max:255|unique:pasiens',
            'nama_pasien' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required|max:255',
            'no_hp' => ['required', 'min:12', 'max:12', 'unique:pasiens'],

        ]);

        Pasien::create($validateData);
        return redirect('/datapasien')->with('Success', 'Dataset has been Added..');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $datapasien = Pasien::find($id);
        return response()->json($datapasien);
    }

    public function update(Request $request, Pasien $datapasien)
    {
        $rules = [
            'nama_pasien' => 'required|max:255',
            'jk' => 'required',
            'tanggal_lahir' => 'required|max:255',
            'alamat' => 'required|max:255'

        ];
        if ($request->nik_pasien != $request->nik_pasien) {
            $rules['nik_pasien'] = 'required|max:255|unique:pasiens';
        }
        if ($request->no_hp != $request->no_hp) {
            $rules['no_hp'] = 'required|unique:pasiens';
        }

        $validateData = $request->validate($rules);

        Pasien::where('id', $request->id)->update($validateData);
        return redirect('/datapasien')->with('Success', 'Dataset has been Updated..');
    }

    public function destroy(Request $request)
    {
        $datapasien = Pasien::where('id', $request->id)->delete();

        return Response()->json($datapasien);
    }
}

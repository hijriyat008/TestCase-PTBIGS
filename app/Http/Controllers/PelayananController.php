<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;
use Yajra\DataTables\DataTables;

class PelayananController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $datapelayanan = Pelayanan::latest()->get();
            return DataTables::of($datapelayanan)
                ->addIndexColumn()
                ->addColumn('action', 'pelayanan.action')
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pelayanan.index', [
            "title" => "Data Pelayanan",
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_pelayanan' => 'required|max:255',
            'harga' => 'required|max:255',

        ]);

        Pelayanan::create($validateData);
        return redirect('/datapelayanan')->with('Success', 'Dataset has been Added..');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $datapelayanan = Pelayanan::find($id);
        return response()->json($datapelayanan);
    }

    public function update(Request $request, pelayanan $datapelayanan)
    {
        $rules = [
            'nama_pelayanan' => 'required|max:255',
            'harga' => 'required',
        ];

        $validateData = $request->validate($rules);

        Pelayanan::where('id', $request->id)->update($validateData);
        return redirect('/datapelayanan')->with('Success', 'Dataset has been Updated..');
    }

    public function destroy(Request $request)
    {
        $datapelayanan = Pelayanan::where('id', $request->id)->delete();

        return Response()->json($datapelayanan);
    }
}

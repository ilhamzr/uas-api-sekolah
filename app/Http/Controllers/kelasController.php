<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index()
    {
        $kelas = kelas::all ();
        return response() ->json($kelas);
    }

    public function show($id)
    {
        $kelas = kelas::find ($id);
        return response() ->json($kelas);
    }

    public function store(Request $request)
    {
        kelas::create($request->all());
        return response() ->json("kelas Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $kelas = kelas::find ($id);
        $kelas->update($request->all());
        return response() ->json("kelas Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $kelas = kelas::find ($id);
        $kelas->delete();
        return response() ->json("kelas Berhasil Dihapus");
    }

}
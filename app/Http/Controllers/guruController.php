<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        $guru = guru::all ();
        return response() ->json($guru);
    }

    public function show($id)
    {
        $guru = guru::find ($id);
        return response() ->json($guru);
    }

    public function store(Request $request)
    {
        guru::create($request->all());
        return response() ->json("Guru Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $guru = guru::find ($id);
        $guru->update($request->all());
        return response() ->json("Guru Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $guru = guru::find ($id);
        $guru->delete();
        return response() ->json("Guru Berhasil Dihapus");
    }

}
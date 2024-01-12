<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function index()
    {
        $nilai = nilai::all ();
        return response() ->json($nilai);
    }

    public function show($id)
    {
        $nilai = nilai::find ($id);
        return response() ->json($nilai);
    }

    public function store(Request $request)
    {
        nilai::create($request->all());
        return response() ->json("nilai Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $nilai = nilai::find ($id);
        $nilai->update($request->all());
        return response() ->json("nilai Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $nilai = nilai::find ($id);
        $nilai->delete();
        return response() ->json("nilai Berhasil Dihapus");
    }

}
<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all ();
        return response() ->json($siswa);
    }

    public function show($id)
    {
        $siswa = siswa::find ($id);
        return response() ->json($siswa);
    }

    public function store(Request $request)
    {
        siswa::create($request->all());
        return response() ->json("siswa Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $siswa = siswa::find ($id);
        $siswa->update($request->all());
        return response() ->json("siswa Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $siswa = siswa::find ($id);
        $siswa->delete();
        return response() ->json("siswa Berhasil Dihapus");
    }

}
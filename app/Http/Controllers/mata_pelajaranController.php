<?php

namespace App\Http\Controllers;

use App\Models\mata_pelajaran;
use Illuminate\Http\Request;

class mata_pelajaranController extends Controller
{
    public function index()
    {
        $mata_pelajaran = mata_pelajaran::all ();
        return response() ->json($mata_pelajaran);
    }

    public function show($id)
    {
        $mata_pelajaran = mata_pelajaran::find ($id);
        return response() ->json($mata_pelajaran);
    }

    public function store(Request $request)
    {
        mata_pelajaran::create($request->all());
        return response() ->json("mata pelajaran Berhasil Ditambahkan");
    }

    public function update(Request $request, $id)
    {
        $mata_pelajaran = mata_pelajaran::find ($id);
        $mata_pelajaran->update($request->all());
        return response() ->json("mata pelajaran Berhasil Diupdate");
    }

    public function destroy($id)
    {
        $mata_pelajaran = mata_pelajaran::find ($id);
        $mata_pelajaran->delete();
        return response() ->json("mata pelajaran Berhasil Dihapus");
    }

}
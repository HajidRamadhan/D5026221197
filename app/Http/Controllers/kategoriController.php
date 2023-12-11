<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kategoriController extends Controller
{

    public function index6()
    {
        $kategori = DB::table('kategori')->get();
        return view('index6', ['kategori' => $kategori]);
    }

    public function pilih(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('hasil', [
            'selectedKategoriId' => $selectedKategoriId,
        ]);
    }

}

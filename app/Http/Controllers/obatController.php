<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class obatController extends Controller
{
    //
    public function index4()
    {
    	// mengambil data dari tabkule pegawai
    	// $pegawai = DB::table('pegawai')->get();
        $obat = DB::table('obat')->get();
    	// mengirim data pegawai ke view index
    	return view('index4',['obat' => $obat]);

    }

    public function tambah4()
    {

        // memanggil view tambah
        return view('tambah4');

    }

        // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
            // insert data ke table pegawai
            DB::table('obat')->insert([

                'merkobat' => $request->merkobat,
                'stockobat' => $request->stockobat,
                'tersedia' => $request->tersedia
            ]);
            // alihkan halaman ke halaman obat
            return redirect('/obat');
    }

// method untuk edit data obat
public function edit($kodeobat)
{
    // mengambil data obat berdasarkan kodeobat yang dipilih
    $obat = DB::table('obat')->where('kodeobat',$kodeobat)->get();
    // passing data obat yang dkodeobatapat ke view edit.blade.php
    return view('edit',['obat' => $obat]);

}

// update data obat
public function update(Request $request)
{
    // update data obat
    DB::table('obat')->where('kodeobat',$request->kodeobat)->update([
        'merkobat' => $request->merkobat,
        'stockobat' => $request->stockobat,
        'tersedia' => $request->tersedia
    ]);
    // alihkan halaman ke halaman obat
    return redirect('/obat');
}

// method untuk hapus data obat
public function hapus($kodeobat)
{
    // menghapus data obat berdasarkan kodeobat yang dipilih
    DB::table('obat')->where('kodeobat',$kodeobat)->delete();

    // alihkan halaman ke halaman pegawai
    return redirect('/obat');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table obat sesuai pencarian data
    $obat = DB::table('obat')
    ->where('merkobat','like',"%".$cari."%")
    ->paginate();

        // mengirim data obat ke view index1
    return view('index4',['obat' => $obat]);

}
public function view($kodeobat)
{
    // mengambil data obat berdasarkan kodeobat yang dipilih
    $obat = DB::table('obat')->where('kodeobat',$kodeobat)->get();
    // passing data obat yang dkodeobatapat ke view view.blade.php
    return view('view',['obat' => $obat]);
}

}

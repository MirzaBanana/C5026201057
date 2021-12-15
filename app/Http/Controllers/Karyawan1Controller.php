<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table bedak
        //$bedak = DB::table('bedak')->get();
        $karyawan1 = DB::table('karyawan1')->paginate(5) ;

        // mengirim data bedak ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }
    // method untuk menampilkan view form tambah bedak
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1.tambah');
    }
    // method untuk insert data ke table karyawan1
    public function store(Request $request)
    {
        //DB::table()->insert();
        // insert data ke table karyawan1
        DB::table('karyawan1')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);
        // alihkan halaman ke halaman karyawan1
        return redirect('/karyawan1');
    }

    // method untuk hapus data bedak
    public function hapus($id)
    {
        // menghapus data bedak berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $id)->delete();

        // alihkan halaman ke halaman bedak
        return redirect('/karyawan1');
    }

}

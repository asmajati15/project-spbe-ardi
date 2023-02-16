<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	// $artikel = DB::table('data_spbe')->get();
 
    	// mengirim data pegawai ke view index
    	return view('dashboard');
 
    }

    public function store(Request $request)
{
	// insert data ke table pegawai
	// DB::table('data_spbe')->insert([
	// 	'id' => $request->id,
	// 	'kd_artikel' => $request->kd_artikel,
	// 	'judul' => $request->judul,
	// 	'tgl_upload' => $request->tgl_upload,
    //     'gambar' => $request->gambar
	// ]);
	// // alihkan halaman ke halaman pegawai
	// return redirect('/');
 
}
}

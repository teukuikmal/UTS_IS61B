<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa; 
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::latest()->get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function add()
    {
        return view('mahasiswa.insert');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Mahasiswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('mahasiswa')->with('message', 'Data Berhasil Ditambahkan');
    }
}

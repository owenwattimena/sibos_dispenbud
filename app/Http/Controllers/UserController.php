<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dinas.pengguna.index');
    }

    public function create()
    {
        return view('dinas.pengguna.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'status' => 'required',
        ]);

        $user = new User;
        $user->nama = $request->nama;
        $user->jenis = $request->jenis;
        $user->npsn = $request->npsn;
        $user->alamat = $request->alamat;
        $user->desa = $request->desa;
        $user->kelurahan = $request->kelurahan;
        $user->status = $request->status;
        $user->created_by = Auth::user()->id;

        if($user->save())
        {
            return redirect()->route('pengguna')->with(AlertFormatter::success('Data Pengguna berhasil disimpan'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Data Pengguna gagal disimpan'));
    }
}

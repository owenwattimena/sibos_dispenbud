<?php

namespace App\Http\Controllers\Dinas;

use App\Helpers\AlertFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function index()
    {
        $data['sekolah'] = Sekolah::all();
        return view('dinas.sekolah.index', $data);
    }

    public function create()
    {
        return view('dinas.sekolah.create');
    }

    public function save(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'status' => 'required',
        ]);

        $sekolah = new Sekolah;
        $sekolah->nama = $request->nama;
        $sekolah->jenis = $request->jenis;
        $sekolah->npsn = $request->npsn;
        $sekolah->alamat = $request->alamat;
        $sekolah->desa = $request->desa;
        $sekolah->kelurahan = $request->kelurahan;
        $sekolah->status = $request->status;
        $sekolah->created_by = Auth::user()->id;

        if($sekolah->save())
        {
            return redirect()->route('sekolah')->with(AlertFormatter::success('Data Sekolah berhasil disimpan'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Data Sekolah gagal disimpan'));
    }
}

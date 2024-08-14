<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helpers\AlertFormatter;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();
        return view('dinas.pengguna.index', $data);
    }

    public function create()
    {
        return view('dinas.pengguna.create');
    }

    public function save(Request $request)
    {
        // dd($request->input());
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => 'required',
            'level' => 'required',
        ]);

        $user = new User;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->level = $request->level;

        if($user->save())
        {
            return redirect()->route('pengguna')->with(AlertFormatter::success('Data Pengguna berhasil disimpan'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Data Pengguna gagal disimpan'));
    }

    public function edit($id)
    {
        $data['user'] = User::findOrFail($id);
        return view('dinas.pengguna.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // dd($request->input());
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username, ' . $id,
            'email' => 'required',
            'level' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->level = $request->level;

        if($user->save())
        {
            return redirect()->back()->with(AlertFormatter::success('Data Pengguna berhasil disimpan'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Data Pengguna gagal disimpan'));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if($user->delete())
        {
            return redirect()->back()->with(AlertFormatter::success('Data Pengguna berhasil dihapus'));
        }
        return redirect()->back()->with(AlertFormatter::danger('Data Pengguna gagal dihapus'));
    }
}

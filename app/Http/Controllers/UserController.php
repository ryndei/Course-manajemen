<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\pengajar;
use App\Models\siswa;


class UserController extends Controller
{
    public function index()
    {
        $users = User::with('edulevel')->paginate(5);
        return view('admin/manajemen_user.index', compact('users'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin/manajemen_user.edit', compact(['user']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'role' => 'required|in:admin,pengajar,user',
        ]);
        $user = User::find($id);
        $user->update([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return redirect('admin/manajemen_user.index')->with('success', 'Data berhasil diubah!');
    }
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/manajemen_user.index')->with('success', 'Data berhasil dihapus!');
    }


    public function userHome()
    {
        return view('user.userhome');
    }
    public function userCourse()
    {
        return view('user.course');
    }
    public function create()
    {
        return view('admin.manajemen_user.create');
    }
    public function store(Request $request)
    {
        User::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_telepon' => $request->no_telepon,
            'password' => $request->password,
            'role' => $request->role,
        ]);
        return redirect('admin/manajemen_user.index')->with('success', 'Data berhasil ditambah!');
    }
    public function adminDashboard()
    {
        return view('admin/dashboard');
    }
}

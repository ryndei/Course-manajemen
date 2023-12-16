<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Course;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Str;
use Validator;

class SiswaController extends Controller
{
    public function daftar()
    {
        $courses = Course::all();
        return view('user.daftar', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'jenkel' => 'required|max:255',
            'email' => 'required|max:255',
            'no_telepon' => 'required|max:255',
            'bukti_pembayaran' => 'required|image|mimes:png,jpg,jpeg|max:2040',
            'kelas' => 'required|max:255',
        ]);


        $bukti_pembayaran = $request->bukti_pembayaran;
        $slug = Str::slug(date('Y-m-d') . $bukti_pembayaran->getClientOriginalName());
        $new_bukti_pembayaran = time() . '' . $slug;
        $bukti_pembayaran->move('upload/bukti_pembayaran', $new_bukti_pembayaran);

        $data = new \App\Models\Siswa;
        $data->nama = $request->input('nama');
        $data->alamat = $request->input('alamat');
        $data->jenkel = $request->input('jenkel');
        $data->email = $request->input('email');
        $data->no_telepon = $request->input('no_telepon');
        $data->bukti_pembayaran = $new_bukti_pembayaran;
        $data->kelas = $request->input('kelas');
        $data->save();


        // Simpan data ke dalam database
        return redirect()->route('user.course')->with('success', 'Data berhasil ditambah!');
    }
    public function listDaftar()
    {
        $siswas = Siswa::with('edulevel')->paginate(5);
        return view('admin/manajemen_siswa.listDaftar', compact('siswas'));
    }
}

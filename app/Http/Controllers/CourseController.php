<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('edulevel')->paginate(5);
        return view('admin/manajemen_course.index', compact('courses'));
    }

    public function create()
    {
        return view('/admin/manajemen_course.create');
    }

    public function store(Request $request)
    {
        $data = new \App\Models\Course;
        $data->nama_kelas = $request->input('nama_kelas');
        $data->pengajar = $request->input('pengajar');
        $data->ruang = $request->input('ruang');
        $data->hari = $request->input('hari');
        $data->jam = $request->input('jam');
        $data->harga = $request->input('harga');
        $data->jumlah_pertemuan = $request->input('jumlah_pertemuan');
        $data->deskripsi = $request->input('deskripsi');
        $data->save();

        return redirect('admin/manajemen_course.index')->with('success', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin/manajemen_course.edit', compact(['course']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'nama_kelas' => 'required',
            'pengajar' => 'required',
            'ruang' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'harga' => 'required',
            'jumlah_pertemuan' => 'required',
        ]);
        $course = Course::find($id);
        $course->update([
            'id' => $request->id,
            'nama_kelas' => $request->nama_kelas,
            'pengajar' => $request->pengajar,
            'ruang' => $request->ruang,
            'hari' => $request->hari,
            'jam' => $request->jam,
            'harga' => $request->harga,
            'jumlah_pertemuan' => $request->jumlah_pertemuan,
        ]);
        return redirect('admin/manajemen_course.index')->with('success', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('admin/manajemen_course.index')->with('success', 'Data berhasil dihapus!');
    }

    public function daftarKelas()
    {
        $courses = Course::with('edulevel')->paginate(5);
        return view('user/course', compact('courses'));
    }

    public function detail($id)
    {
        $course = Course::find($id);
        return view('user/detail', compact(['course']));
    }
}

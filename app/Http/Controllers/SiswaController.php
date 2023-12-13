<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{
     public function index()
    {
         $Siswas = siswa::all();
        return view('manajemen_kelas.index',compact('Siswas'));
    }
    
    
}

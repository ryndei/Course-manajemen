<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajar;

class PengajarController extends Controller
{
    public function index()
    {
        return view('pengajar/pengajarhome');
    }
    public function pengajarJadwal()
    {
        return view('pengajar/jadwal');
    }
}

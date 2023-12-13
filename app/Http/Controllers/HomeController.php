<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $role = Auth()->user()->role;

            if ($role == 'user') {
                return view('user/userhome');
            } elseif ($role == 'admin') {
                return view('admin/adminhome');
            } elseif ($role == 'pengajar') {
                return view('pengajar/pengajarhome');
            } else {
                return redirect()->back();
            }
        }
    }
    public function post()
    {
        return view("post");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class SesiController extends Controller
{

    function index()
    {
        if (Auth::id()) {
            $role = auth()->user()->role;
            if ($role == 'admin') {
                return view('admin/dashboard');
            } elseif ($role == 'user') {
                return view('user/dashboard');
            } elseif ($role == 'pengajar') {
                return view('pengajar/dashboard');
            } else {
                return redirect()->back();
            }
        }
    }
}

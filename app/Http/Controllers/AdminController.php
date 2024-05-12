<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        // Isi dengan logika untuk menampilkan halaman admin
        return view('admin');
    }
    public function guru()
    {
        // Isi dengan logika untuk menampilkan halaman admin
        return view('dashboard');
    }
    public function siswa()
    {
        // Isi dengan logika untuk menampilkan halaman dashboard
        return view('dashboard');
    }
    public function detailStatus()
    {   
        return view('status',[
            'title' => 'Detail Siswa'
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
    
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    // public function logout(Request $request)
    // {
    //     Auth::logout(); // Lakukan logout pengguna
    //     $request->session()->invalidate(); // Invalidasi sesi pengguna
    //     $request->session()->regenerateToken(); // Regenerasi token sesi

    //     return redirect('/login'); // Redirect ke halaman utama
    // }

    public function dashboard(){
        return view('dashboard');
    }
}

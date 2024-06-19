<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthControllers extends Controller
{
    public function index()
    {
        dd("Halaman Login");
    }

    public function register()
    {
        dd("Halaman Register");
    }

    public function login()
    {
        dd("login");
    }

    public function logout()
    {
        return redirect('/admin/login');
    }
}

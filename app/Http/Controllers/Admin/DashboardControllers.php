<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControllers extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index', ["type_menu" => "dashboard"]);
    }
}

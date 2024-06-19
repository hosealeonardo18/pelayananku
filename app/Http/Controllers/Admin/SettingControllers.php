<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingControllers extends Controller
{
    public function showSetting($slug)
    {
        dd("setting di " . $slug);
    }

    public function showSubscribe($slug)
    {
        dd("subscribe di " . $slug);
    }
}

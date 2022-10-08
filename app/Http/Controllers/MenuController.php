<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public static function index()
    {
        return view('admin.menu');
    }
}

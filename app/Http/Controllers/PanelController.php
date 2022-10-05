<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    public static function index()
    {
        return view('admin.index');
    }
}

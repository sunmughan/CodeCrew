<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferancesController extends Controller
{
    public static function index()
    {
        return view('admin.referances');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferancesController extends Controller
{
    public static array $Data;

    public function __construct()
    {
        self::$Data['referances'] = DB::table('referances')->get();
    }

    public static function index()
    {
        return view('admin.referances',self::$Data);
    }
}

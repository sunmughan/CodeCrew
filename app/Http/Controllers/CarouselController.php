<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public static array $Data;

    public function __construct()
    {

        self::$Data['carousel'] = DB::table('carousel')->first();

    }


    public static function index()
    {
        return view('admin.carousel',self::$Data);
    }
}

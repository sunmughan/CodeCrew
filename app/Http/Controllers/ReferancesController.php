<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

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

    public static function referanceInsertPost(Request $request)
    {

        $r_logo = Storage::putFile('referances', $request->file('r_logo'));

        $insertReferance = DB::table('referances')->insert([
            'r_name' => $request->input('r_name'),
            'r_url' => $request->input('r_url'),
            'r_logo' => $r_logo,
        ]);

        

        return redirect()->route('referances',self::$Data);
       
    }
}

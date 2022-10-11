<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{


    public static function index()
    {
        $data['menu'] = DB::table('menu')->get();
        return view('admin.menu',$data);
    }


    public static function insertMenu(Request $request)
    {
        return response()->json([
            'items' => $request->post(),
        ],200); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public static function index()
    {
        $Veri['pages'] = DB::table('pages')->page(10)->get();
        return "pages";
    }

    public static function update($id)
    {
        $Veri['pages'] = DB::table('pages')->where('pages_id',$id)->first();

        return view('viewismi',$Veri);
    }
    
    public static function insert()
    {
        return "insert";
    }

    public static function insertPost(Request $request)
    {
        $this->validate($request, [
            'pages_name' => 'required|string',
            'pages_action' => 'required|string|min:6',
            'pages_author' => 'required|string|min:6|integer',
            'pages_main' => 'required|string|min:10|integer',
        ]);
    }
}

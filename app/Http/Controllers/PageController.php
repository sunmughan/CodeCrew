<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public static function index()
    {
        $Veri['pages'] = DB::table('pages')->get();
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
            'pages_action' => 'required|string',
            'pages_author' => 'required|string',
        ]);

        $main = $request->has('pages_main') ? true : false;


        $insertPage = DB::table('pages')->insert([
            'pages_name' => $request->input('pages_name'),
            'pages_action' => $request->input('pages_action'),
            'pages_author' => $request->input('pages_author'),
            'pages_main' => $main,
            'pages_status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $response = $insertPage == true ? true : false; 

        return response()->json([
            'status' => $response,
            'item' => $request->post(),
        ],200);
    }

    public static function updatePost(Request $request)
    {
        $this->validate($request, [
            'pages_id' => 'required|integer',
            'pages_name' => 'required|string',
            'pages_action' => 'required|string',
            'pages_author' => 'required|string',
        ]);

        $main = $request->has('pages_main') ? true : false;

        $updatePage = DB::table('pages')->where('pages_id',$request->input('pages_id'))->update([
            'pages_name' => $request->input('pages_name'),
            'pages_action' => $request->input('pages_action'),
            'pages_author' => $request->input('pages_author'),
            'pages_main' => $main,
            'pages_status' => $request->input('pages_status'),
            'updated_at' => now(),
        ]);

        $response = $updatePage == true ? true : false; 
        return response()->json([
            'status' => $response,
        ],200); 




    }

    public static function delete($id)
    {
        $deletePage = DB::table('pages')->where('pages_id',$id)->delete();
    
        $response = $deletePage == true ? true : false; 
        return response()->json([
            'status' => $response,
        ],200); 

    }
}

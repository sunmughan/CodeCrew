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
        return view('admin.anasayfa.carousel',self::$Data);
    }

    public static function carouselSearchStatus(Request $request)
    {
        
        $update = DB::table('carousel')
        ->where('ca_id',1)->update(['ca_searchStatus' => $request->input('searchStatus')]);
       

        $update == true ? $status = true : $status = false;

        return response()->json([
            'status' => $status,
        ],200); 

        
    }

    public static function carouselUpdatePost(Request $request)
    {
        $update = DB::table('carousel')
        ->where('ca_id',1)->update([
            'ca_topText' => $request->input('formData.0.value'),
            'ca_mainText' => $request->input('formData.1.value'),
            'ca_description' => $request->input('formData.2.value'),
            ]);
       

        $update == true ? $status = true : $status = false;

        return response()->json([
            'status' => $request->post(),
        ],200); 

    }
}

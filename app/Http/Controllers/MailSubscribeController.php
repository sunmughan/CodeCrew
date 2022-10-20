<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MailSubscribeController extends Controller
{
    public static array $Data;

    public function __construct()
    {

        self::$Data['mailSubscribe'] = DB::table('mailSubscribe')->first();

    }

    public static function index()
    {
        return view('admin.anasayfa.mailSubscribe',self::$Data);
    }

    public static function mailSubscribeStatus(Request $request)
    {
        $update = DB::table('mailSubscribe')
        ->where('ms_id',1)->update(['ms_status' => $request->input('mailSubscribeStatus')]);
       

        $update == true ? $status = true : $status = false;

        return response()->json([
            'status' => $status,
        ],200); 

    }

    public static function mailSubscribeUpdatePost(Request $request)
    {

        $update = DB::table('mailSubscribe')
        ->where('ms_id',1)->update([
            'ms_title' => $request->input('formData.0.value'),
            'ms_description' => $request->input('formData.1.value'),
            ]);
       

        $update == true ? $status = true : $status = false;

        return response()->json([
            'status' => $request->post(),
        ],200); 

    }
}

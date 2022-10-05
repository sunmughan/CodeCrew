<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public static function index()
    {
        return "pages";
    }

    public static function update($id)
    {
        return "update ".$id;
    }
    
    public static function insert()
    {
        return "insert";
    }
}

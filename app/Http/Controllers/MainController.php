<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public static array $Data;

    public function __construct()
    {

        self::$Data['menu'] = DB::table('menu')->where('m_status',1)->get();

    }

    public function index()
    {
        return view('index',self::$Data);
    }

    public function loadActions(Router $route)
    {
        $routes = array();
        $routess = array();
        $i = 0;
        $r = $route->getRoutes();

       

        foreach ($r as $value) {
            $methods[$i] = $value->methods[0];
            $i++;
        }
        $i = 0;

        

        foreach ($r as $value) {
            $routes[$i] = $value->action;
            $i++;
        }
        $i = 0;

        foreach ($routes as $value) {

            if($methods[$i] == "GET")
            {
                if(array_key_exists("as",$value))
                {
                        $routes[$i] = $value['as'];
                }
            }else{
            }

            $i++;

           
          
        }

        $i = 0;

     

        return response()->json([
            'items' => $routes,
            'itemss' => $methods,
        ],200); 


    }
}

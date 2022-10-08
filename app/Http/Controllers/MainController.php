<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function loadActions(Router $route)
    {
        $routes = array();
        $i = 0;
        $r = $route->getRoutes();


        foreach ($r as $value) {
            $routes[$i] = $value->action;
            $i++;
        }

        $i = 0;

        foreach ($routes as $value) {
            if(array_key_exists("as",$value))
            {
                $routes[$i] = $value['as'];

            }
            $i++;
        }

        $i = 0;

     

        return response()->json([
            'items' => $routes,
        ],200); 


    }
}

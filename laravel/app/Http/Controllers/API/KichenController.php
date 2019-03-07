<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KichenController extends Controller
{

    public function state()
    {
        include("connection.php");
        $result = \connection::conn("e", Auth::user()->ardip);
        return response()->json([
            "response" =>$result
        ]);

    }
    public function color(){
        $red=Request::input('red');
        $green=Request::input('green');
        $blue=Request::input('blue');
        $color="000".$red.".".$blue.".".$green;
        include("connection.php");
        $result = \connection::color($color, Auth::user()->ardip);
        return response()->json([
            "response" =>$result
        ]);

    }
}

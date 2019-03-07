<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DatController extends Controller
{
    public function inside()
    {
        include("connection.php");
        $result = \connection::conn("f", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }

    public function sensor()
    {
        include("connection.php");
        $result = \connection::conn("g", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }

    public function foren()
    {
        include("connection.php");
        $result = \connection::conn("h", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }
    public function data()
    {
        include("connection.php");
        $result = \connection::conn("i", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }
    public function convert(){
    }
}

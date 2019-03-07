<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{

    public function state()
    {
        include("connection.php");
        $result = \connection::conn("x", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }

    public function turnon()
    {
        include("connection.php");
        $result = \connection::conn("w", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }

    public function turnoff()
    {
        include("connection.php");
        $result = \connection::conn("s", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }
}

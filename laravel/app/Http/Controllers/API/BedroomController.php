<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;


class BedroomController extends Controller
{


    public function getmos()
    {
        include("connection.php");
        $result = \connection::conn("m", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }
    public function state()
    {
        include("connection.php");
        $result = \connection::conn("l", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function on()
    {

        include("connection.php");
        $result = \connection::conn("j",Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);


    }

    public function off()
    {
        include("connection.php");
        $result = \connection::conn("k",Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

}

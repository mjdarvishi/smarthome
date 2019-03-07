<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;


class LivingRoomController extends Controller
{


    public function statelamp()
    {
        include("connection.php");
        $result = \connection::conn("n", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function turnon()
    {
        include("connection.php");
        $result = \connection::conn("o", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function turnoff()
    {
        include("connection.php");
        $result = \connection::conn("p", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function air()
    {
        include("connection.php");
        $result = \connection::conn("a", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function turnonair()
    {
        include("connection.php");
        $result = \connection::conn("q", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function turnoffair()
    {
        include("connection.php");
        $result = \connection::conn("r", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function cur()
    {
        include("connection.php");
        $result = \connection::conn("d", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function turnoncur()
    {
        include("connection.php");
        $result = \connection::conn("b", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }

    public function turnoffcur()
    {
        include("connection.php");
        $result = \connection::conn("c", Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);

    }


}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class TempController extends Controller
{
    public function get()
    {
        $temp =Auth::user()->temp;
        return response()->json([
            "response" => $temp
        ]);
    }

    public function set()
    {
        $temp = Request::input('temp');
        $user = Auth::user();
        $user->temp = $temp;
        $user->save();
        include("connection.php");
        $result = \connection::conn($temp, Auth::user()->ardip);
        return response()->json([
            "response" => $result
        ]);
    }


}

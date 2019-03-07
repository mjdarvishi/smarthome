<?php

namespace App\Http\Controllers\API;

use App\Air;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AirController extends Controller
{
    public function add()
    {
        Air::where('user_id', Auth::user()->id)->delete();
        $lamp = new Air();
        $lamp->hourstop = Request::input('hourstop');
        $lamp->hourstart = Request::input('hourstart');
        $lamp->minstart = Request::input('minstart');
        $lamp->minstop = Request::input('minstop');
        $lamp->user_id = Auth::user()->id;
        $lamp->save();
        return response()->json([
            "response" => 1
        ]);
    }

    public function get()
    {
        $lamp = Air::where('user_id', Auth::user()->id)->get();
        return $lamp[0];
    }

    function update()
    {
        Air::where('user_id', Auth::user()->id)
            ->update([
                'hourstart'=>Request::input('hourstart'),
                'hourstop'=>Request::input('hourstop'),
                'minstart'=>Request::input('minstart'),
                'minstop'=> Request::input('minstop'),
            ]);
        return response()->json([
            "response" => 1
        ]);

    }
}

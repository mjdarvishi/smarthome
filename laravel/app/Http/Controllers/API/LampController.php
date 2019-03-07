<?php

namespace App\Http\Controllers\API;

use App\Lamp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Psy\Util\Json;

class LampController extends Controller
{
    //

    public function add()
    {
        Lamp::where('user_id', Auth::user()->id)->delete();
        $lamp = new Lamp();
        $lamp->kichen = Request::input('kichen');
        $lamp->livingroom = Request::input('livingroom');
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
        $lamp = Lamp::where('user_id', Auth::user()->id)->get();
        return $lamp[0];
    }

    function update()
    {
        Lamp::where('user_id', Auth::user()->id)
            ->update([
                'kichen' => Request::input('kichen'),
                'livingroom'=>Request::input('livingroom'),
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

<?php

namespace App\Http\Controllers\API;

use App\Air;
use App\Lamp;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SenarioController extends Controller
{

    public function set()
    {
        date_default_timezone_set("Asia/Tehran");
        $ard=null;
        $lamp = Lamp::all();
        $air = Air::all();
        foreach ($lamp as $item) {
            $ard=User::where('id',$item['user_id'])->get();
            $ard=$ard[0]['ardip'];
            $kichen = $item['kichen'];
            $livingroom = $item['livingroom'];
            $starth = $item['hourstart'];
            $startm = $item['minstart'];
            $stoph = $item['hourstop'];
            $stopm = $item['minstop'];
            $hour = (int)date('H');
            $min = (int)date('i');
            if ($starth == $hour && $startm == $min) {
                include ('connection.php');
                if ($kichen == 1)
                    \connection::conn("j",$ard);

                if ($livingroom == 1)
                \connection::conn("o",$ard);

            }

            if ($stoph == $hour && $stopm == $min) {
                include ('connection.php');
                if ($kichen == 1)
                    \connection::conn("k",$ard);

                if ($livingroom == 1)
                    \connection::conn("p",$ard);


            }



        }

        foreach ($air as $item) {
            $ard=User::where('id',$item['user_id'])->get();
            $ard=$ard[0]['ardip'];
            $astarth = $item['hourstart'];
            $astartm = $item['minstart'];
            $astoph = $item['hourstop'];
            $astopm = $item['minstop'];
            $hour = (int)date('H');
            $min = (int)date('i');
            include ('connection.php');
            if ($astarth == $hour && $astartm == $min)
                \connection::conn("q",$ard);

            if ($astoph == $hour && $astopm == $min){
                \connection::conn("r",$ard);

            }

        }

return 9;
    }
}

<?php

class connection
{

    public static function conn($out, $ip)
    {
        $host = $ip;
        $port = 23;
        $timeout =50;
        $sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
        if (!is_resource($sk)) {
            return "disconnect";
        } else {
            fwrite($sk, $out);
            while (!feof($sk)) {
                return fgets($sk, 128);
            }
            fclose($sk);


        }
    }

    public static function color($out, $ip)
    {
        $host = $ip;
        $port = 23;
        $timeout = 10;
        $sk = fsockopen($host, $port, $errnum, $errstr, $timeout);
        if (!is_resource($sk)) {
            return "disconnect";
        } else {
            fwrite($sk, $out);
            fclose($sk);


        }
    }

}


?>
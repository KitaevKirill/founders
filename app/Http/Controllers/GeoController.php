<?php

namespace App\Http\Controllers;

use App\SxGeo;
use Illuminate\Http\Request;


class GeoController extends Controller
{
    public function SxGeo()
    {
        $SxGeo = new SxGeo;
//        $country = $SxGeo->getCountry('178.219.186.12');
        $country = $SxGeo->getCountry('159.203.161.211');

//        $country = $SxGeo->getCountry($_SERVER['REMOTE_ADDR']);

        return $country;
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use App\SxGeo;
use App\Setting;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $SxGeo = new SxGeo;
//        $country = $SxGeo->getCountry($_SERVER['REMOTE_ADDR']);
//        $country = $SxGeo->getCountry('178.219.186.12'); // Moscow
        $country = $SxGeo->getCountry('159.203.161.211');  //New York

        if ($country == 'RU') {
            Setting::updateOrCreate(['name' => 'locale'], ['value' => 'RU']);
        } else {
            Setting::updateOrCreate(['name' => 'locale'], ['value' => 'EN']);
        }


        return $next($request);
    }
}

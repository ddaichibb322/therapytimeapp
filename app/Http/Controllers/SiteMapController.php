<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;


class siteMapController extends Controller
{
    public function sitemap(){
        $sitemap = App::make("sitemap");
        $now = Carbon::now();
        $sitemap->add(URL::to('/'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/plan'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/session'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/session/1'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/session/2'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/contact'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/tokutei'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/agreement'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/policy'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/login'), $now, '1.0', 'always');
        $sitemap->add(URL::to('/register'), $now, '1.0', 'always');
        return $sitemap->render('xml');
    }
}
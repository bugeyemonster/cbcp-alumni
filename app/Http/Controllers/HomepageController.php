<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function map()
    {
        $view = view('homepage/map');

        return $view;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function getIndex(){

        return view('frontend.layouts.news');

    }

}
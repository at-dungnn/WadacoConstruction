<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function getIndex(){

        return view('frontend.layouts.service');

    }

}
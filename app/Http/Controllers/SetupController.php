<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
    public function index()
    {
        return view('setup');
    }

    public function setupform()
    {
        return view('setupform');
    }

    public function setup()
    {
        //implement websocket logic here

        //if connection is made and robot name received from device via websocket
        return view('setupok');
    }
    
}

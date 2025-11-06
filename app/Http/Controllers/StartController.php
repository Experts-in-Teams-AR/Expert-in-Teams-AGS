<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        return view('start');
    }

    public function info()
    {
        //send the minutes and other command to the pi through the websocket connection so it can display timer
        //then return the view for the start button page where user can start timer
        return view('sessionstart');
    }

    public function start()
    {
        //Start the timer on the website and on the pico as well with like 5 sec delay
        return view('goingsession');
    }

    public function stop()
    {
        //Stop timer in webapp and pico anaylze speech results and load the view with the recent speech results
        return view('result');
    }
}

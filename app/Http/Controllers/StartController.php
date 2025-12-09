<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StartController extends Controller
{
    public function index()
    {
        return view('start');
    }

    public function info(Request $request)
    {
        $seconds = $request->input('second');
        $minutes = $request->input('minutes');

        $duration=$minutes*60 + $seconds;

        $response = Http::post('http://127.0.0.1:5001/start-recording', [
        'duration' => $duration
        ]);

        return view('goingsession');

        //send the minutes and other command to the pi through the websocket connection so it can display timer
        //then return the view for the start button page where user can start timer
        //return view('sessionstart');
    }

    public function start()
    {
        //Start the timer on the website and on the pico as well with like 5 sec delay
        return view('goingsession');
    }

    public function stop()
    {
        $user = auth()->user();
        $values = $user->categorized_values;

        return view('result', ['values' => $values]);
    }
}

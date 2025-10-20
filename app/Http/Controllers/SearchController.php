<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SearchController extends Controller
{
    public function searchView()
    {
        return view('search');
    }

}

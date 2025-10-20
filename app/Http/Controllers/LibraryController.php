<?php

namespace App\Http\Controllers;

use App\Models\Song;

class LibraryController extends Controller
{
    public function libraryView()
    {
        return view('library');
    }
}
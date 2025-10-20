<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView()
    {
        return view('admin');
    }

    public function createView()
    {
        return view('create');
    }

    public function updateView($id = null)
    {
        return view('update'); // Return the list of songs
    }
    
    public function deleteView()
    {
        return view('delete');
    }
}

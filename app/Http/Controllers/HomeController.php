<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view('home', [
            'title' => 'Home Page - Skinhack'
            ]);
    }


}

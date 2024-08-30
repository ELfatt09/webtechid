<?php
// app/Http/Controllers/HomeController.php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Define dummy data for images
        $images = [
            'images/sample1.jpg',
            'images/sample2.jpg',
            'images/sample3.jpg',
            'images/sample4.jpg',
            'images/sample5.jpg',
            'images/sample6.jpg',
        ];

        // Pass the $images variable to the view
        return view('home', compact('images'));
    }
}


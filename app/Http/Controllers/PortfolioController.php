<?php

// app/Http/Controllers/PortfolioController.php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all(); // Retrieve all portfolio items
        return view('portfolio.index', compact('portfolios'));
    }
}


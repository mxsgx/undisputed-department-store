<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $featuredProducts = Product::whereFeatured(true)->limit(8)->get();

        return view('home', compact('featuredProducts'));
    }
}

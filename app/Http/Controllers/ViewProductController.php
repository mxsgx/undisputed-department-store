<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ViewProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        $relatedProducts = Product::inRandomOrder()->whereNot('id', $product->id)->limit(12)->get();

        return view('product', compact('product', 'relatedProducts'));
    }
}

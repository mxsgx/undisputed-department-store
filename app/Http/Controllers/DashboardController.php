<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.dashboard', [
            'category_count' => Category::whereNull('parent_id')->count(),
        ]);
    }
}

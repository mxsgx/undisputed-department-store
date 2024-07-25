<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('admin.dashboard', [
            'product_count' => Product::count(),
            'category_count' => Category::count(),
            'pending_order_count' => Order::whereIn('status', [OrderStatus::UNPAID, OrderStatus::PENDING])->count(),
            'completed_order_count' => Order::whereIn('status', [OrderStatus::COMPLETED])->count(),
        ]);
    }
}

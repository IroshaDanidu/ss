<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Orders;  // Corrected from Orders to Order
use App\Models\Category;

class DashboardController extends Controller
{
    // View method
    public function view()
    {
        // Count products
        $productsCount = Product::count();

        // Count users
        $usersCount = User::count();

        // Count orders
        $ordersCount = Orders::count();

        // Count categories

        // Count pending orders
        $pendingOrdersCount = Orders::where('status', 'pending')->count();

        return view('admin.home', compact('productsCount', 'usersCount', 'ordersCount'));
    }
}

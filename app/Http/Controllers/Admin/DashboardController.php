<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::count();
        $product = Product::count();
        $users = User::count();
        $total_orders = Order::count();
        $completed_orders = Order::where('status', '1')->count();
        $pending_orders = Order::where('status', '0')->count();
        return view('admin.index', compact('category','product','users','total_orders','completed_orders','pending_orders'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function view_user($id)
    {
        $users = User::find($id);
        return view('admin.users.view', compact('users'));
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Coffee;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah coffee dan order
        $coffeeCount = Coffee::count();
        $orderCount = Order::count();

        // Mengembalikan view dengan data yang di-pass
        return view('dashboard', compact('coffeeCount', 'orderCount'));
    }
}

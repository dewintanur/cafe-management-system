<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Coffee; // Jika Anda perlu mengakses model Coffee
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    // Menampilkan daftar semua pesanan
    public function index()
    {
        $orders = Order::all();
        return response()->json(Order::all(), 200);
    }
   
    // API: Menampilkan detail pesanan berdasarkan ID
    public function Show($id)
    {
        try {
            $order = Order::findOrFail($id);
            return response()->json($order);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Order not found'], 404);
        }
    }

    // API: Menyimpan pesanan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'order_number' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'coffee_id' => 'required|exists:coffees,id',
            'quantity' => 'required|integer|min:1',
        ]);
    
        $order = Order::create($request->all());
    
        return response()->json($order, 201);
    }
    

    // API: Memperbarui pesanan yang sudah ada
    public function Update(Request $request, $id)
    {
        $request->validate([
            'order_number' => 'required|string|max:255',
            'coffee_id' => 'required|exists:coffees,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return response()->json($order);
    }

    // API: Menghapus pesanan dari database
    public function Destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully.']);
    }
    public function apiSearch(Request $request)
    {
        $query = $request->input('query');

        // Pencarian berdasarkan 'order_number' atau 'customer_name'
        $orders = Order::where('order_number', 'LIKE', "%{$query}%")
                        ->orWhere('customer_name', 'LIKE', "%{$query}%")
                        ->get();

        // Jika tidak ditemukan
        if ($orders->isEmpty()) {
            return response()->json(['message' => 'No orders found'], 404);
        }

        // Jika ditemukan
        return response()->json($orders, 200);
    }
}

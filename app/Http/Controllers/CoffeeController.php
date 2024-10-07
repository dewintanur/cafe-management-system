<?php
namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use illuminate\Support\Facades\Log;
class CoffeeController extends Controller
{
    public function apiSearch(Request $request)
{
    $query = $request->input('query');
    Log::info('Search Query: ', ['query' => $query]);


    // Cek apakah ada query yang diberikan
    if (!$query) {
        return response()->json(['error' => 'Query is required'], 400);
    }

    // Mencari coffee berdasarkan nama
    $coffees = Coffee::where('name', 'LIKE', "%{$query}%")->get();

    // Cek jika tidak ada hasil
    if ($coffees->isEmpty()) {
        return response()->json(['message' => 'No coffee found'], 404);
    }

    return response()->json($coffees, 200);
}
    // API: Menampilkan daftar semua coffee
    public function index() {
        $coffees = Coffee::all();
        return response()->json($coffees, 200);
    }

    // API: Menampilkan detail coffee berdasarkan ID
    public function show($id) {
        try {
            $coffee = Coffee::findOrFail($id);
            return response()->json($coffee, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Coffee not found'], 404);
        }
    }

    // API: Menyimpan coffee baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $coffee = Coffee::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'user_id' => $request->user()->id, // Ambil user_id dari pengguna yang terautentikasi
        ]);

        return response()->json($coffee, 201);
    }

    // API: Memperbarui coffee di database
    public function update(Request $request, $id) {
        try {
            $coffee = Coffee::findOrFail($id);

            $request->validate([
                'name' => 'string|nullable',
                'price' => 'numeric|nullable',
                'description' => 'string|nullable',
            ]);

            $coffee->update($request->only(['name', 'price', 'description']));

            return response()->json($coffee, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Coffee not found'], 404);
        }
    }

    // API: Menghapus coffee dari database
    public function destroy($id) {
        try {
            $coffee = Coffee::findOrFail($id);
            $coffee->delete();

            return response()->json(['message' => 'Coffee deleted successfully'], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Coffee not found'], 404);
        }
    }

}

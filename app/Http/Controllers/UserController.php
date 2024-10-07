<?php

namespace App\Http\Controllers;

// UserController.php
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
        ]);
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(null, 204);
    }
    public function __construct()
{
    $this->middleware('auth'); // Hanya pengguna yang terautentikasi
}

public function adminOnly()
{
    if (auth()->user()->role !== 'admin') {
        return response()->json(['error' => 'Unauthorized'], 403);
    }
}

}

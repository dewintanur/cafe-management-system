<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Login route (you can adjust middleware if needed)
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('orders/search', [OrderController::class, 'apiSearch']);
    Route::get('coffees/search', [CoffeeController::class, 'apiSearch']);

// Protected routes that require authentication
Route::middleware('auth:sanctum')->group(function () {
    
    // Coffee resource API
    Route::apiResource('coffees', CoffeeController::class);
    
    // Coffee-specific search route
    
    
    // Order resource API
    Route::apiResource('orders', OrderController::class);
    
    // Get current authenticated user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

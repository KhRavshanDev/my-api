<?php

use App\Http\Controllers\CancerController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::resource('cancer', CancerController::class);

// Public routes
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::get('/cancer', [CancerController::class, 'index']);
Route::get('/cancer/{id}', [CancerController::class, 'show']);
Route::get('/cancer/search/{type}', [CancerController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/cancer', [CancerController::class, 'store']);
    Route::put('/cancer/{id}', [CancerController::class, 'update']);
    Route::delete('/cancer/{id}', [CancerController::class, 'destroy']);
    Route::post('/signout', [AuthController::class, 'signout']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

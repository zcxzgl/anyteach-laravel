<?php

use App\Http\Controllers\Platform\UserController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
// });

Route::get('/platform/test/{name}', [UserController::class, 'test']);
Route::post('/platform/testpost', [UserController::class, 'testPost']);
Route::get('/platform/user_info/{user_id}', [UserController::class, 'info']);

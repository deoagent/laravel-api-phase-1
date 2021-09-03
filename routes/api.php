<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API PHASE 1
Route::get("list-employees", [ApiController::class, "listEmployees"]);
Route::get("single-employee/{id}", [ApiController::class, "getSingleEmployee"]);
Route::post("add-employees", [ApiController::class, "createEmployee"]);
Route::put("update-employees/{id}", [ApiController::class, "updateEmployee"]);
Route::delete("delete-employees/{id}", [ApiController::class, "deleteEmployee"]);
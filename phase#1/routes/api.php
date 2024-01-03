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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Add Employee
Route::post('add-employee', [ApiController::class, 'addEmployee']);

// localhost/api/add-employee

// List Employee
Route::get('list-employee', [ApiController::class, 'listEmployee']);

// localhost/api/list-employee

// Single Employee
Route::get('single-employee/{id}', [ApiController::class, 'getSingleEmployee']);

// localhost/api/single-employee/{id}

// Update Employee
Route::put('update-employee/{id}', [ApiController::class, 'updateEmployee']);

// Delete Employee
Route::delete('delete-employee/{id}', [ApiController::class, 'deleteEmployee']);

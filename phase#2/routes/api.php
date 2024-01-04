<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\APi\ProjectController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


/**
 * Open API Route without any auth
 */
Route::controller(StudentController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login','login');
});


/**
 * Protected API Route with Authentication
 */
Route::group([
    "middleware" => ["auth:sanctum"],
], function(){
    // Student Controller
    Route::get('profile', [StudentController::class, 'profile']);
    Route::get('logout', [StudentController::class, 'logout']);

    // Project Controller
    Route::post('add-project', [ProjectController::class, 'addProject']);
    Route::get('list-project', [ProjectController::class, 'getProjectList']);
    Route::get('single-project/{id}', [ProjectController::class, 'getSingleProject']);
    Route::delete('delete-project/{id}', [ProjectController::class, 'deleteProject']);
});


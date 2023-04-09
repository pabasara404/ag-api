<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GnDivisionController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TimberCuttingPermitApplicationController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:sanctum')->group(function () {
});

Route::get('user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout']);

//routes for letters
Route::get('letter', [LetterController::class, 'index']);

//routes for employees
Route::get('employee', [EmployeeController::class, 'index']);
Route::put('employee/{employee}', [EmployeeController::class, 'update']);
Route::delete('employee/{employee}', [EmployeeController::class, 'destroy']);
Route::post('employee', [EmployeeController::class, 'store']);

//routes for timberCuttingPermitApplications
Route::get('timberCuttingPermitApplication', [TimberCuttingPermitApplicationController::class, 'index']);
Route::put('timberCuttingPermitApplication/{timberCuttingPermitApplication}', [TimberCuttingPermitApplicationController::class, 'update']);
Route::delete('timberCuttingPermitApplication/{timberCuttingPermitApplication}', [TimberCuttingPermitApplicationController::class, 'destroy']);
Route::post('timberCuttingPermitApplication', [TimberCuttingPermitApplicationController::class, 'store']);

//routes for gnDivisions
Route::get('gnDivision', [GnDivisionController::class, 'index']);
Route::put('gnDivision/{gnDivision}', [GnDivisionController::class, 'update']);
Route::delete('gnDivision/{gnDivision}', [GnDivisionController::class, 'destroy']);
Route::post('gnDivision', [GnDivisionController::class, 'store']);

//routes for roles
Route::get('role', [RoleController::class, 'index']);
Route::put('role/{role}', [RoleController::class, 'update']);
Route::delete('role/{role}', [RoleController::class, 'destroy']);
Route::post('role', [RoleController::class, 'store']);

<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NavbarController;
use App\Http\Controllers\MenuController;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/menu', [MenuController::class, 'index']);

Route::middleware('api')->group(base_path('routes/api.php'));

Route::get('/icone', function () {
    return view('welcome');
});

Route::get('/users', function (Request $request) {
    return User::all();
});

Route::get('/elior', function (Request $request) {
    return User::all();
});

Route::get('/navbars', [NavbarController::class, 'index']);

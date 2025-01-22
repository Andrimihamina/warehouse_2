<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NavbarController;
use App\Http\Controllers\MenuController;


Route::get('/home', [MenuController::class, 'index']);

<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [WebController::class,'home']);

    Route::prefix('category')->group(function () {
        Route::get('/', [WebController::class,'category']);
        Route::get('/food-beverage', [WebController::class,'foodBeverage']);
        Route::get('/beauty-health', [WebController::class,'beautyHealth']);
        Route::get('/home-care', [WebController::class,'homeCare']);
        Route::get('/baby-kid', [WebController::class,'babyKid']);
    });
    
    Route::get('/user/{id}/name/{name}', [WebController::class, 'user']);

    Route::get('/transaksi', [WebController::class, 'transaksi']);
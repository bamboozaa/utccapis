<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Competency01Controller;
use App\Http\Controllers\Competency02Controller;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/products',ProductController::class);
Route::apiResource('/downloads',DownloadController::class);
Route::apiResource('/competency01',Competency01Controller::class);
Route::apiResource('/competency02',Competency01Controller::class);

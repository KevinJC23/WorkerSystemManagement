<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\WjobController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\LocationController;
use App\Http\Middleware\WorkerMiddleware;
use App\Http\Middleware\WjobMiddleware;
use App\Http\Middleware\DivisionMiddleware;
use App\Http\Middleware\LocationMiddleware;

Route::prefix('worker')->controller(WorkerController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/add', 'add');
    Route::get('/update/{id}', 'update');
    Route::post('/save', 'save')->middleware(WorkerMiddleware::class);
    Route::get('/delete/{id}', 'delete');
    Route::post('/delete/{id}', 'delete');
});

Route::prefix('wjob')->controller(WjobController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/add', 'add');
    Route::get('/update/{id}', 'update');
    Route::post('/save', 'save')->middleware(WjobMiddleware::class);
    Route::get('/delete/{id}', 'delete');
    Route::post('/delete/{id}', 'delete');
});

Route::prefix('division')->controller(DivisionController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/add', 'add');
    Route::get('/update/{id}', 'update');
    Route::post('/save', 'save')->middleware(DivisionMiddleware::class);
    Route::get('/delete/{id}', 'delete');
    Route::post('/delete/{id}', 'delete');
});

Route::prefix('location')->controller(LocationController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/add', 'add');
    Route::get('/update/{id}', 'update');
    Route::post('/save', 'save')->middleware(LocationMiddleware::class);
    Route::get('/delete/{id}', 'delete');
    Route::post('/delete/{id}', 'delete');
});

Route::get('/', function () {
    return view('welcome');
});
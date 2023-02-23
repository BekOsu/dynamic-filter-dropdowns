<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/todolist', function () {
    return view('todolist');
});


//Route::get('/calculatorr', \App\Http\Livewire\Calculator::class)->name('calculatorr');

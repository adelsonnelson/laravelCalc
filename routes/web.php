<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calculadoraController;

Route::get('/', function () { 
    return view('index');
});

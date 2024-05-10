<?php

use App\Http\Controllers\DiagnosaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('raihan');
});

route::get('raihan',[DiagnosaController::class,'index']);

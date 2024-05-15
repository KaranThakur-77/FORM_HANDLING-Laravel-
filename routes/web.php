<?php

use App\Http\Controllers\FORM_Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact',[FORM_Controller::class,'index'] );
Route::post('contact',[FORM_Controller::class,'store'] );

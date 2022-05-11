<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TickketController;

Route::get('/' , function(){
    return view('app');
});

Route::get('my_ticket' , [TickketController::class,'index']);
Route::get('show_ticket', function(){
    return view('show_ticket');
});
Route::get('open_ticket', function(){
    return view('open_ticket');
});
Route::post('/store' , [TickketController::class,'store']);


<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin', function(){
return 'admin Page';
});
Route::get('/admin/admin', function(){
    return ' Page';
    });
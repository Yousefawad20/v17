<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Home';
    });

Route::get('/about', function(){
return 'About Us Page';
});
Route::get('/Countact', function(){
    return 'Countact Page';
    });
include'admin.php';


// Route::get('url','action');
// Route::post('url','action');
// Route::put('url','action');
// Route::patch('url','action');
// Route::delete('url','action');  
Route::get('user/{name}/{age}',function($name, $age){
    return "Welcome $name , your age is $age";
});
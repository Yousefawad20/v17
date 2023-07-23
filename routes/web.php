<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function(){
//     return 'Home';
//     });

// Route::get('/about', function(){
// return 'About Us Page';
// });
// Route::get('/Countact', function(){
//     return 'Countact Page';
//     });
// include'admin.php';


// // Route::get('url','action');
// // Route::post('url','action');
// // Route::put('url','action');
// // Route::patch('url','action');
// // Route::delete('url','action');  
// Route::get('user/{name}/{age}',function($name, $age){
//     return "Welcome $name , your age is $age";
// });




// Route::get('user/{name}/{type}/{time?}',function($name, $type ,$time ="11:00"){

//         return "Welcome $name , your age is $type time $time";

// })->name("contactpage");


//  Route::get('/', function(){
//     $name = "php";
//     $type = "online";
//     // $time = "12:00 pm";

//     $link=route('contactpage' ,[$name , $type ]);

//   return "<a href ='$link'>Home page</a>";
//  });

//  
Route::prefix('/home')->name('home.')->group(function(){

    Route::get('/about', [StudentController::class, 'index'])->name('about');
    
    Route::get('/avg', [StudentController::class, 'avg'])->name('avg');

    Route::get('/info', [StudentController::class, 'info'])->name('info');
        
});
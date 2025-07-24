<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// // a simple route
// Route::view('/post', 'post');


// // for dynamic route with opt parameter and with secure and filtering
// Route::get('/about/{id}', function ($id) {
//     return "About page with ID: " . $id;
// })->whereNumber('id');

// // for named route
// Route::get('/name',function(){
// return "this is change by name route";
// })->name('abc');


// // for redirection route

// Route::redirect('/test', '/name', 301);


// // for route group


// Route::prefix('admin')->group(function(){
// Route::get('/dashboard', function () {
//     return "Admin Dashboard";
// });
// Route::get('/post', function () {
//     return "Admin Post";
// });
// });


// // for make a rotue of 404
// Route::fallback(function(){
//     return "404 Page Not Found";
// });

use App\Http\Controllers\HomeController;


// Route::view('/', 'home');

Route::redirect('/home','/',301);

// Route::prefix('pages')->group(function () {
//     Route::view('/', 'home',['name' =>"kawish zia"])->name('home');
//     // Route::get('/', function () {
//     //     return view('home',['name' =>"kawish zia"]);
//     // });
//     Route::view('/about', 'about')->name('about');
//     Route::view('/icecream', 'creame')->name('icecream');
//     Route::view('/services', 'service')->name('services');
//     Route::view('/blog', 'blog')->name('blog');
//     Route::view('/contact', 'contact')->name('contact');
// });

Route::fallback(function () {
    return view('404');
});




Route::prefix('pages')->group(function(){
    Route::controller(HomeController::class)->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::get('/icecream', 'icecream')->name('icecream');
        Route::get('/services', 'service')->name('services');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/contact', 'contact')->name('contact');
    });
});
Route::get('/',HomeController::class)->name('home');









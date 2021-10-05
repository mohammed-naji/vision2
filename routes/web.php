<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return 'Homepage';
//     return view('home');
//     // return view('welcome');
// });
// Route::get('about-meeeeeeeeeeeeeeeee', function() {
//     return view('about');
// })->name('abouturl');
// Route::get('contact', function() {
//     return view('contact');
// })->name('contacturl');

/*

// Route::نوع الرابط('route', Action);
Route::get('/contact', function() {
    return 'Contact Us';
}); // test.com/contact

Route::get('/contact/map', function() {
    return 'Map Address';
}); // test.com/contact

Route::get('/about-our-team', function() {
    return 'About Us';
})->name('mohammed');


Route::get('/person/{name}', function($name) {
    return "Welcome $name";
});

// Route::get('blog', function() {
//     return "Bolg";
// });

// Route::get('blog/{title}', function($title) {
//     return "Blog " . $title;
// });

Route::get('blog/{title?}', function($title = '') {
    return "Blog " . $title;
});

// Route::any('/register', function() {
//     return 'You are not allowed to register';
// });

Route::match(['get', 'post'], '/user/profile', function () {
    return "User Profile Page";
});


// Route::get('services', function() {
//     return 'Services Page';
// });


Route::get('services/{name?}', function($name = '') {
    return 'Services Single Page : ' . $name ;
});*/


// Route::get('/', [HomeController::class, 'home']);

// Route::get('/users/{username9}/photos', function($username) {
//     return "$username photos";
// })->name('userphoto');
Route::get('/', function() {
    return "This is home URL New Code will be added here";
});

// Route::get('add/{x}/{y}', function($x, $y) {
//     return $x + $y;
// });

// Route::get('sub/{x}/{y}', function($x, $y) {
//     return $x - $y;
// });

// Route::get('div/{x}/{y}', function($x, $y) {
//     return $x / $y;
// });

// Route::get('mul/{x}/{y}', function($x, $y) {
//     return $x * $y;
// });

// Route::get('{op}/{x}/{y}', function($op, $x, $y) {
//     if($op == 'add') {
//         return $x + $y;
//     }elseif($op == 'sub') {
//         return $x - $y;
//     }elseif($op == 'div') {
//         return $x / $y;
//     }elseif($op == 'mul') {
//         return $x * $y;
//     }else {
//         return "This Operation not allowed";
//     }
// });

Route::get('/{op}/{x}/{y}', [PageController::class, 'calculate'])->name('operation');
// Route::get('/{op}/{x}/{y}', 'PageController@calculate'); // Before Laravel 8

Route::get('/{fname}/{lname}', [PageController::class, 'full_name']);

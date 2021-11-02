<?php

use App\Http\Controllers\AgencyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\SiteController;
use App\Models\Post;

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
    // return bcrypt(123);
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

// Route::get('/{op}/{x}/{y}', [PageController::class, 'calculate'])->name('operation');
// // Route::get('/{op}/{x}/{y}', 'PageController@calculate'); // Before Laravel 8

// Route::get('/{fname}/{lname}', [PageController::class, 'full_name']);

// Route::view('service-policy', 'policy');

Route::get('avg/{name}/{avg}', [ContentController::class, 'avg'])->name('avg');
Route::get('students', [ContentController::class, 'students'])->name('students');


Route::prefix('site')->group(function() {
    Route::get('/', [SiteController::class, 'index'])->name('index');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
    Route::get('/team', [SiteController::class, 'team'])->name('team');
    Route::get('/services', [SiteController::class, 'services'])->name('services');
    Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
});

// site/
// site/about
// site/contact
// site/team
// site/services


// Route::get('portfolio', );
// Route::get('portfolio/portfolio', );
// Route::get('portfolio/about', );
// Route::get('portfolio/contact', );

Route::prefix('portfolio')->group(function() {
    Route::get('/', [PortfolioController::class, 'index'])->name('port.index');
    Route::get('/portfolio', [PortfolioController::class, 'portfolio'])->name('port.portfolio');
    Route::get('/about', [PortfolioController::class, 'about'])->name('port.about');
    Route::get('/contact', [PortfolioController::class, 'contact'])->name('port.contact');
    Route::post('/contact', [PortfolioController::class, 'contactSubmit'])->name('port.contactSubmit');
    Route::put('/contact', [PortfolioController::class, 'contactEdit'])->name('port.contactEdit');
    Route::delete('/contact', [PortfolioController::class, 'contactDelete'])->name('port.contactDelete');
});


Route::prefix('agency')->group(function() {
    Route::get('/', [AgencyController::class, 'index']);
    Route::post('contactus', [AgencyController::class, 'contact'])->name('agencycontact');
});


Route::get('email', [EmailController::class, 'index']);
Route::post('email', [EmailController::class, 'emailData'])->name('emailurl');


Route::get('/cv', [EmailController::class, 'cv']);
Route::post('/cv', [EmailController::class, 'cvData'])->name('cvurl');


Route::get('add-data', function() {

    // INSERT INTO posts () VALUES ();
    Post::create([
        'title' => 'Title From Code',
        'content' => 'Content From Code',
        'image' => 'image.png'
    ]);

    // Post::create($request->except('_token'));

});


Route::prefix('products')->name('products.')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('create', [ProductController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::put('edit/{id}', [ProductController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('show/{id}', [ProductController::class, 'show'])->name('show');
    Route::get('delete_all', [ProductController::class, 'delete_all'])->name('delete_all');
    Route::delete('delete_selected', [ProductController::class, 'delete_selected'])->name('delete_selected');
});


Route::get('one_to_one', [RelationController::class, 'one_to_one']);
Route::get('one_to_many', [RelationController::class, 'one_to_many']);





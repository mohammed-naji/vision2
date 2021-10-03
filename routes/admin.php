<?php
use Illuminate\Support\Facades\Route;

// Admin Routes

Route::prefix('admin')->group(function() {
    Route::get('/', function() {});
    Route::get('posts', function() {});
    Route::get('posts/add', function() {
        return "This is post add page";
    });
    Route::get('photos', function() {});
    Route::get('users', function() {});
    Route::get('users/show', function() {});
    Route::get('summary', function() {});
});

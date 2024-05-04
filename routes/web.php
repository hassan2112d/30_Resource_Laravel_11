<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\Usercontroller;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Single Controller
Route::resource('user',Usercontroller::class);

//Multiple Controller

// Route::resource([
//     'users' => Usercontroller::class,
//     'comment' => CommentController::class
// ]);

Route::resource('user.comment',CommentController::class);




<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)
    ->prefix('/post')
    ->group(function () {
        Route::get('/', 'index');
    });

Route::controller(UserController::class)
    ->prefix('/user')
    ->group(function () {
        Route::get('/', 'index');
    });

Route::controller(CommentController::class)
    ->prefix('/comment')
    ->group(function () {
        Route::get('/', 'index');

        Route::get('/post/{post}', 'forPost');
    });

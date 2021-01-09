<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('posts', Controllers\PostsController::class)->only(['index', 'show', 'create', 'store']);
    Route::resource('posts.comments', Controllers\PostCommentsController::class)->only(['index', 'create', 'store']);
    Route::resource('comments', Controllers\CommentsController::class)->only(['show', 'edit', 'update', 'destroy']);
    Route::get('comments/{comment}/delete', [Controllers\CommentsController::class, 'delete'])->name('comments.delete');
});

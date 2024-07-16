<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;


Route::get('/', [PublicController::class,'homepage'])->name('homepage');

Route::get('/about-us', [PublicController::class,'aboutUs'])->name('aboutUs');

Route::get('/create/article', [ArticleController::class,'create'])->middleware('auth')->name('create.article');

Route::get('/article/index', [ArticleController::class,'index'])->name('article.index');

Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

Route::get('revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::get('revisor/index/{article}', [RevisorController::class, 'articleToCheck'])->middleware('isRevisor')->name('articleToCheck');

Route::get('revisor/form-revisor', [RevisorController::class, 'formRevisor'])->middleware('auth')->name('formRevisor');

Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');

Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

// Route::patch('/review/{article}', [RevisorController::class, 'review'])->name('review');

Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::get('revisor/show', [RevisorController::class, 'show'])->middleware('isRevisor')->name('revisor.show');

Route::post('/lingua/{lang}',[PublicController::class,'setLanguage'])->name('setLocale');

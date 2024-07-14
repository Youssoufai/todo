<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/vdi', 'vdi.vdi')->name('vdi');
Route::view('/service', 'service')->name('service');
Route::view('/podcast', 'podcast.index')->name('podcast');

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
})->name('landingPage');

Route::view('/thanksPage', 'thanksPage')->name('thanks.page');

Route::view('/thanksPage','thanksPage')->name("thanks.page");
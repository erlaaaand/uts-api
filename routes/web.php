<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ZenQuoteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quote/ui', [ZenQuoteController::class, 'showQuoteUI'])->name('quote.random.ui');

Route::get('/quote/random', [ZenQuoteController::class, 'getRandomQuote']);

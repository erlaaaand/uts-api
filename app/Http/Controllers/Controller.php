<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

abstract class Controller
{

public function getRandomMovieQuote()
{
    $response = Http::withHeaders([
        'X-RapidAPI-Key' => env('RAPIDAPI_KEY'),
        'X-RapidAPI-Host' => 'movie-quote-api.p.rapidapi.com'
    ])->get('https://movie-quote-api.p.rapidapi.com/v1/quote/');

    if ($response->successful()) {
        return response()->json($response->json());
    }

    return response()->json(['error' => 'Gagal mengambil quote'], 500);
}

}

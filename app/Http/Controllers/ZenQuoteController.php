<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ZenQuoteController extends Controller
{

    public function showQuoteUI()
    {
        $response = Http::withOptions([
            'verify' => false // hapus kalau sudah setup cacert.pem
        ])->get('https://zenquotes.io/api/random');

        if ($response->successful()) {
            $quote = $response->json()[0]; // ZenQuotes response is array
            return view('zenquote', ['quote' => $quote]);
        }

        return view('zenquote', ['quote' => null]);
    }

    public function getRandomQuote()
    {
        $response = Http::withOptions([
            'verify' => false
        ])->get('https://zenquotes.io/api/random');


        if ($response->successful()) {
            return response()->json($response->json());
        }

        return response()->json(['error' => 'Gagal mengambil quote dari ZenQuotes'], 500);
    }
}

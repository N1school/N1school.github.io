<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatAiController extends Controller
{
    public function chat(Request $request)
    {
        $question = $request->input('question');

        $response = Http::post('http://localhost:5000/get-answer', [
            'question' => $question
        ]);
        if ($response->successful()) {
            $answer = $response->json('answer');
            return response()->json(['answer' => $answer]);
        } else {
            return response()->json(['error' => 'There was an error communicating with the Python API'], 500);
        }
    }
}


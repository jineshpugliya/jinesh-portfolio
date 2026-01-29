<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiWellnessController extends Controller
{
    public function analyze(Request $request)
    {
        $request->validate([
            'text' => 'required|string|min:3'
        ]);

        $prompt = <<<PROMPT
You are a wellness and study coach AI for students.

Analyze the following message:

"{$request->text}"

Return JSON with:
- mood (happy, tired, stressed, motivated, anxious, bored, overwhelmed, hopeful, sleepy)
- confidence (0 to 1)
- study_tip
- food_tip
- wellness_tip

Respond ONLY in JSON.
PROMPT;

        $response = Http::post(
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . config('services.gemini.key'),
            [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ]
            ]
        );

        if (!$response->successful()) {
            return response()->json(['error' => 'AI failed'], 500);
        }

        $text = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? null;

        return response()->json([
            'success' => true,
            'ai' => json_decode($text, true)
        ]);
    }
}

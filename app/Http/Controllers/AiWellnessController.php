<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AiWellnessController extends Controller
{
    public function analyze(Request $request)
    {
        $request->validate([
            'text' => 'required|string|min:3',
        ]);

        $prompt = <<<PROMPT
You are a wellness and study coach AI for students.

Analyze the following message:

"{$request->text}"

Return STRICT JSON only:
{
  "mood": "happy | tired | stressed | motivated | anxious | bored | overwhelmed | hopeful | sleepy",
  "confidence": number between 0 and 1,
  "study_tip": string,
  "food_tip": string,
  "wellness_tip": string
}

No markdown.
No explanation.
Only valid JSON.
PROMPT;

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'x-goog-api-key' => config('services.gemini.key'),
            ])->post(
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent',
                [
                    'contents' => [
                        [
                            'role' => 'user',
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ]
            );

            if (!$response->successful()) {
                Log::error('Gemini HTTP Error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return response()->json([
                    'success' => false,
                    'error' => 'Gemini HTTP error',
                ], 500);
            }

            $text = $response->json()['candidates'][0]['content']['parts'][0]['text'] ?? '';

            // 🔥 CLEAN GEMINI OUTPUT SAFELY
            $text = preg_replace('/```json|```/', '', $text);
            $text = trim($text);

            Log::info('Gemini RAW OUTPUT', ['text' => $text]);

            $decoded = json_decode($text, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid JSON from Gemini', [
                    'json_error' => json_last_error_msg(),
                    'raw' => $text,
                ]);

                return response()->json([
                    'success' => false,
                    'error' => 'Invalid JSON from Gemini',
                ], 500);
            }

            return response()->json([
                'success' => true,
                'ai' => $decoded,
            ]);
        } catch (\Throwable $e) {
            Log::error('AI Exception', [
                'message' => $e->getMessage(),
            ]);

            return response()->json([
                'success' => false,
                'error' => 'Exception',
            ], 500);
        }
    }
}

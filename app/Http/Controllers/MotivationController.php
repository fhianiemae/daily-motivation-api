<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\StudyTip;
use App\Models\Challenge;

class MotivationController extends Controller
{
    public function today(Request $request)
    {
        $mood = $request->query('mood');

        if (!$mood) {
            return response()->json([
                'message' => 'How are you feeling today?',
                'available_moods' => ['happy', 'sad', 'stressed', 'tired', 'neutral'],
                'instruction' => 'Add ?mood=your_mood sa URL (hal. /api/motivation/today?mood=happy)'
            ]);
        }

        $quote = Quote::inRandomOrder()->first();
        $tip = StudyTip::inRandomOrder()->first();
        $challenge = Challenge::inRandomOrder()->first();

        $moods = [
            'happy' => "Ang saya mo ngayon! 🎉 Keep spreading good vibes!",
            'sad' => "Huwag kang susuko 💙 may liwanag pagkatapos ng dilim.",
            'stressed' => "Huminga ka muna 🌿 kaya mo ‘yan step by step.",
            'tired' => "Magpahinga ka muna 😴 bukas ulit ang laban.",
            'neutral' => "Keep going 📚 kahit maliit na progress, malaking bagay!"
        ];

        return response()->json([
            'date' => now()->toDateString(),
            'your_mood' => $mood,
            'mood_message' => $moods[$mood] ?? $moods['neutral'],
            'quote' => $quote->quote,
            'study_tip' => $tip->tip,
            'challenge' => $challenge->challenge,
        ]);
    }
}

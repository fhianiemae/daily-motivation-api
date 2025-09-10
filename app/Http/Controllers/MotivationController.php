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
                'Message' => 'How are you feeling today?',
                'Available Moods' => ['happy', 'sad', 'stressed', 'tired', 'neutral', 'motivated', 'anxious', 'confident', 'lonely', 
                'excited', 'grateful', 'frustrated', 'hopeful', 
                'bored', 'inspired'],
                'Instruction' => 'Add (?mood=Your Mood) sa URL (Example: ...../api/motivation/today?mood=happy)'
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
            'neutral' => "Keep going 📚 kahit maliit na progress, malaking bagay!",
            'motivated' => "Grabe ang energy mo 💪 ituloy mo lang, malayo mararating mo!",
            'anxious' => "Kalma lang 🕊️ isang hakbang lang muna, hindi mo kailangang madaliin lahat.",
            'confident' => "Angas! 🔥 Maniwala ka sa sarili mo, deserve mo ‘yan.",
            'lonely' => "Hindi ka nag-iisa 🤝 may mga taong handang makinig at sumuporta.",
            'excited' => "Woohoo! 🎊 Sulitin mo ang saya at ibahagi sa iba.",
            'grateful' => "Ang ganda ng pananaw mo 🙏 tandaan, maliliit na bagay ay malaking biyaya.",
            'frustrated' => "Okay lang madapa 😓 bumangon ka ulit, mas malakas ka kaysa iniisip mo.",
            'hopeful' => "May pag-asa palagi 🌅 kapit lang, darating din ang tamang panahon.",
            'bored' => "Hanap ka ng bago 📖🎶 minsan kailangan lang ng fresh na activity.",
            'inspired' => "Ang ganda ng mindset mo ✨ gamitin mo ‘yan para mag-create at mag-grow."
        ];

        return response()->json([
            'Date' => now()->toDateString(),
            'Your mood' => $mood,
            'Mood message' => $moods[$mood] ?? $moods['neutral'],
            'Quote' => $quote->quote,
            'Study tip' => $tip->tip,
            'Challenge' => $challenge->challenge,
        ]);
    }
}

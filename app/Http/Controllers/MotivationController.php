<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\StudyTip;
use App\Models\Challenge;

class MotivationController extends Controller
{
    public function today()
    {
        $quote = Quote::inRandomOrder()->first();
        $tip = StudyTip::inRandomOrder()->first();
        $challenge = Challenge::inRandomOrder()->first();

        return response()->json([
            'date' => now()->toDateString(),
            'quote' => $quote->quote,
            'study_tip' => $tip->tip,
            'challenge' => $challenge->challenge,
        ]);
    }
}

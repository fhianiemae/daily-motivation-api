<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\StudyTip;

class MotivationController extends Controller
{
    public function today()
    {
        $quote = Quote::inRandomOrder()->first();
        $tip = StudyTip::inRandomOrder()->first();

        return response()->json([
            'date' => now()->toDateString(),
            'quote' => $quote->quote,
            'study_tip' => $tip->tip,
            'challenge' => 'Summarize today’s lesson in 3 bullet points.'
        ]);
    }
}

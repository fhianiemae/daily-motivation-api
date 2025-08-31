<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudyTip;


class StudyTipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tips = [
        "Use the Pomodoro technique: 25 minutes study, 5 minutes rest.",
        "Write summaries of what you learn each day.",
        "Use flashcards to memorize key concepts."
         ];

        foreach($tips as $tip) {
        StudyTip::create(['tip' => $tip]);
    }
    }
}

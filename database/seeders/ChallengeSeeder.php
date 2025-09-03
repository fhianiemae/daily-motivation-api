<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Challenge;

class ChallengeSeeder extends seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $challenges = [
        "Explain a topic to a friend in simple words.",
        "Create 10 flashcards for key terms.",
        "Teach yourself by writing a mini-lesson.",
        "Review yesterday's notes without looking at the book.",
        "Answer 5 practice questions under time limit.",
        "Write a one-paragraph summary of a chapter.",
        "Highlight only 3 main ideas from your notes.",
        "Draw a mind map of today's topic.",
        "Create an acronym to remember a list.",
        "Write 3 questions you still don't understand.",
        "Test yourself on 10 random terms.",
        "Record your explanation and listen to it.",
        "Review notes for 15 minutes before bed.",
        "Solve 5 practice problems without notes.",
        "Make a chart comparing two concepts.",
        "Write a one-sentence definition for 5 key terms.",
        "Turn today's lesson into a story.",
        "Explain a topic using a drawing.",
        "Review your mistakes and write corrections.",
        "List 5 things you remember without checking notes.",
        "Summarize a page in 5 words or less.",
        "Write down 3 possible exam questions.",
        "Test yourself using flashcards for 10 minutes.",
        "Review notes with a classmate.",
        "Practice explaining a topic in 1 minute.",
        "Create a short quiz for yourself.",
        "Solve problems without looking at solutions.",
        "Write the main idea of each paragraph.",
        "Memorize 5 formulas and test yourself.",
        "Outline a chapter in 5 bullet points.",
        "Practice past exam questions.",
        "Write 3 things you learned today.",
        "Quiz a classmate on key points.",
        "Rewrite notes in your own words.",
        "Use the Pomodoro technique for 2 cycles.",
        "Summarize a topic on one flashcard.",
        "List 5 keywords for each lesson.",
        "Write down what you learned without looking.",
        "Explain a concept to someone younger.",
        "Make a timeline of important events.",
        "Group related concepts into categories.",
        "Write 3 ways this lesson connects to real life.",
        "Practice recalling definitions aloud.",
        "Create a diagram from memory.",
        "Write 2 things you found difficult today.",
        "Turn a concept into a practice problem.",
        "Review your flashcards before sleeping.",
        "Write one summary sentence per topic.",
        "Teach a chapter as if you are the teacher.",
        ];

        foreach ($challenges as $challenge) {
            Challenge::create(['challenge' => $challenge]);
        }
    }
}
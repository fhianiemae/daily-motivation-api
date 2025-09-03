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
        "Use flashcards to memorize key concepts.",
        "Set clear study goals before starting.",
        "Stay consistent with a daily routine.",
        "Create a quiet, distraction-free space.",
        "Keep your desk clean and organized.",
        "Study in the same spot every day.",
        "Break large tasks into smaller steps.",
        "Review notes right after class.",
        "Practice active recall instead of rereading.",
        "Space out your review sessions.",
        "Test yourself regularly.",
        "Teach the material to someone else.",
        "Create mind maps for complex topics.",
        "Highlight only key information.",
        "Use acronyms to remember lists.",
        "Connect lessons to real-life examples.",
        "Turn concepts into stories.",
        "Write notes in your own words.",
        "Use the Cornell note-taking method.",
        "Color-code your notes by topic.",
        "Record and replay lectures.",
        "Summarize a chapter in one page.",
        "Draw diagrams to visualize ideas.",
        "Review your notes daily.",
        "Make digital backups of notes.",
        "Quiz yourself with past papers.",
        "Simulate exam conditions at home.",
        "Time yourself when practicing tests.",
        "Focus on your weak areas first.",
        "Reward yourself after finishing tasks.",
        "Set deadlines for each subject.",
        "Avoid multitasking while studying.",
        "Study when your energy is highest.",
        "Plan tomorrow's tasks the night before.",
        "Track your progress weekly.",
        "Use habit trackers for consistency.",
        "Block distracting websites while studying.",
        "Silence unnecessary notifications.",
        "Stay hydrated with water nearby.",
        "Eat brain foods like nuts and fruits.",
        "Avoid too much sugar while studying.",
        "Exercise daily to boost focus.",
        "Stretch during breaks.",
        "Take deep breaths to reduce stress.",
        "Sleep at least 7-8 hours a night.",
        "Avoid cramming all night before exams.",
        "Take short naps to recharge.",
        "Meditate for better concentration.",
        "Join a study group for support.",
        "Discuss lessons with classmates.",
        "Debate topics to deepen understanding.",
        "Share summaries with peers.",
        "Quiz each other before exams.",
        "Explain topics to a friend.",
        "Keep study groups small and focused.",
        "Ask for feedback from peers.",
        "Seek help when confused.",
        "Review group discussions afterward.",
        "Use online tutorials for hard subjects.",
        "Watch short explainer videos.",
        "Join academic forums to ask questions.",
        "Use study apps like Quizlet.",
        "Record audio notes for revision.",
        "Listen to study playlists or white noise.",
        "Use digital flashcards for portability.",
        "Keep a study journal.",
        "Outline each subject before exams.",
        "Create weekly study schedules.",
        "Rotate subjects to avoid boredom.",
        "Mix easy and hard topics together.",
        "Review old exams to see patterns.",
        "Practice answering in full sentences.",
        "Focus more on understanding than memorizing.",
        "Always check your mistakes and correct them.",
        "Underline keywords in questions.",
        "Stay calm under exam pressure.",
        "Pack exam materials the night before.",
        "Arrive early to exams to relax.",
        "Avoid last-minute cramming at the exam hall.",
        "Trust your first instinct in multiple-choice.",
        "Read all instructions carefully.",
        "Manage time wisely during exams.",
        "Don't get stuck on one question.",
        "Double-check answers if time allows.",
        "Stay positive and confident.",
        "Celebrate small study wins.",
        "Use motivational quotes for inspiration.",
        "Visualize your success.",
        "Stay curious about what you learn.",
        "Link new knowledge to old knowledge.",
        "Ask 'why' and 'how' questions often.",
        "Keep your mind active with puzzles.",
        "Study a little every day instead of cramming.",
        "Set realistic goals you can achieve.",
        "Be patient with your progress.",
        "Balance study with rest and hobbies.",
        "Always believe in your ability to improve.",
        "Remember: learning is a lifelong journey.",
        ];

        foreach($tips as $tip) {
        StudyTip::create(['tip' => $tip]);
        }
    }
}

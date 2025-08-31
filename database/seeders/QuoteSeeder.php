<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quotes = [
        "Education is the most powerful weapon you can use to change the world. – Nelson Mandela",
        "The beautiful thing about learning is nobody can take it away from you. – B.B. King",
        "Study while others are sleeping; work while others are loafing; prepare while others are playing."
        ];

        foreach($quotes as $q) {
        Quote::create(['quote' => $q]);
        }
    }
}

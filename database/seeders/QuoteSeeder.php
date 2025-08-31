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
        "Education is the most powerful weapon you can use to change the world. — Nelson Mandela",
        "The beautiful thing about learning is nobody can take it away from you. — B.B. King",
        "Study while others are sleeping; work while others are loafing; prepare while others are playing.",
        "The roots of education are bitter, but the fruit is sweet. — Aristotle",
        "Learning never exhausts the mind. — Leonardo da Vinci",
        "Develop a passion for learning. If you do, you will never cease to grow. — Anthony J. D'Angelo",
        "Education is not preparation for life; education is life itself. — John Dewey",
        "The mind is not a vessel to be filled, but a fire to be kindled. — Plutarch",
        "The more that you read, the more things you will know. The more that you learn, the more places you'll go. — Dr. Seuss",
        "The capacity to learn is a gift; the ability to learn is a skill; the willingness to learn is a choice. — Brian Herbert",
        "Live as if you were to die tomorrow. Learn as if you were to live forever. — Mahatma Gandhi",
        "Tell me and I forget. Teach me and I remember. Involve me and I learn. — Benjamin Franklin",
        "The whole purpose of education is to turn mirrors into windows. — Sydney J. Harris",
        "A person who won't read has no advantage over one who can't read. — Mark Twain",
        "Education is the key to unlocking the world, a passport to freedom. — Oprah Winfrey",
        "Children must be taught how to think, not what to think. — Margaret Mead",
        "The only person who is educated is the one who has learned how to learn and change. — Carl Rogers",
        "Learning is not attained by chance, it must be sought for with ardor and diligence. — Abigail Adams",
        "The function of education is to teach one to think intensively and to think critically. — Martin Luther King Jr.",
        "Knowledge is power. Information is liberating. Education is the premise of progress. — Kofi Annan",
        "Education is for improving the lives of others and for leaving your community and world better than you found it. — Marian Wright Edelman",
        "The aim of education is the knowledge, not of facts, but of values. — William S. Burroughs",
        "Education is the movement from darkness to light. — Allan Bloom",
        "Learning is a treasure that will follow its owner everywhere. — Chinese Proverb",
        "Teachers open the door, but you must enter by yourself. — Chinese Proverb",
        "The great aim of education is not knowledge but action. — Herbert Spencer",
        "The more I live, the more I learn. The more I learn, the more I realize, the less I know. — Michel Legrand",
        "Education is the passport to the future, for tomorrow belongs to those who prepare for it today. — Malcolm X",
        "A good education is the foundation for a better future. — Elizabeth Warren",
        "It is not what is poured into a student that counts but what is planted. — Linda Conway",
        "Knowledge will bring you the opportunity to make a difference. — Claire Fagin",
        "The mind is not a vessel to be filled, but a fire to be kindled.— Plutarch",
        "The purpose of education is to replace an empty mind with an open one.— Malcolm ",
        "Ambition is enthusiasm with a purpose.— Frank Tyger",
        "Education is not the filling of a pail, but the lighting of a fire. — William Butler Yeats",
        "The only limit to our realization of tomorrow will be our doubts of today. — Franklin D. Roosevelt",
        "Ambition is the path to success. Persistence is the vehicle you arrive in. — Bill Bradley",
        "Education is not just about going to school; it is about widening your knowledge and absorbing the truth about life. — Shakuntala Devi",
        "Education is the key that unlocks the door to unlimited possibilities. It fuels our ambition, providing the foundation upon which greatness is built. —Anonymous",
        "The journey of lifelong learning begins with a single step. — Lailah Gifty Akita",
        "The more that you read, the more things you will know. The more that you learn, the more places you will go. —Dr. Seuss",
        "Education is not limited to a specific age; it is a lifelong pursuit. — Anonymous",
        "Learning is a lifelong process of keeping your mind open to new ideas and experiences. — Anonymous",
        "Learning is the only thing the mind never exhausts, never fears, and never regrets. — Leonardo da Vinci",
        "The journey of education knows no bounds, and its destination is endless growth. — Anonymous",
        "Learning is a treasure that will follow its owner everywhere. —Chinese Proverb",
        "Education is not just about acquiring knowledge; it is about exploring the depths of our own potential. — Anonymous",
        "Education is the key to unlocking the golden door of freedom. — George Washington Carver",
        "Education is the key that unlocks the door to personal growth and empowers us to conquer the greatest of obstacles. — Anonymous",
        "Obstacles are merely opportunities in disguise. With education as your ally, you can transform them into stepping stones towards success. — John Doe",
        "Education is the bridge that connects determination and resilience, empowering us to overcome any obstacle on our path to success. — Jane Smith",
        "Through education, we cultivate the mindset that sees challenges as invitations to grow, allowing us to triumph over even the most formidable obstacles. —Robert Johnson",
        "Education arms us with knowledge and skills, giving us the confidence to face obstacles head—on and emerge victorious. — Sarah Adams",
        "The power of education lies not in eliminating obstacles, but in equipping us with the tools and mindset to conquer them. — Michael Brown",
        "When faced with an obstacle, education empowers us to think critically, find innovative solutions, and turn setbacks into stepping stones towards success. — Emily Davis",
        "Education breeds resilience, teaching us to view obstacles as temporary roadblocks that can be overcome with determination, perseverance, and knowledge. — Mark Thompson",
        "No obstacle is insurmountable when education becomes our shield and our sword, enabling us to conquer challenges with wisdom and tenacity. — Jennifer Martinez",
        "Education is the fuel that ignites the fire within us, propelling us forward with the strength and knowledge to overcome any obstacle that stands in our way. — David Wilson",
        "Education is the most powerful weapon which you can use to change the world. — Nelson Mandela",
        "Education is not the filling of a pot but the lighting of a fire. — W.B. Yeats",
        "Being a student is easy. Learning requires actual work. — William Crawford",
        "Life is an open book test. Learning how to learn is your most valuable skill in the online world. — Marc Cuban",
        "Education is simply the soul of a society as it passes from one generation to another. — G.K. Chesterton",
        "Take what you learn and make a difference with it. — Tony Robbins",
        "A little learning is a dangerous thing. — Alexander Pope",
        "Don't make up your mind. 'Knowing' is the end of learning. — Naval Ravikant",
        "To me, education is a leading out of what is already there in the pupil's soul. — Muriel Spark",
        "Being ignorant is not so much a shame, as being unwilling to learn. — Benjamin Franklin",
        "Never stop learning. Never stop growing. — Mel Robbins",
        "Education is the ability to meet life's situations. — Dr. John G. Hibben",
        "Learning starts with failure; the first failure is the beginning of education. — John Hersey",
        "he more you learn, the more you earn. — Warren Buffett",
        "Be curious, not judgmental. — Walt Whitman",
        "The whole purpose of education is to turn mirrors into windows. — Sydney J. Harris",
        "Try to learn something about everything and everything about. — Thomas Huxley",
        "An investment in knowledge pays the best interest. — Benjamin Franklin",
        "The more that you read, the more things you will know. The more that you learn, the more places you'll go. — Dr. Seuss",
        "We learn more by looking for the answer to a question and not finding it than we do from learning the answer itself. — Lloyd Alexander",
        "For the things we have to learn before we can do them, we learn by doing them. — Aristotle",
        "The first half of my life I went to school, the second half of my life I got an education. — Mark Twain",
        "Formal education will make you a living; self-education will make you a fortune. — Jim Rohn",
        "Even the genius asks questions. — Tupac Shakur",
        "I believe that education is all about being excited about something. Seeing passion and enthusiasm helps push an educational message. — Steve Irwin",
        "The great aim of education is not knowledge but action. — Herbert Spencer",
        "Education makes a people easy to lead but difficult to drive: easy to govern, but impossible to enslave. — Peter Brougham",
        "The only person who is educated is the one who has learned how to learn and change. — Carl Rogers",
        "Education without values, as useful as it is, seems rather to make man a more clever devil. — C.S. Lewis",
        "Recipes tell you nothing. Learning techniques is the key. — Tom Colicchio",
        "People learn something every day, and a lot of times it's that what they learned the day before was wrong. — Bill Vaughan",
        "A learning curve is essential to growth. — Tammy Bjelland",
        "Learning is not attained by chance, it must be sought for with ardor and attended to with diligence. — Abigail Adams",
        "The roots of education are bitter, but the fruit is sweet. — Aristotle",
        ];

        foreach($quotes as $q) {
        Quote::create(['quote' => $q]);
        }
    }
}

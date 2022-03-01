<?php

namespace Database\Seeders;

use App\Models\Movie; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie1 = new Movie();
        $movie1->title = "Avatar"; 
        $movie1->synopsis = "Jake, who is paraplegic, replaces his twin on the Na'vi inhabited Pandora for a corporate mission. After the natives accept him as one of their own, he must decide where his loyalties lie.";
        $movie1->year = "2009"; 
        $movie1->cover = "A"; 
        $movie1->save();

        $movie2 = new Movie();
        $movie2->title = "Die hard"; 
        $movie2->synopsis = "Die Hard is an American action film series that originated with Roderick Thorp's novel Nothing Lasts Forever.";
        $movie2->year = "1988"; 
        $movie2->cover = "B"; 
        $movie2->save();
        
        $movie3 = new Movie();
        $movie3->title = "Harry Potter and the Philosopher's Stone"; 
        $movie3->synopsis = "Harry Potter, an eleven-year-old orphan, discovers that he is a wizard and is invited to study at Hogwarts. Even as he escapes a dreary life and enters a world of magic, he finds trouble awaiting him.";
        $movie3->year = "2001"; 
        $movie3->cover = "C"; 
        $movie3->save();

        $movie4 = new Movie();
        $movie4->title = "The Mask"; 
        $movie4->synopsis = "Stanley, a meek bank employee, turns into an eccentric and maniacal green-skinned superhero who can bend reality, after wearing a wooden mask that was created by Loki, the Norse god of mischief.";
        $movie4->year = "1994"; 
        $movie4->cover = "D"; 
        $movie4->save();

        $movie5 = new Movie();
        $movie5->title = "Back to the Future"; 
        $movie5->synopsis = "Marty travels back in time using an eccentric scientist's time machine. However, he must make his high-school-aged parents fall in love in order to return to the present.";
        $movie5->year = "1985"; 
        $movie5->cover = "E"; 
        $movie5->save();

        $movie6 = new Movie();
        $movie6->title = "The Last Samurai"; 
        $movie6->synopsis = "Captain Nathan Algren is hired to train the Japanese army to fight a Samurai rebellion. However, he ends up embracing the people of Samurai culture after he gets captured by them.";
        $movie6->year = "2004"; 
        $movie6->cover = "F"; 
        $movie6->save();

        $movie7 = new Movie();
        $movie7->title = "The Addams Family"; 
        $movie7->synopsis = "When an evil doctor learns about an eccentric family's missing relative, she hires an imposter to masquerade as him so that she can loot the family.";
        $movie7->year = "1991"; 
        $movie7->cover = "G"; 
        $movie7->save();

        $movie8 = new Movie();
        $movie8->title = "Rocky"; 
        $movie8->synopsis = "Rocky Balboa, a small-time boxer, gets a chance to fight heavyweight champion Apollo Creed. In a bid to earn respect and glory, Rocky jumps into the ring, unaware of the tough task ahead of him.";
        $movie8->year = "1977"; 
        $movie8->cover = "H"; 
        $movie8->save();

        $movie9 = new Movie();
        $movie9->title = "Rush Hour"; 
        $movie9->synopsis = "When a Chinese consul's young daughter is kidnapped, Hong Kong Detective Lee must team up with Carter, a loud-mouthed LA detective. Distinctive work styles and cultural differences pose hiccups";
        $movie9->year = "1998"; 
        $movie9->cover = "I"; 
        $movie9->save();

        $movie10 = new Movie();
        $movie10->title = "The Expendables"; 
        $movie10->synopsis = "The Expendables is an American ensemble action thriller franchise spanning a film series, written by Sylvester Stallone and based on characters created by David Callaham, and additional media. The films star an ensemble cast, most notably Stallone, Arnold Schwarzenegger and Jason Statham.";
        $movie10->year = "2010"; 
        $movie10->cover = "J"; 
        $movie10->save();      
    }
}

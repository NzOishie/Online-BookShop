<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        $books = App\Book::all();
        $faker=Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('Reviews')->insert([
                'book_id' => $books->random()->id,
                'user_id' => $users->random()->id,
                'rating' => rand(1,5),
                'details' => $faker->text,


            ]);
        }
    }
}

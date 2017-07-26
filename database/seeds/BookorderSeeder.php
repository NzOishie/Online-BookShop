<?php

use Illuminate\Database\Seeder;

class BookorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = App\Order::all();
        $books = App\Book::all();
        for($i=0;$i<10;$i++){
            DB::table('bookorders')->insert([
                'book_id' => $books->random()->id,
                'order_id' => $orders->random()->id,
                'amount' => rand(100,2000),


            ]);
        }

    }
}

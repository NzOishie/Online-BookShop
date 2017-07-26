<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(BookorderSeeder::class);
        $this->call(ReviewSeeder::class);

    }
}

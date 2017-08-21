<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [

        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'country' =>$faker->country,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    static $password;

    return [

        'firstname' => $faker->firstname,
        'lastname' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Review::class, function (Faker\Generator $faker) {
    $users = App\User::all();
    $books = App\Book::all();
    return [
        'book_id' => $books->random()->id,
        'user_id' => $users->random()->id,
        'rating' => rand(1,5),
        'details' => $faker->text,
    ];
});
$factory->define(App\BookOrders::class, function (Faker\Generator $faker) {
    $orders = App\Orders::all();
    $books = App\Book::all();
    return [
        'book_id' => $books->random()->id,
        'order_id' => $orders->random()->id,
        'amount' => rand(100,2000),

    ];
});
$factory->define(App\Catagory::class, function (Faker\Generator $faker) {
        $books = App\Book::all();
    return [
        'book_id' => $books->random()->id,
        'catagory' => $faker->word,
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    $authors = App\Author::all();
    $publishers = App\Publisher::all();
    return [
        'author_id' => $authors->random()->id,
        'publisher_id' => $publishers->random()->id,
        'name' => $faker->sentence,
        'catagory' => $faker->word,
        'price' => rand(100,2000),
        'details' => $faker->paragraph,
        'image' => $faker->imageUrl,
    ];
});


$factory->define(App\Publisher::class, function (Faker\Generator $faker) {


    return [
        'firstname' => $faker->word,
        'lastname' => $faker->word,
        'details' => $faker->paragraph,
        'image' => $faker->imageUrl,

    ];
});
$factory->define(App\Author::class, function (Faker\Generator $faker) {


    return [
        'firstname' => $faker->word,
        'lastname' => $faker->word,
        'birthdate' => $faker->date,
        'deathdate' => $faker->date,
        'details' => $faker->paragraph,
        'image' => $faker->imageUrl,

    ];
});
$factory->define(App\Order::class, function (Faker\Generator $faker) {
    $users = App\User::all();

    return [

        'user_id' => $users->random()->id,

    ];
});

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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//Categories

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
        'parent_id' => 0
        
    ];
});

//Product

$factory->define(App\Product::class, function (Faker\Generator $faker) {
	$categories = App\Category::pluck('id')->toArray();
	$users = App\User::pluck('id')->toArray();

    return [
        'name' => $faker->word(),
        'description'=>$faker->text,
        'price'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max=NULL),
        'expiry_date'=> $faker->date(),
        'category_id'=> $faker->randomElement($categories),
        'user_id' => $faker->randomElement($users)
        
    ];
});

//Productimage

$factory->define(App\Productimage::class, function (Faker\Generator $faker) {
	$products = App\Product::pluck('id')->toArray();
	

    return [
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'product_id' => $faker->randomElement($products)
        
    ];
});
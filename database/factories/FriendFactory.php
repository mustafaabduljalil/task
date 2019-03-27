<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Friend;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Friend::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'friend_id' => $faker->randomDigit,
    ];
});

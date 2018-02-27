<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        'user_id' => function() { return factory(App\User::class)->create()->id; },
        'episode' => 'Episode' . $faker->randomDigit(),
        'description' => $faker->sentence(),
        'file_name' => str_random(10),
    ];
});

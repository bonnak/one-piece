<?php

use Faker\Generator as Faker;

$factory->define(App\Monga::class, function (Faker $faker) {
    return [
        'user_id' => function() { return factory(App\User::class)->create()->id; },
        'chapter' => $faker->numberBetween(1,100),
        'chapter_name' => $faker->text(30),
    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\MongaPage::class, function (Faker $faker) {
    return [
        'monga_id' => function() { return factory(App\Monga::class)->create()->id; },
        'page' => $faker->numberBetween(1,100),
        'file_name' => $faker->word,
    ];
});

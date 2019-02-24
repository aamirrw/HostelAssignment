<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'capacity' => $faker->randomDigit,
        'status' => $faker->randomElement($array = array ('Furnished','Non Furnished')),
        'has_ac' => $faker->randomElement($array = array ('Yes','No')),
        'has_multimedia' => $faker->randomElement($array = array ('Yes','No')),

    ];
});

<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cnic' => $faker->ssn,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'room_id' => function () {
            return factory(App\Room::class)->create()->id;
        }
    ];
});

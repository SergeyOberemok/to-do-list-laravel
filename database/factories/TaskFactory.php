<?php

use Faker\Generator as Faker;

$factory->define(\App\Task::class, function (Faker $faker) {
    return [
        'todo' => $faker->sentence,
        'deadline' => $faker->date(),
        'priority' => $faker->numberBetween(0, 3),
        'done' => $faker->boolean,
    ];
});

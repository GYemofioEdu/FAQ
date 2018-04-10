<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factory - For Profile Model
|--------------------------------------------------------------------------
*/
$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});

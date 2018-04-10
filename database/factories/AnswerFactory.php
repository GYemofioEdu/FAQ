<?php

use Faker\Generator as Faker;

    /*
    |--------------------------------------------------------------------------
    | Model Factory - For Answer Model
    |--------------------------------------------------------------------------
    */
    $factory->define(App\Answer::class, function (Faker $faker) {
        return [
            //generate an answer body
            'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
});

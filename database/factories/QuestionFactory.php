<?php

use Faker\Generator as Faker;

    /*
    |--------------------------------------------------------------------------
    | Model Factory - For Profile Model
    |--------------------------------------------------------------------------
    */
    $factory->define(App\Question::class, function (Faker $faker) {
        return [
            //generate a question body
            'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        ];
});

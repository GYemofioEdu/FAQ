<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();
        $users->each(function ($user) {
            $numQuestionsToCreate = 5;
            $this->getAndSaveQuestions($user, $numQuestionsToCreate);
        });
    }

    private function getAndSaveQuestions(App\User $user, $numQuestions)
    {
        for ( $i = 1; $i <= $numQuestions; $i++ ){
            $question = factory(\App\Question::class)->make();
            $question->user()->associate($user);
            $question->save();
        }

    }
}

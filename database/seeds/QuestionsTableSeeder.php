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
            $this->getAndSaveQuestion($user);
            $this->getAndSaveQuestion($user);
        });
    }

    private function getAndSaveQuestion(App\User $user)
    {
        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->save();
    }
}

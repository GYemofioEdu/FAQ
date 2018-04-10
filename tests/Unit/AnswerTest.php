<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSaveAnswer()
    {
        $user = factory(\App\User::class)->make();
        $user->save();

        $profile = factory(\App\Profile::class)->make();
        $profile->user()->associate($user);
        $profile->save();

        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->save();

        $answer = factory(\App\Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);

        $this->assertTrue($answer->save());
    }
}

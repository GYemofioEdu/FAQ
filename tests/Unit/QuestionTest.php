<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
{
    /**
     * Test that a user question can indeed be saved.
     *
     * @return boolean
     */
    public function testSaveQuestion()
    {
        $user = factory(\App\User::class)->make();
        $user->save();

        $profile = factory(\App\Profile::class)->make();
        $profile->user()->associate($user);
        $profile->save();

        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);

        $this->assertTrue($question->save());
    }
}

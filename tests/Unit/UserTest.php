<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSaveUser()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue($user->save());
    }

    public function testUserGetQuestion()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->questions()->get()));
    }

    public function testUserGetProfile()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->profile()->get()));
    }

    public function testUserGetAnswers()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue(is_object($user->answers()->get()));
    }
}

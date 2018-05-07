<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NumVotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanIncrement()
    {
        $tgtAnswer = DB::table('answers')->orderBy('id')->first();
        $countB4 = $tgtAnswer->num_votes;
        $expCountAfter = $countB4 + 1;
        DB::table('answers')->where('id',$tgtAnswer->id)->update(['num_votes'=>$expCountAfter]);

        $this->assertDatabaseHas('answers',['id'=>$tgtAnswer->id, 'num_votes'=>$expCountAfter]);

    }
}

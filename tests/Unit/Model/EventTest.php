<?php

namespace Tests\Unit\Model;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{

    use RefreshDatabase;

    public function testEventNameCapitalizationIsCorrect()
    {

        $event = factory(\App\Event::class)->states('incorrect_capitalization')->make();

        $this->assertEquals($event->name, "Have Fun with the Raspberry Pi");

    }
}

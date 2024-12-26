<?php

namespace Developer\EmptyProject\Tests\String;

use Developer\EmptyProject\String\HW1;
use Developer\EmptyProject\Tests\TestCase;

class HW1Test extends TestCase
{
    private HW1 $hw1;

    public function setUp(): void
    {
        parent::setUp();

        $this->hw1 = app(HW1::class);
    }

    /**
     * @test
     */
    public function it_successfully_reversed_string()
    {
        /* SETUP */
        $inputString = 'Hello, World!';
        $expectedOutputString = '!dlroW ,olleH';

        /* EXECUTE */
        $reverseString = $this->hw1->reverseString($inputString);

        /* ASSERT */
        $this->assertEquals($expectedOutputString, $reverseString);
    }
}

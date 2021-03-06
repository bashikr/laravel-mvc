<?php

namespace Tests\Dice;

use PHPUnit\Framework\TestCase;
use App\Models\Dice\Dice;

class DiceTest extends TestCase
{
    /**
     * Construct object and verify that the object has the expected
     * properties. Use only first argument.
     */
    public function testInitDiceClass()
    {
        $dice = new Dice(6);
        $this->assertInstanceOf("App\Models\Dice\Dice", $dice);
    }

    public function testLastRollMethodZero()
    {
        $dice = new Dice(1);

        $lastRoll = $dice->lastRoll();
        $expected = 0;

        $this->assertEquals($lastRoll, $expected);
    }

    public function testLastRollMethod()
    {
        $dice = new Dice(1);

        $dice->roll();

        $lastRoll = $dice->lastRoll();
        $expected = 1;

        $this->assertEquals($lastRoll, $expected);
    }
}

<?php

namespace Tests\Dice;

use App\Models\Dice\Game;
use PhpParser\Node\Arg;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public int $playersNumber = 2;
    public int $dicesNumber = 2;
    protected $game;

    /**
     * Construct object and verify that the object has the expected
     * properties. Use only first argument.
     */
    protected function setUp(): void
    {
        $this->game = new Game($this->playersNumber, $this->dicesNumber);
    }

    protected function tearDown(): void
    {
        $this->game = null;
    }

    public function testGameClassInit()
    {
        $this->assertInstanceOf("App\Models\Dice\Game", $this->game);
    }

    public function testGetPlayersHandsReturnString()
    {
        $this->game->processPlayersArrays();
        $res = $this->game->getPlayersHands();

        $this->assertIsString($res);
    }

    public function testThrowAgain()
    {
        $this->game->processPlayersArrays();
        $res = $this->game->getPlayersHands();
        $this->game->throwAgain();
        $res1 = $this->game->getPlayersHands();

        $this->assertNotEquals($res, $res1);
    }

    public function testPlayersHandSum()
    {
        $this->game->processPlayersArrays();
        $res = $this->game->playersHandSum();

        $this->assertIsString($res);
    }

    public function testFirstPlayer()
    {
        $this->game->processPlayersArrays();
        $playersHandsSum = $this->game->playersHandSum();
        $firstPlayer = $this->game->firstPlayer();

        $res = explode(', ', $playersHandsSum);

        if ($res[0] > $res[1]) {
            $this->assertEquals(1, $firstPlayer);
        } else if ($res[1] > $res[0]) {
            $this->assertEquals(2, $firstPlayer);
        } else if ($res[0] === $res[1]) {
            $this->assertEquals('Roll again', $firstPlayer);
        }
    }

    public function testPlayButtonVisibilityIsVisible()
    {
        $this->game->processPlayersArrays();
        $this->game->playersHandSum();
        $this->game->playerRoundSum(1);
        $this->game->savePlayerResults(1);

        $res = $this->game->playButtonVisibility();
        $this->assertEquals('visible', $res);
    }

    public function testNoWinner()
    {
        $this->game->processPlayersArrays();
        $this->game->playersHandSum();
        $this->game->playerRoundSum(1);
        $this->game->savePlayerResults(1);

        $noWinner = $this->game->winner(1);

        $this->assertEquals('No winner yet!', $noWinner);
    }

    public function testMoveToNextPlayer()
    {
        $res = $this->game->moveToNextPlayer(2);

        $this->assertEquals(1, $res);

        $res = $this->game->moveToNextPlayer(1);

        $this->assertEquals(2, $res);

        $playerOutOfBoundary = 3;
        $res = $this->game->moveToNextPlayer($playerOutOfBoundary);

        $this->assertFalse($res);
    }

    public function testPlayerHand()
    {
        $process = $this->game->processPlayersArrays();
        $res = $this->game->playerHand(1);

        $this->assertIsString($res);

        $toString = implode(', ', $process[0]);

        $this->assertEquals($toString, $res);
    }

    public function testPlayerToStart()
    {
        $this->game->processPlayersArrays();
        $this->game->PlayersHandSum();
        $firstPlayer = $this->game->firstPlayer();
        $res = $this->game->returnPlayerToStart();

        if ($firstPlayer == 'Roll again') {
            $this->assertIsInt($res);
        }
        $this->assertGreaterThan(0, $res);
    }

    public function testOneWhenSaveButtonIsVisibleReturnNone()
    {
        $mock = $this->getMockBuilder(\App\Models\Dice\Game::class)
            ->setConstructorArgs([2, 2])
            ->onlyMethods(['processPlayersArrays', 'checkIfNumberOneIsInHand'])
            ->getMock();

        $mock->method('processPlayersArrays')->willReturn([[1, 2], [2, 3]]);
        $mock->method('checkIfNumberOneIsInHand')
            ->with(1)
            ->willReturn(true);

        $one = $mock->oneWhenSaveButtonIsVisible(1);

        $this->assertEquals($one, 'none');
    }

    public function testOneWhenSaveButtonIsVisibleReturnVisible()
    {
        $mock = $this->getMockBuilder(\App\Models\Dice\Game::class)
            ->setConstructorArgs([2, 2])
            ->onlyMethods(['processPlayersArrays', 'checkIfNumberOneIsInHand'])
            ->getMock();

        $mock->method('processPlayersArrays')->willReturn([[1, 2], [2, 3]]);
        $mock->method('checkIfNumberOneIsInHand')
            ->with(2)
            ->willReturn(false);

        $one = $mock->oneWhenSaveButtonIsVisible(2);

        $this->assertEquals($one, 'visible');
    }
}

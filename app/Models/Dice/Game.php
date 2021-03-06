<?php
namespace App\Models\Dice;

class Game
{
    /**
     * @var int $dice
     * @var int $playerToStart
     */
    private $playersArray = [];
    private $playersValuesArray = [];
    private $playersHandSum = [];
    private $playersRoundsSum = [];
    private $playersFinalSum = [];
    private $playerToStart = 0;
    private int $playersNumber;

    /**
     * Create DiceHand
     * @param int $playersNumber
     * @param int $dicesAmount
     */
    public function __construct(int $playersNumber, int $dicesAmount)
    {
        $this->playersNumber = $playersNumber;
        for ($i = 0; $i < $playersNumber; $i++) {
            $this->playersArray[] = new DiceHand($dicesAmount);
        }
    }

    /**
     * Loops through the playersArray, then set every
     * players dices values in player specific arrays
     * lastly these arrays are pushed into playersValuesArray
     * ex: game with 2 players and 2 dices
     * returns [[4,3], [1,2]]
     *
     * @return array with values of the last roll.
     */
    public function processPlayersArrays() : array
    {
        for ($i = 0; $i < $this->playersNumber; $i++) {

            $diceHand = $this->playersArray[$i];
            $diceHand->setValues();

            $dices = sizeof($diceHand->getValues());

            $playerArray = [];
            $playerArray[$i] = [];
            for ($j = 0; $j < $dices; $j++) {
                array_push($playerArray[$i], $diceHand->getValues()[$j]);
            }
            array_push($this->playersValuesArray, $playerArray[$i]);
        }
        return $this->playersValuesArray;
    }

    public function throwAgain()
    {
        $this->playersValuesArray = [];
        $this->playersHandSum = [];

        for ($i = 0; $i < $this->playersNumber; $i++) {
            $this->playersArray[$i]->changeValuesArray();
            $this->playersArray[$i]->rollHand();
            $this->playersArray[$i]->resetHandScore();

            $diceHand = $this->playersArray[$i];
            $diceHand->setValues();

            $dices = sizeof($diceHand->getValues());

            $playerArray = [];
            $playerArray[$i] = [];
            for ($j = 0; $j < $dices; $j++) {
                array_push($playerArray[$i], $diceHand->getValues()[$j]);
            }
            array_push($this->playersValuesArray, $playerArray[$i]);
        }
        return $this->playersValuesArray;
    }

    /**
     * Get the values of every dice on all players through
     * their dices to determine who has the highest dices score
     * to start the game.
     *  ex: game with 2 players and 2 dices
     * [[4,3], [1,2]]
     * returns 4, 3, 1, 2
     *
     * @return string with the values of all dices.
     */
    public function getPlayersHands()
    {
        $count = sizeof($this->playersValuesArray);
        $values1 = '';
        for ($i = 0; $i < $count; $i++) {
            $values1 .= "Player's " . ($i + 1) . ' hand dices: ' . implode(', ', $this->playersValuesArray[$i]) . '<br>';
        }
        return $values1;
    }

    /**
     * Sums every player's dices (hands)
     *  ex: game with 2 players and 2 dices
     * [[4,3], [1,2]]
     * returns 7, 3
     *
     * @return string with the sum of every player's dices.
     */
    public function playersHandSum()
    {
        $this->playersHandSum = [];
        for ($i = 0; $i < $this->playersNumber; $i++) {
            array_push($this->playersHandSum, $this->playersArray[$i]->sum());
        }
        $playersHandSum = implode(', ', $this->playersHandSum);
        return $playersHandSum;
    }

    /**
     * Searches for the highest sum in the playersHandSum
     * array.
     *  ex: game with 2 players and 2 dices
     * [[4,3], [1,2]]
     * sum 7, 3
     * return 1
     *
     * @return int | string
     */
    public function firstPlayer()
    {
        $max = max($this->playersHandSum);
        $itemsInPlayerSum = count($this->playersHandSum);

        $rep = 0;
        for ($i = 0; $i < $itemsInPlayerSum; $i++) {
            if ($max && $max == $this->playersHandSum[$i]) {
                $rep++;
            }
        }

        $playerToStart = array_search($max, $this->playersHandSum) + 1;
        if ($rep > 1) {
            return 'Roll again';
        }
        $this->playerToStart = $playerToStart;
        return $this->playerToStart;
    }

    /**
     *
     * @return boolean
     */
    public function checkIfNumberOneIsInHand(int $player): bool
    {
        if (in_array(1, $this->playersValuesArray[$player - 1])) {
            return true;
        };
        return false;
    }

    public function playerHand(int $player)
    {
        $playerHandValuesArr = $this->playersValuesArray[$player - 1];
        $playerHandValues = implode(', ', $playerHandValuesArr);
        return $playerHandValues;
    }

    public function moveToNextPlayer(int $player)
    {
        $playersAmount = count(/** @scrutinizer ignore-type */ $this->playersArray);

        if ($player === $playersAmount) {
            $this->playerToStart = 1;
            return $this->playerToStart;
        } elseif($player < $playersAmount && $player > 0) {
            $this->playerToStart = $player + 1;
            return $this->playerToStart;
        } else return false;
    }

    public function returnPlayerToStart()
    {
        return $this->playerToStart;
    }

    public function playerRoundSum(int $player)
    {
        $roundSum = 0;
        if (array_key_exists($player - 1, $this->playersRoundsSum)) {
            $roundSum = $this->playersRoundsSum[$player - 1];
        }

        if ($this->checkIfNumberOneIsInHand($player) === True) {
            $this->playersRoundsSum[$player - 1] = 0;
            $this->playersHandSum[$player - 1] = 0;
            $this->moveToNextPlayer($player);
            return $this->playersRoundsSum[$player - 1];
        } else if ($this->checkIfNumberOneIsInHand($player) === False) {
            $roundSum += $this->playersHandSum[$player - 1];
            $this->playersRoundsSum[$player - 1] = $roundSum;
            if (!empty($this->playersRoundsSum)) {
                if ($this->playersRoundsSum[$player - 1] < 100) {
                    return $this->playersRoundsSum[$player - 1];
                }
                return 'bigger than 100';
            }
        }
    }

    public function savePlayerResults(int $player)
    {
        if (array_key_exists($player - 1, $this->playersFinalSum)) {
            $this->playersFinalSum[$player - 1] += $this->playersRoundsSum[$player - 1];
        } else $this->playersFinalSum[$player - 1] = $this->playersRoundsSum[$player - 1];

        return $this->moveToNextPlayer($player);
    }

    public function playersFinalSum()
    {
        $keys = array_keys($this->playersFinalSum);
        $arrayLength = count($keys);

        $res = '';
        for ($i = 0; $i < $arrayLength; $i++) {
            $res .= 'Player ' .  ($keys[$i] + 1) . "'s score is: " . $this->playersFinalSum[$keys[$i]]
                . ' <br>';
        }
        return $res;
    }

    public function winner(int $player)
    {
        $playersFinalSumCount = count($this->playersFinalSum);
        $res = $this->playersFinalSum;

        if ($playersFinalSumCount > 0 && array_key_exists($player - 1, $res) && $res[$player - 1] > 100) {
            return 'Player ' . $player . ' wins! :)';
        }
        return 'No winner yet!';
    }

    public function saveButtonVisibility(string $case, int $player)
    {
        if ($case == 'save') {
            if (array_key_exists($player - 1, $this->playersRoundsSum)) {
                $this->playersRoundsSum[$player - 1] = 0;
            }

            return 'none';
        }

        return $this->oneWhenSaveButtonIsVisible($player);
    }

    public function oneWhenSaveButtonIsVisible(int $player): string
    {
        if ($this->checkIfNumberOneIsInHand($player) === true) {
            return 'none';
        }
        return 'visible';
    }


    public function playButtonVisibility() : string
    {
        if (max($this->playersFinalSum) >= 100) {
            return 'none';
        }
        return 'visible';
    }
}

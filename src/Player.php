<?php

namespace PokerPlayer;

/**
 * Class Player
 *
 * @property GameState gameState The current game state
 * @var string VERSION Version of the player
 */
class Player
{
    const VERSION = "Default PHP folding player";

    protected $gameState;

    public function __construct(GameState $gameState)
    {
        $this->gameState = $gameState;
        static::VERSION;
    }

    public function betRequest()
    {
        return 0;
    }

    public function showdown()
    {
    }
}

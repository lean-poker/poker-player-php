<?php

namespace PokerPlayer;

/**
 * Class GameState
 * @package PokerPlayer
 *
 * @property string tournamentId Id of the current tournament
 * @property string gameId Id of the current sit'n'go game. You can use this to link a sequence of game states together for logging purposes, or to make sure that the same strategy is played for an entire game
 * @property int round Index of the current round within a sit'n'go
 * @property int betIndex Index of the betting opportunity within a round
 * @property int small_blind The small blind in the current round. The big blind is twice the small blind
 * @property int currentBuyIn The amount of the largest current bet from any one player
 * @property int pot The size of the pot (sum of the player bets)
 * @property int minimumRaise Minimum raise amount. To raise you have to return at least: currentBuyIn - players[inAction][bet] + minimumRaise
 * @property int dealer The index of the player on the dealer button in this round. The first player is (dealer+1)%(players.length)
 * @property int orbits Number of orbits completed. (The number of times the dealer button returned to the same player.)
 * @property int inAction The index of your player, in the players array
 * @property array players An array of the players. The order stays the same during the entire tournament
 * @property array communityCards The array of community cards
 */
class GameState
{
    protected $tournamentId;
    protected $gameId;
    protected $round;
    protected $betIndex;
    protected $small_blind;
    protected $currentBuyIn;
    protected $pot;
    protected $minimumRaise;
    protected $dealer;
    protected $orbits;
    protected $inAction;
    protected $players;
    protected $communityCards;

    /**
     * GameState constructor.
     * @param array $gameState
     */
    public function __construct(array $gameState)
    {
        $this->tournamentId = $gameState['tournament_id'];
        $this->gameId = $gameState['game_id'];
        $this->round = $gameState['round'];
        $this->betIndex = $gameState['bet_index'];
        $this->small_blind = $gameState['small_blind'];
        $this->currentBuyIn = $gameState['current_buy_in'];
        $this->pot = $gameState['pot'];
        $this->minimumRaise = $gameState['minimum_raise'];
        $this->dealer = $gameState['dealer'];
        $this->orbits = $gameState['orbits'];
        $this->inAction = $gameState['in_action'];
        $this->players = $gameState['players'];
        $this->communityCards = $gameState['community_cards'];
    }

    /**
     * @return string
     */
    public function getTournamentId()
    {
        return $this->tournamentId;
    }

    /**
     * @return string
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @return int
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * @return int
     */
    public function getBetIndex()
    {
        return $this->betIndex;
    }

    /**
     * @return int
     */
    public function getSmallBlind()
    {
        return $this->small_blind;
    }

    /**
     * @return int
     */
    public function getCurrentBuyIn()
    {
        return $this->currentBuyIn;
    }

    /**
     * @return int
     */
    public function getPot()
    {
        return $this->pot;
    }

    /**
     * @return int
     */
    public function getMinimumRaise()
    {
        return $this->minimumRaise;
    }

    /**
     * @return int
     */
    public function getDealer()
    {
        return $this->dealer;
    }

    /**
     * @return int
     */
    public function getOrbits()
    {
        return $this->orbits;
    }

    /**
     * @return int
     */
    public function getInAction()
    {
        return $this->inAction;
    }

    /**
     * @return array
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @return array
     */
    public function getCommunityCards()
    {
        return $this->communityCards;
    }
}
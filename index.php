<?php

require_once('vendor/autoload.php');

use PokerPlayer\GameState;
use PokerPlayer\Player;

$gameState = new GameState(json_decode($_POST['game_state'], true));
$player = new Player($gameState);

switch($_POST['action'])
{
    case 'bet_request':
        echo $player->betRequest();
        break;
    case 'showdown':
        $player->showdown();
        break;
    case 'version':
        echo Player::VERSION;
}

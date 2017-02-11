<?php 

require_once 'RPSTournament.php';
require_once 'Player.php';
require_once 'CancelledTournamentException.php';
require_once 'InvalidTournamentException.php';

use SDM\RPS\CancelledTournamentException;
use SDM\RPS\InvalidTournamentException;
use SDM\RPS\Player;
use SDM\RPS\RPSTournament;

/*
 * Simulate the turnament
 */

$rps_tournament = new RPSTournament(
    array(
        new Player('Gordon', 's'),
        new Player('Isaac', 'p'),
        new Player('Alyx', 'r'),
        new Player('Adrian', 'r'),
        new Player('Cave', 'r'), 
        new Player('Eli', 's'), 
        new Player('Wallace', 's')  
    )
);

echo $rps_tournament->getWinner()->getName();
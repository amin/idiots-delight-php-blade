<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Game;
use Session\GameSession;
use eftec\bladeone\BladeOne;

const VIEWS_PATH = __DIR__ . '/../app/Views';
const CACHE_PATH = __DIR__ . '/../app/Views/Cache';
$blade = new BladeOne(VIEWS_PATH, CACHE_PATH, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

$game = new Game();
$gameArray = $game->dealRound();
// Blade test.
echo $blade->run("game", ["Hello" => "World"]);

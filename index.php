<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

const VIEWS_PATH = __DIR__ . '/Views';
const CACHE_PATH = __DIR__ . '/Views/Cache';

use Core\Game;
use Session\GameSession;

use eftec\bladeone\BladeOne;

$game = new Game();
$gameArray = $game->dealRound();

$blade = new BladeOne(VIEWS_PATH, CACHE_PATH, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

// Blade test.
echo $blade->run("game", ["Hello" => "World"]);

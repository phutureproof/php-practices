<?php

// start a timer
$st = microtime(1);

// composer autoloader
require_once("./vendor/autoload.php");

// imports
use PhutureProof\Database\Drivers\Sqlite as DB;

use PhutureProof\Display\Drivers\HTML as HTMLDisplay;
use PhutureProof\Display\Drivers\Terminal as TerminalDisplay;

// which implementation are we actually using?
if (isset($argv)) {
    // if $argv is populated we are coming via a cli session
    $display = new TerminalDisplay;
} else {
    // or else it isn't and we can assume for now it's a HTTP Client making a request
    $display = new HTMLDisplay;
}

// storage instance
$db = DB::getInstance();

// fetch todos as objects from sqlite storage
$todos = $db->runQuery("SELECT * FROM todos");

// output a list of html based articles
$display::RenderList($todos);
$display::RenderButton('OK');

// display the time
$display::Render("<p>". (round(microtime(1) - $st, 5, PHP_ROUND_HALF_UP)) . "</p>");

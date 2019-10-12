<?php

$st = microtime(1);
// composer autoloader
require_once("./vendor/autoload.php");

// imports
use PhutureProof\Database\Drivers\Sqlite as DB;

use PhutureProof\Display\Drivers\HTML as HTMLDisplay;
use PhutureProof\Display\Drivers\Terminal as TerminalDisplay;

if (isset($argv)) {
    $display = new TerminalDisplay;
} else {
    $display = new HTMLDisplay;
}

// storage
$db = DB::getInstance();
// fetch todos as objects from sqlite storage
$todos = $db->runQuery("SELECT * FROM todos");
// output a list of html based articles
$display::RenderList($todos);
$display::RenderButton('OK');
$display::RenderButton('OKdfgdfgdfg', [
    'success' => 'function() {
            return "TCHYeeyyea";
        }'
]);
$display::RenderButton('sdadasd');
$display::RenderButton('dfgdfgdfOK');
$display::RenderButton('OdsfsdfK');
$display::RenderButton('OK', [
    'success' => 'function() {
            return "OK!";
        }'
]);
$display::RenderButton('OfgdfgdfgK');
$display::RenderButton('fghfghfghOK');
echo microtime(1) - $st;

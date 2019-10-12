<?php

// composer autoloader
require_once("./vendor/autoload.php");

// imports
use PhutureProof\Database\Drivers\Sqlite as DB;
use PhutureProof\Display\Drivers\Terminal as Display;

// storage
$db = DB::getInstance();

// fetch todos as objects from sqlite storage
$todos = $db->runQuery("SELECT * FROM todos");

// output a list of html based articles
Display::Render("<p>Welcome!</p>");
Display::Render("<ul>");
foreach($todos as $todo) {
    Display::Render("\t<li>{$todo->name}</li>");
}
Display::Render("</ul>");


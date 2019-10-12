<?php



require_once("./vendor/autoload.php");

use PhutureProof\Database\Drivers\Sqlite as DB;
use PhutureProof\Display\Drivers\Terminal as Display;

$db = DB::getInstance();

$todos = $db->runQuery("SELECT * FROM todos");

Display::Render("<ul>");
foreach($todos as $todo) {
    Display::Render("\t<li>{$todo->name}</li>");
}
Display::Render("</ul>");


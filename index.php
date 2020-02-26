<?php
//  Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

@session_start();

include "core/app.php";

if (router()->getType() == "controller") {
    try {
        router()->callObject('eftec\exampleticket\controller\%sController', true);
    } catch (Exception $e) {
        echo $e->getMessage();
        echo $e->getTraceAsString();
        echo "<hr>";
        echo "try /Ticket/List to show the table<br>";
        echo "Or /Ticket/Index to insert a new ticket<br>";
    }
}
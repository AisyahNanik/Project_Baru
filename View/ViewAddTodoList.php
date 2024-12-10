<?php

require_once __DIR__ . "/../Model/todoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAN TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
?>
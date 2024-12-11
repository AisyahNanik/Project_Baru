<?php

/**
 * Menambah todo ke list
 */
function addTodoList(string $todo)
{
    //model
    global $todoList;

    $number = sizeof($todoList) + 1;
    
    $todoList[$number] = $todo;
}
?>
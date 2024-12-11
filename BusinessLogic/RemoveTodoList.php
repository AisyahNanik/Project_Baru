<?php

/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
{
    //model
    global $todoList;

    //controller
    if ($number > sizeof($todoList)){
        return false;
    }

    //model
    for ($i = $number; $i < sizeof($todoList); $i++){
        $todoList[$i] = $todoList[$i + 1];
    }

    //model
    unset($todoList[sizeof($todoList)]);

    return true;
}
?>
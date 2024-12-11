<?php

/**
 * Menampilkan todo di list
 */
function showTodoList()
{
    //model
    global $todoList;
    
    //view
    echo "TODOLIST" . PHP_EOL;

    //(controller)
    //model
    foreach ($todoList as $number => $value){
       //view
        echo"$number. $value" . PHP_EOL;
    }
}
?>
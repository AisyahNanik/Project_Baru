<?php

require_once "../View/viewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Belajar PHP");
addTodoList("Belajar MySql");
addTodoList("Belajar Laravel");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
?>
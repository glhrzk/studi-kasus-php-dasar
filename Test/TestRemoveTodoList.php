<?php

require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../Model/TodoList.php";

addTodoList("Galih");
addTodoList("Rizki");
addTodoList("Laely");

showTodoList();
removeTodoList(3);
showTodoList();


$test_Bool = removeTodoList(5);
var_dump($test_Bool);
showTodoList();

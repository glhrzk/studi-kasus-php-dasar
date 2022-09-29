<?php

/**
 * jadi bisnis logic bisa dikatakan adalah perintah, dan ini adalah perintah/fungsi untuk menambah
 */

function addTodoList(string $todo)
{
    global $todoList;
    $number = sizeof($todoList) + 1;
    $todoList[$number] = $todo;
}

<?php

/**
 * jadi bisnis logic bisa dikatakan adalah perintah, dan ini adalah perintah/fungsi untuk menampilkan
 * 
 */

function showTodoList()
{
    global $todoList;

    echo "TODOLIST" . PHP_EOL;
    foreach ($todoList as $number => $todo) {
        echo "$number. $todo" . PHP_EOL;
    }
};

<?php

/**
 * jadi bisnis logic bisa dikatakan adalah perintah, dan ini adalah perintah/fungsi untuk menghapus
 */

function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);
    return true;
};

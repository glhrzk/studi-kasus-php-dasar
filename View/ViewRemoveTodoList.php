<?php

require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";


function ViewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList((int)$pilihan);
        if ($success) {
            echo  "Sukses mengahapus todo" . PHP_EOL;
        } else {
            echo "gagal menghapus todo" . PHP_EOL;
        }
    }
}

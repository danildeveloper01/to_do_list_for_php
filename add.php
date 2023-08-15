<?php

$task = $_POST['task'];

if($task == ""){
    echo "Error! Write to assignment";
    exit();
}

require 'configDB.php';

$sql = "INSERT INTO tasks(task) VALUES (:task)";
$queri = $pdo->prepare($sql);
$queri -> execute(['task' => $task]);

header('Location: /');



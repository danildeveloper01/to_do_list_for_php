<?php

require 'configDB.php';

$id = $_GET['id'];

$sql = 'DELETE FROM `tasks` WHERE `id` = ?';
$queri = $pdo->prepare($sql);
$queri->execute([$id]);

header('Location: /');
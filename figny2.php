<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mysql = new mysqli('localhost', 'root', '', 'base');
$mysql->query("INSERT INTO `fak` (`name`, `email`, `text`) VALUES('$name', '$email', '$message')");

$mysql->close();

header('Location: /');
?> 
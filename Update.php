<?php
require_once ('config/connect.php');
$Название = $_POST['Название'];
$Адрес = $_POST['Адрес'];
$Телефон = $_POST['Телефон'];
$Владелец = $_POST['Владелец'];
$Рейтинг = $_POST['Рейтинг'];
$sql = "INSERT INTO `Заведение`(`Название`, `Адрес`, `Телефон`, `Владелец`, `Рейтинг`) 
VALUES ('$Название','$Адрес','$Телефон','$Владелец','$Рейтинг')";
$connect -> query ($sql);
header ('location: index1.php');
?>


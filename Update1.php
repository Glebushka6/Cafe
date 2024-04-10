<?php
require_once ('config/connect.php');
$IDЗаведение = $_POST['IDЗаведение'];
$Имя = $_POST['Имя'];
$Фамилия = $_POST['Фамилия'];
$Отчество = $_POST['Отчество'];
$Телефон = $_POST['Телефон'];
$sql = "INSERT INTO `Покупатель`(`IDЗаведение`, `Имя`, `Фамилия`, `Отчество`, `Телефон`) 
VALUES ('$IDЗаведение','$Имя','$Фамилия','$Отчество','$Телефон')";
$connect -> query ($sql);
header ('location: index2.php');
?>
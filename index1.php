<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Заведение`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Заведение</title>
</head>
<body>
<body background = "pic/2.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Название</th>
      <th>Адрес</th>
      <th>Телефон</th>
      <th>Владелец</th>
      <th>Рейтинг</th>
      </tr>
        <?php

            foreach($goods as $item)  {
                ?>
                <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                <td><?php echo $item[4] ?></td>
                <td><?php echo $item[5] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о заведении</h2>
        <form action = "Update.php" method="post">
            <p>Название</p>
            <input type = "text"  name = "Название">
            <p>Адрес</p>
            <input type = "text"  name = "Адрес">
            <p>Телефон</p>
            <input type = "text"  name = "Телефон">
            <p>Владелец</p>
            <input type = "text"  name = "Владелец">
            <p>Рейтинг</p>
            <input type = "text"  name = "Рейтинг">
            <button type = "submit">Добавить</button>
        </form>
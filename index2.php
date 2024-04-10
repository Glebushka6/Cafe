<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Покупатель`");
$goods = mysqli_fetch_all($goods);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Покупатель</title>
</head>
<body>
<body background = "pic/3.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>ID заведение</th>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Отчество</th>
      <th>Телефон</th>
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
        <h2>Добавить нового покупателя</h2>
        <form action = "Update1.php" method="post">
            <p>ID заведение</p>
            <input type = "text"  name = "IDЗаведение">
            <p>Имя</p>
            <input type = "text"  name = "Имя">
            <p>Фамилия</p>
            <input type = "text"  name = "Фамилия">
            <p>Отчество</p>
            <input type = "text"  name = "Отчество">
            <p>Телефон</p>
            <input type = "text"  name = "Телефон">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>
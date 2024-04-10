<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Напиток`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Напиток</title>
</head>
<body>
<body background = "pic/4.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Название</th>
      <th>Тип</th>
      <th>Срок хранения</th>
      <th>Страна производства</th>
      <th>Содержание алкоголя</th>
      <th>Цена</th>
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
                <td><?php echo $item[6] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить новый напиток</h2>
        <form action = "Update2.php" method="post">
            <p>Название</p>
            <input type = "text"  name = "Название">
            <p>Тип</p>
            <input type = "text"  name = "Тип">
            <p>Срок хранения</p>
            <input type = "text"  name = "СрокХранения">
            <p>Страна производства</p>
            <input type = "text"  name = "СтранаПроизводства">
            <p>Содержание алкоголя</p>
            <input type = "text"  name = "СодержаниеАлкоголя">
            <p>Цена</p>
            <input type = "text"  name = "Цена">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>
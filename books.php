<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='styles.css'>
    <title>Document</title>
</head>
<body>
<?php require 'menu.php' ?>
<div class="readers-content">
    <h1>Книги</h1>
    <a href="takenBooks.php" class="link-navigation">Книги, которых нет в наличии</a>
        <?php
        $mysqli = null;
        $booksQuery = "";
        include 'dbConnection.php';
        include 'queries.php';
        include 'getTable.php';
        getTableContent(["Номер", "Название", "Год публикации", "Состояние", "Дата взятия", "Фамилия текущего читателя"] ,$mysqli, $booksQuery); ?>
</div>
<?php require 'footer.php' ?>
</body>
</html>

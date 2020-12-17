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
<div class="navigation-menu">
    <div class="links-navigation">
        <a href="fullContent.php" class="link-navigation">Главная</a>
        <a href="readers.php" class="link-navigation">Читатели</a>
        <a href="books.php" class="link-navigation">Книги</a>
    </div>
    <div class="phoneNumber">
        <?php $number = "";
        include 'config.php';
        echo $number?>
    </div>
</div>

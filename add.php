<?php
    include 'database.inc.php';
    echo '<span>Todo added</span>';
    echo '<p>'.$_POST['title'].'</p>'; 
    echo '<a href="index.php">Click me to back</a>';
    $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
        or die('Не удалось соединиться: ' . pg_last_error());
    $query = "INSERT INTO todos (title, details, user_id) VALUES ('".$_POST['title']."', '".$_POST['details']."', ".$_SESSION['user'].");";
    $result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());
?>
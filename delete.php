<?php
    $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
    or die('Не удалось соединиться: ' . pg_last_error());
    $query = 'DELETE FROM todos WHERE id='.$_POST['item'].";";
    $result = pg_query($dbconn,$query);
    echo '<h2>Todo is deleted</h2>';
    echo '<a href="index.php">Return to back</a>';
?>
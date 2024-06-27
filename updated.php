<?php 
    echo "<h2>Todo updated</h2>";
    $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
    or die('Не удалось соединиться: ' . pg_last_error());
    $query = "UPDATE todos SET
    title = '".$_POST['title']."',
    details = '".$_POST['details']."' ".
    "WHERE id=".$_POST['id'].";";
    $result = pg_query($dbconn,$query);
    echo '<a href="index.php">Return to home</a>';
?>
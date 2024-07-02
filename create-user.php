<?php
    $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
    or die('Не удалось соединиться: ' . pg_last_error());
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "INSERT INTO users (username, password) VALUES ('".$username."', '".$password."');";
        $result = pg_query($dbconn,$query);
        echo <<< _EOT
            <h2>New user added<h2>
            <a href="index.php">Return back</a>
        _EOT;
    }
    
?>
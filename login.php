<?php 
    if (!session_id()) {
        session_start();
        session_regenerate_id();
    }
    $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
        or die('Не удалось соединиться: ' . pg_last_error());
    if (isset( $_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
        $result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());
        $row = pg_fetch_array($result);
        if ($row) {
            $_SESSION['user'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            echo '<p>Success</p>';
            echo '<a href="index.php">Back to home</a>';
        }
        else {
            echo '<p>Error</p>
                <a href="index.php">Back to home</a>';
        }
    }
?>
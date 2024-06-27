<?php
    $fake_db = [];
    //Models
    include 'models.inc.php';
    //Database
    // Соединение, выбор базы данных
    $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
        or die('Не удалось соединиться: ' . pg_last_error());
    $query = 'SELECT * FROM todos';
    $result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());
    while( $row = pg_fetch_assoc($result) ) {
        $fake_db[] = new TodoTask($row['id'], $row['title'], $row['details']);
    }
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Todo update</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
    <?php 
        include 'header.inc.php';
        include 'models.inc.php';
        $dbconn = pg_connect("host=localhost dbname=todo user=postgres password=")
        or die('Не удалось соединиться: ' . pg_last_error());
        $query = 'SELECT * FROM todos WHERE id='.$_POST['item'];
        $result = pg_query($dbconn,$query);
        $row = pg_fetch_array($result);
        $todo = new TodoTask($row['id'], $row['title'], $row['details']);
        echo '<div class="item">';
        echo '<h2>'.$todo->title.'</h2>';
        echo '<p>'.$todo->details.'</p>';
        echo '</div>';
        include 'footer.inc.php';
    ?>
    </body>
</html>
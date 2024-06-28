<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Todo list</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php 
            include 'header.inc.php';
        ?>
        <main>
            <?php
                if (!isset($_SERVER['PHP_AUTH_USER'])) {
                    header('WWW-Authenticate: Basic realm="My Realm"');
                    header('HTTP/1.0 401 Unauthorized');
                    echo 'Текст, отправляемый в том случае,
                    если пользователь нажал кнопку Cancel';
                    exit;
                } else {
                    echo '<form action="add.php" method="post" class="todo-action">
                        Title <input type="text" name="title">
                        Details <input id="details-input" type="text" name="details">
                        <input type="submit">
                        </form>';
                    echo '<div class=item>Hello '.$_SERVER['PHP_AUTH_USER'].' ';
                    echo '<a href="logout.php">Log out</a>';
                    echo  '</div>';
                    include 'todolist.inc.php';
                }
            ?>
        </main>
        <?php
            include 'footer.inc.php';
        ?>
    </body>
</html>
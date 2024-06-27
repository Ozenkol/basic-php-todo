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
            <form action="add.php" method="post" class="todo-action">
                Title <input type="text" name="title">
                Details <input id="details-input" type="text" name="details">
                <input type="submit">
            </form>
            <?php 
                include 'todolist.inc.php';
            ?>
        </main>
        <?php
            include 'footer.inc.php';
        ?>
    </body>
</html>
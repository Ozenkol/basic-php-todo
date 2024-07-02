<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Todo list</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php 
            if (!session_id()) {
                session_start();
                session_regenerate_id();
            }
            include 'header.inc.php';
        ?>
        <main>
            <?php if (!isset($_SESSION['user'])):?>
                <form action="login.php" method="post" class="todo-action">
                    Enter username: <input type="text" name="username">
                    Enter password: <input type="text" name="password">
                    <button type="submit" name="login">Login</button>
                    <p>Or</p>
                    <p><a href="setup.php">Create user</a></p>
                </form>
            <?php else:?>
                <form action="add.php" method="post" class="todo-action">
                    Title <input type="text" name="title">
                    Details <input id="details-input" type="text" name="details">
                    <input type="submit">
                </form>
                <form action="logout.php" method="POST" class="todo-action">
                    <button type="submit">Log out</button>
                </form>
                <?php 
                    include 'todolist.inc.php'
                ?>
            <?php endif;?>
        </main>
        <?php
            include 'footer.inc.php';
        ?>
    </body>
</html>
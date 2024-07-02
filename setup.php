<?php
    include 'header.inc.php';
    echo <<< _EOT
        <form action="create-user.php" method="post">
            Enter username: <input type="text" name="username">
            Enter password: <input type="text" name="password">
            <button type="submit">Add user</button>
        </form>
    _EOT;
    include 'footer.inc.php';
?>
<?php
    session_unset();
    session_destroy();
    setcookie(session_name(), '', 0);
    echo '<h2>You were been log out</h2>';
    echo '<a href="index.php">Back to home</a>';
?>
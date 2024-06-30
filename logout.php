<?php
    session_unset();
    session_destroy();
    setcookie(session_name(), '', 0);
    echo '<a href="index.php">Back to home</a>';
?>
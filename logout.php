<?php
    unset($_SERVER['PHP_AUTH_USER']);
    unset($_SERVER['PHP_AUTH_PW']);
    session_unset();
    echo '<p>'.$_SERVER['PHP_AUTH_USER'].'</p>';
    echo '<p>'. $_SERVER['PHP_AUTH_PW'] .'</p>';
    echo '<a href="index.php">Back to home</a>'
?>
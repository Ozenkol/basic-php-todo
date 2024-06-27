<?php 
    include 'item.php';
    include 'database.inc.php'
?>

<div class="list">
    <?php
        foreach($fake_db as $todo) {
            outputTodoItem($todo);
        }
    ?>
</div>
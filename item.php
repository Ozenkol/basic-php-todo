<?php
    function outputTodoItem($todo) {
        echo '<div class="item">';
        echo '<h2>'.$todo->title.'</h2>';
        echo '<p>'.$todo->details.'</p>';
        echo '<form action="delete.php" method="POST">';
        echo '<button type="submit" name="item" value="'.$todo->id.'">Delete</button>';
        echo '<button type="submit" name="item" value="'.
        $todo->id.'" formaction=update.php>Update</button>';
        echo '</form>';
        echo '</div>';
    }
?>
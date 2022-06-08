<?php 
    require_once('./classes/db.php');    
    $db = new DB();
    $result = $db->query("SELECT * FROM `todo` WHERE `user_id`=? ORDER BY `date`", "i", [$user['id']]);

    foreach($result as $row){
        echo '<tr>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td class="text-end"><a class="btn btn-primary mx-1" href="crud/delete-todo.php?id='.$row['id'].'">Complete</a>';
            echo '<a class="btn btn-secondary mx-1" href="edit.php?id='.$row['id'].'">Edit</a></td>';
        echo '</tr>';
    }

?>
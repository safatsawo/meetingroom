<?php
include "INCLUDES/db.php";
if (isset($_POST['id'])) {
    if ($_POST['type'] == 'approve') {
        $query = "UPDATE Request SET is_accepted = 1 WHERE id = {$_POST['id']}";
        $approve_query = mysqli_query($connection, $query);
    } else {
        $query = "UPDATE Request SET is_accepted = 0 WHERE id = {$_POST['id']}";
        $approve_query = mysqli_query($connection, $query);
    }

}

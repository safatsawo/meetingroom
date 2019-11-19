<?php ob_start();?>
<?php
include "db.php"
?>
<?php
include dirname(__DIR__) . "/pending-request.php";
?>
<?php if (isset($_POST['decline'])) {
    echo "$status";

    $query = "UPDATE Request SET $status = '{$status}' WHERE id = {$id}";
    $update_query = mysqli_query($connection, $query);
    header("Location: pending-request.php");
}
echo 
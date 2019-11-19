<?php
function Confirm($result)
{ // THIS IS A FUNCTION TO CHECK ERRORS AND IT IS CALLED IN THE CODE WHERE IT IS NEEDED
    global $connection;
    if (!$result) {
        die("QUERY FAILED " . mysqli_error($connection));
    } else {
        echo '<div class="alert alert-success alert-dismissable" id="flash-msg">
<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
<h4><i class="icon fa fa-check"></i>Successfully Requested!</h4>
</div>';
    }

}

function Test($resulti){
    global $connection;
    if(!$resulti){
        die("QUERY FAILED".mysqli_error($connection));
}




}
?>
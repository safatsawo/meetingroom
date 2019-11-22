
<div class="row">
    <!-- column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Latest Posts</h4>
            </div>
            <div class="comment-widgets scrollable">
                <!-- Comment Row -->



                    <!-- //fetching data from database -->
                    <?php
if (isset($_GET['id'])) { // this is the ecledit button that will be clicked
    $the_id = $_GET['id']; // the ID will be recieved here and transferred to variable
}

$query = "SELECT * FROM Request ";
$select_request_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_request_query)) {
    $id = $row['id'];
    $gender = $row['gender'];
    $NameOfDepartment = $row['NameOfDepartment'];
    $NameOfScheduler = $row['NameOfScheduler'];
    $PurposeOfMeeting = $row['PurposeOfMeeting'];
    $Status = $row['is_accepted'];
    $image = $row['image'];

    $updated_at = $row['updated_at']

    ?>
       <div class="d-flex flex-row comment-row ">
                    <div class="p-2"><img src="assets/images/users/<?php echo $image; ?>" alt="user" width="50"
                            class="rounded-circle">
                    </div>
                    <div class="comment-text w-100">
                        <h6 class="font-medium"><?php echo $NameOfScheduler ?></h6>
                        <span class="m-b-15 d-block"><?php echo $PurposeOfMeeting ?></span>
                        <div class="comment-footer">
                            <span class="text-muted float-right"><?php echo $updated_at ?></span>
                            <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                            <button type="button" class="btn btn-success btn-sm">Publish</button>
                            <button type="button" class="btn btn-danger btn-sm">Delete</button>
                        </div>
                    </div>
                </div>

                <?php
}?>





            </div>
        </div>

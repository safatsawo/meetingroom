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
if (isset($_GET['id'])) { // this transfers data from the database to the requested part or $the_id = $_GET['id']; // the ID will be recieved here and transferred to variable
}//so technically using the url to transfer data

$query = "SELECT * FROM Request ";
$select_request_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_request_query)) {
    $id = $row['id'];
    $NameOfDepartment = $row['NameOfDepartment'];
    $NameOfScheduler = $row['NameOfScheduler'];
    $PurposeOfMeeting = $row['PurposeOfMeeting'];
    $Status = $row['is_accepted'];
    // $image = $row['image'];
$duration = $row['duration'];
    $updated_at = $row['updated_at']

    ?>
                <div class="d-flex flex-row comment-row ">
                    <div class="comment-text w-100">
                        <h6 class="font-weight-bold"><?php echo $NameOfScheduler ?></h6>
                        <span class="m-b-15 d-block font-weight-normal"><?php echo $PurposeOfMeeting ?></span>
                        <div class="comment-footer">
                        <span class="text-muted float-right"><?php echo $updated_at ?></span>

                        <span class=" m-b-15 d-block font-weight-bolderfloat-left text-monospace">Meeting will last for <?php echo $duration ?>mins</span>


                        </div>

                    </div>

                </div>

                <?php
}?>



                <label for=""></label>

            </div>
        </div>
    </div>
</div>
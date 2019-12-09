<?php ob_start();?>


<?php
include "INCLUDES/db.php";

include "INCLUDES/header.php";

include_once "switch.php";
?>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <?php
include "INCLUDES/Navigation.php";
?>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <?php
include "INCLUDES/navigation.php"
?>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Tables</h4>
                    <div class="ml-auto text-right">
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav> -->
                    <!-- < type="button" id="submit" value="button"> -->
                    <!-- <button id="submit" class="btn btn-primary">but</button> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title m-b-0">Requests</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-uppercase font-weight-bold">#</th>
                                    <th scope="col" class="text-uppercase font-weight-bold">Requester</th>
                                    <th scope="col" class="text-uppercase font-weight-bold">Departments</th>

                                    <th scope="col" class="text-uppercase font-weight-bold">Purpose</th>
                                    <th scope="col" class="text-uppercase font-weight-bold">Duration</th>

                                    <th scope="col" class="text-uppercase font-weight-bold">Date</th>

                                    <th scope="col" class="text-uppercase font-weight-bold">Status</th>

                                    <th scope="col" class="text-uppercase font-weight-bold">Action</th>

                                </tr>
                            </thead>
                             <tbody>




                             <!-- //fetching data from database -->
                                <?php
$query = "SELECT * FROM Request";
$select_meeting_query = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_meeting_query)) {
    $id = $row['id'];
    $NameOfDepartment = $row['NameOfDepartment'];
    $NameOfScheduler = $row['NameOfScheduler'];
    $PurposeOfMeeting = $row['PurposeOfMeeting'];
    $duration = $row['duration'];
    $date = $row['tdate'];
    // $time = $row['time'];

    $Status = $row['is_accepted'];

    ?>

                                <tr>
                                    <th scope="row"><?php echo $id ?></th>
                                    <td><?php echo $NameOfScheduler ?></td>
                                    <td><?php echo $NameOfDepartment ?></td>

                                    <td><?php echo $PurposeOfMeeting ?></td>
                                    <td><?php echo $duration ?> mins</td>
                                    <td><?php echo $date ?></td>


                                    <td><?php echo $Status == 1 ? "Approved" : "Not Approved" ?></td>


                                    <form action='pending-request.php' method='post'>
                                        <input type="hidden" name="is_accepted" value=<?php echo "$Status"; ?> />
                                        <input type="hidde n" name="id" value=<?=$id;?> />

                                        <?php
switch ($Status) {

        case '0':
            echo "<td><button id='submit' type='button' class='btn btn-success action' data-type='approve' data-id='$id'>APPROVE</button></td>";
            break;
        default:
            echo "<td><button id='submit' type='button' class='btn btn-danger action' data-type='unapprove' data-id='$id'>UNAPPROVE</button></td>";

    }
    ?>


                                    </form>
                                </tr>

                                <?php
}?>

                            </tbody>
                        </table>
                        <?php

?>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PStart Date Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a
                href="https://wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->\
<!--  -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/jquery/dist/submit.js"></script>


<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/

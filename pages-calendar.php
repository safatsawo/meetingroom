<?php 
include "INCLUDES/pagesheader.php"
?>
<?php 
include "INCLUDES/db.php"
?>
<?php 
ob_start(); 
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
                        <h4 class="page-title">Calendar</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-3 border-right p-r-0">
                                        <div class="card-body border-bottom">
                                            <h4 class="card-title m-t-10">Drag & Drop Event</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="calendar-events" class="">
                                                        <!-- <div class="calendar-events m-b-20" data-class="bg-info"><i
                                                                class="fa fa-circle text-info m-r-10"></i>Event One
                                                        </div> -->
                                                        <div class="calendar-events m-b-20" data-class="bg-success"><i
                                                                class="fa fa-circle text-success m-r-10"></i> Accepted Request
                                                        </div>
                                                        <div class="calendar-events m-b-20" data-class="bg-danger"><i
                                                                class="fa fa-circle text-danger m-r-10"></i>Declined Request
                                                        </div><span>50</span>
                                                        <!-- <div class="calendar-events m-b-20" data-class="bg-warning"><i
                                                                class="fa fa-circle text-warning m-r-10"></i>Event Four
                                                        </div> -->
                                                    </div>
                                                    <!-- checkbox -->
                                                    <!-- <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="drop-remove">
                                                        <label class="custom-control-label" for="drop-remove">Remove
                                                            after drop</label>
                                                    </div> -->
                                                    <a href="javascript:void(0)" data-toggle="modal"
                                                        data-target="#add-new-event"
                                                        class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                        <i class="ti-plus"></i> Add New Event
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                    event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            </div>
                            <div class="container-fluid">
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->

                                <?php

if (isset($_POST['submit'])) {

    if ($_POST['NameOfDepartment'] == "" || $_POST['NameOfScheduler'] == "" || $_POST['PurposeOfMeeting'] == "" || $_POST['duration'] == "" || $_POST['tdate'] == "") {
        echo '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   <h4><i class="icon fa fa-check"></i>ALL FIELDS ARE NEEDED!</h4>
    </div>';    
    } else {
        header("Location: pages-calendar.php");
        $NameOfDepartment = $_POST['NameOfDepartment'];
        $NameOfScheduler = $_POST['NameOfScheduler'];
        $PurposeOfMeeting = $_POST['PurposeOfMeeting'];
        $duration = $_POST['duration'];
        // echo date('F d, Y h:mA', strtotime('2009-10-14 19:00:00'));
        $date = $_POST['tdate'];
        $date = date("Y-m-d", strtotime($date));
        // $time = $_POST['time'];
        //         $time = time("h:m:s", strtotime($time));
        // $date = $date.$time;

        $query = "INSERT INTO Request(NameOfDepartment, NameOfScheduler, PurposeOfMeeting,duration,tdate) VALUES ('{$NameOfDepartment}', '{$NameOfScheduler}', '{$PurposeOfMeeting}','{$duration}','{$date}')";
        mysqli_query($connection, $query);
        Test($query);
    }
}
?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <form class="form-horizontal" action="pages-calendar.php" name="submit"
                                                method="POST" enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <h4 class="card-title">Meeting Info</h4>
                                                    <div class="form-group row">
                                                        <label for="fname"
                                                            class="col-sm-3 text-right control-label col-form-label">Name
                                                            Of
                                                            Departments</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="NameOfDepartment"
                                                                class="form-control" id="fname"
                                                                placeholder="Name of Department Here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="lname"
                                                            class="col-sm-3 text-right control-label col-form-label">Name
                                                            Of
                                                            Scheduler</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="lname"
                                                                placeholder="Name Of Scheduler" name="NameOfScheduler">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cono1"
                                                            class="col-sm-3 text-right control-label col-form-label">Purpose
                                                            of Meeting</label>
                                                        <div class="col-sm-9">
                                                            <textarea type="text" name="PurposeOfMeeting"
                                                                class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="date"
                                                            class="col-sm-3 text-right control-label col-form-label">Date</label>
                                                        <input type="date" class="form-control col-3" name="tdate"
                                                            id="date">

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="time"
                                                            class="col-sm-3 text-right control-label col-form-label">Time</label>
                                                        <input type="time" class="form-control col-3" name="time"
                                                            id="time">

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="duration"
                                                            class="col-sm-3 text-right control-label">Duration</label>
                                                        <input type="number" class="form-control col-3" name="duration"
                                                            id="duration">

                                                    </div>

                                                </div>
                                                <div class="border-top">
                                                    <div class="card-body">
                                                        <button type="submit" class="btn btn-primary align-center"
                                                            name="submit">SUBMIT</button>
                                                        <button type="button" class="btn btn-secondary waves-effect"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
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
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script>
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
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="dist/js/pages/calendar/cal-init.js"></script>
</body>

</html>
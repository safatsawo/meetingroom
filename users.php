
<?php
include "INCLUDES/db.php"
?>
<?php
include "INCLUDES/header.php"
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
include "INCLUDES/Navigation.php"
?>

    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll -->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation -->
            <?php
include "INCLUDES/navigation.php"
?>
        </div>
        <!-- End Sidebar scroll -->
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
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                        <a href="/INCLUDES/logout.php" class="btn btn-dark">Log Out</a>
                        <a href="NewUser.php" class="btn btn-dark text-white">Create New User</a>
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
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <!-- Column -->
                  <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./index.php">
                        <div class="card card-hover shadow">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </a>
                </div>
                  <!-- Column -->

                  <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./form-basic.php">
                        <div class="card card-hover shadow">
                            <div class="box bg-primary text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                <h6 class="text-white">Forms</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="/pending-request.php">
                        <div class="card card-hover shadow">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <?php
// include "INCLUDES/sales.php"
?>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
            <?php
include "INCLUDES/latestposts.php"
?>
            <!-- Card -->
            <?php
include "INCLUDES/todolist.php"
?>
            <!-- card -->
            <?php
include "INCLUDES/progressbox.php"
?>
            <!-- card new -->
            <?php
include "INCLUDES/newupdates.php"
?>
            <!-- column -->

            <!-- <div class="col-lg-6"> -->
                <!-- Card -->
                <?php
// include "INCLUDES/chatsoption.php"
?>
                <!-- card -->
                <?php
// include "INCLUDES/ourpartners.php"
?>
                <!-- accoridan part -->
                <?php
// include "INCLUDES/accordion.php"
?>
                <!-- toggle part -->
                <?php
// include "INCLUDES/toggle.php"
?>
                <!-- Tabs -->
                <?php
// include "INCLUDES/tabs.php"
?>

            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php
include "INCLUDES/footer.php"
?>
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
<!-- Bootstrap tether Core JavaScript -->
<script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<!-- Wave Effects -->
<script src="dist/js/waves.js"></script>
<!-- Menu sidebar -->
<script src="dist/js/sidebarmenu.js"></script>
<!-- Custom JavaScript -->
<script src="dist/js/custom.min.js"></script>
<!-- This page JavaScript -->
<!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="assets/libs/flot/excanvas.js"></script>
<script src="assets/libs/flot/jquery.flot.js"></script>
<script src="assets/libs/flot/jquery.flot.pie.js"></script>
<script src="assets/libs/flot/jquery.flot.time.js"></script>
<script src="assets/libs/flot/jquery.flot.stack.js"></script>
<script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>
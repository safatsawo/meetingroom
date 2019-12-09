<?php ob_start();?>

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
                            <ol class="breadcrumb">
                                <!-- <li class="breadcrumb-item"><a href="/login2.php">login</a></li> -->
                                <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                    ADMIN LOGIN </button>
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
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./index.php">
                        <div class="card card-hover">
                            <div class="box bg-secondary text-left d-flex justify-content-around">
                                <div class="dash d-flex flex-column">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Dashboard</h6>
                                </div>
                                <div class="huge text-right text-white">

                                    <?php

$query = "SELECT * FROM Request";
$select_all_post = mysqli_query($connection, $query);
$post_counts = mysqli_num_rows($select_all_post);

echo "<h5> <div class='col-xs-9 text-right'>{$post_counts}</div>Posts</h5>";
?>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <!-- Column -->

                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="./form-basic.php">
                        <div class="card card-hover">
                            <div class="box bg-primary text-left d-flex justify-content-around">
                                <div class="dash d-flex flex-column">
                                    <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                                    <h6 class="text-white">Forms</h6>
                                </div>
                                <div class="huge text-right text-white">
                                    <?php

$query ="SELECT * FROM Request";
$select_all_post = mysqli_query($connection,$query);
$post_counts = mysqli_num_rows($select_all_post);

echo "<h5><div class='col-xs-9 text-right'>{$post_counts}</div>Posts</h5>";
?>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <a href="/pending-request2.php">
                        <div class="card card-hover">
                            <div class="box bg-danger text-left d-flex justify-content-around">
                                <div class="dash d-flex flex-column">
                                    <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                    <h6 class="text-white">Tables</h6>
                                </div>
                                <div class="huge  text-white">
                                <?php

$query ="SELECT * FROM Request WHERE is_accepted = '1'";
$select_all_accepted= mysqli_query($connection,$query);
$post_count_accepted = mysqli_num_rows($select_all_accepted);

echo " <h5><div class='col-xs-9'>{$post_count_accepted}</div>Posts Accepted</h5>";
?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <!-- <div class="error bg-danger text-center text-white"> -->
                        <?php

if (isset($_POST["submit"]) && ($_POST['email'] == "" || $_POST['password'] == "")) {

    echo '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                     <h4><i class="icon fa fa-check"></i>FIELDS ARE EMPTY!</h4>
                      </div>';

} elseif (isset($_POST["submit"]) && ($_POST['email'] != "Safatsawo@gmail.com" || $_POST['password'] != "Appleboss1")) {
    echo $failed = '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                             <h4><i class="icon fa fa-check"></i>wrong details!</h4>
                              </div>';
} elseif (isset($_POST["submit"]) && ($_POST['email'] == "Safatsawo@gmail.com" && $_POST['password'] == "Appleboss1")) {
    header("Location: users.php");

}
?>

                    </div>
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


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
// if(isset($_GET['id'])){
// $the_id = $_GET['id'];
// }
// $query = "SELECT * FROM admini ";
// $select_admin = mysqli_query($connection, $query);

// while($row=mysqli_fetch_assoc($select_admin)){
// $id = $row['id'];
// $first_name = $row['first_name'];
// $last_name = $row['last_name'];
// $email = $row['email'];
// $password = $row['password'];
// }

// if(isset($_POST['submit'])){
//     if($_POST['email']=="" || $_POST['password']==""){
//    echo  $another = '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
//         <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//      <h4><i class="icon fa fa-check"></i>FIELDS ARE EMPTY!</h4>
//       </div>';

// }elseif($_POST['email']!="Safatsawo@gmail.com" && $_POST['password']!="Appleboss1"){
//     echo $failed = '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
//     <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//  <h4><i class="icon fa fa-check"></i>wrong details!</h4>
//   </div>';

// }elseif($_POST['email']=="Safatsawo@gmail.com" && $_POST['password']=="Appleboss1"){
//  header("Location: users.php");

//     }

?>
                <form action="" method="POST" name="submit" class="form-inline">
                    <div class="form-group mb-2">
                        <label for="Email" class="sr-only">Email</label>
                        <input type="email" name="email" class="form-control" id="Email" placeholder="email">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword2"
                            placeholder="Password">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </div>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">
    function openModal() {
        $('#exampleModalCenter').modal({
            show: true
        });
    }
</script>
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
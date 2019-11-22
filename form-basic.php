<?php include "INCLUDES/db.php";
?>
<?php include "INCLUDES/function.php";?>
<?php
include "INCLUDES/header.php";
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
                    <h4 class="page-title">Request for meeting</h4>
                    <div class="ml-auto text-right">
                        <!-- <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav> -->
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

            <?php
// if (isset($_POST['submit'])) {
// echo "<h1>HELLO WORLD</h1>";

// if ($_POST['NameOfDepartment'] == "" || $_POST['NameOfScheduler'] == "" || $_POST['PurposeOfMeeting'] == "") {
//     echo '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
//       <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
//    <h4><i class="icon fa fa-check"></i>ALL FIELDS ARE NEEDED!</h4>
//     </div>';
// }
// else {
// $id = $_POST['id'];
// $NameOfDepartment = $_POST['NameOfDepartment'];
// $NameOfScheduler = $_POST['NameOfScheduler'];
// $PurposeOfMeeting = $_POST['PurposeOfMeeting'];
// $Gender = $_POST['Gender'];

// $query = "INSERT INTO Request(NameOfDepartment, NameOfScheduler, Gender)";
// $query .= "VALUES ('{$NameOfDepartment}' ,'{$NameOfScheduler}' ,'{$PurposeOfMeeting}', '{$Gender}')";

//         $create_post_query = mysqli_query($connection, $query);
//         if ($create_post_query) {
//             die("QUERY FAILED" . mysqli_error($connection));
//   }

// }

if (isset($_POST['submit'])) {

    if ($_POST['NameOfDepartment'] == "" || $_POST['NameOfScheduler'] == "" || $_POST['PurposeOfMeeting'] == ""|| $_FILES['image']['name']== null) {

        echo '<div class="alert alert-danger alert-dismissable fade show" id="flash-msg">
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
   <h4><i class="icon fa fa-check"></i>ALL FIELDS ARE NEEDED!</h4>
    </div>';
    } else {
        $NameOfDepartment = $_POST['NameOfDepartment'];
        $NameOfScheduler = $_POST['NameOfScheduler'];
        $PurposeOfMeeting = $_POST['PurposeOfMeeting'];
        $gender = $_POST['gender'];
        $image_temp = $_FILES['image']['tmp_name'];
        $image = $_FILES['image']['name'];

        move_uploaded_file($image_temp, "../meetingRoom/assets/images/users/$image"); //The move_uploaded_file() function moves an uploaded file to a new destination(WHICH IS uploadsin this case)
        if (move_uploaded_file($_FILES["image"]["tmp_name"], "../meetingRoom/assets/images/users/$image")) { // checks the condition of moving the picture
            $mysqli = connectDB();
            if (upload($id, $path, $mysqli)) {
                echo 'File uploaded';
            } else {
                echo 'Something went wrong uploading file' . mysqli_error($connection);
            }
        }
    

    $query = "INSERT INTO Request(NameOfDepartment, NameOfScheduler, PurposeOfMeeting, gender, image )VALUES ('{$NameOfDepartment}', '{$NameOfScheduler}', '{$PurposeOfMeeting}', '{$gender}', '{$image}') ";
    mysqli_query($connection, $query);
    Test($query);
    }
}
?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form class="form-horizontal" action="form-basic.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Meeting Info</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Name Of
                                        Departments</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="NameOfDepartment" class="form-control" id="fname"
                                            placeholder="Name of Department Here">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Name Of
                                        Scheduler</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname"
                                            placeholder="Name Of Scheduler" name="NameOfScheduler">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Purpose
                                        of Meeting</label>
                                    <div class="col-sm-9">
                                        <textarea type="text" name="PurposeOfMeeting" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label"
                                        for="post_image">Image</label>
                                    <input type="file" class="col-sm-9 form-control" name="image">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Gender
                                </label>

                                <div class="form-group row align-items-center">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                        <select name="gender" class="custom-select mr-sm-2">
                                            <!-- <option selected>Choose...</option> -->
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">SUBMIT</button>
                            <!-- <input type="submit" name="submit" value="submit"> -->
                        </div>
                    </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
    <!-- editor -->

    <!-- ============================================================== -->
    <!-- End PAge Content -->
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
    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
<!-- This Page JS -->
<script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="dist/js/pages/mask/mask.init.js"></script>
<script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="assets/libs/select2/dist/js/select2.min.js"></script>
<script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/quill/dist/quill.min.js"></script>
<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function (value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>
</body>

</html>
<?php

session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$accessmail = 'seun.bambo@cg-infotech.com';
if (empty($_SESSION)) {
    header("Location: signup.php");
    exit();
} else {
    include 'inc/header.php';
}
//include 'inc/header.php';
    //echo $_SESSION['email'];

?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">


    <div class="container-fluid mt-5 mb-5">

        <div class="card card-birth mx-auto list-group-item">

            <div class="col-lg-12 text-center mt-1 mb-4">
                <span id="font-user" class="fa fa-user-circle"></span>

            </div>
            <div class="mb-5">
                <h3 class="text-center">Marriage Certificate</h3>

                <p class="text-center"><small class="text-warning">Please enter your details below</small></p>
            </div>

            <?php
            include 'marriage-submit.php';
            // $sub = inc();
            //echo $_SESSION['email'];
            ?>
            <form class="form-birth" action="marriage-pay.php" method="post" enctype="multipart/form-data">

                <h3>Husband Details</h3>
                <div class='row'>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="pob"><b>Title</b><i class="fa text-warning">*</i></label> <select name="title" id="">
                                <option value="Mr">Mr</option>
                                <option value="Mr">Master</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Surname</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="hsurname" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>First Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="hfname" placeholder="First Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Middle Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="hmname" placeholder="Middle Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Religion</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="hreligion" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Marital Status Before Marriage</b><i class="fa text-warning">*</i></label>
                            <select name="marriagestatus" id="">
                                <option value="">Single</option>
                                <option value="">Married</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h5>Permanent Address</h5>
                <div class="row">
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Street</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="street" placeholder="Street" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>City</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="city" placeholder="City" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>State</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="state" placeholder="State" autocomplete="off" required />
                        </div>
                    </div>
                </div>
                <h3>Wife Details</h3>
                <div class="row">
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Surname</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="wsurname" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>First Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="wfname" placeholder="First Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Middle Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="wmname" placeholder="Middle Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Religion</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="wreligion" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Marital Status Before Marriage</b><i class="fa text-warning">*</i></label>
                            <select name="marriagestatus" id="">
                                <option value="">Single</option>
                                <option value="">Married</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h5>Wife Permanent Address</h5>
                <div class="row">
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Street</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="street" placeholder="Street" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>City</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="city" placeholder="City" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>State</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="state" placeholder="State" autocomplete="off" required />
                        </div>
                    </div>
                </div>


                <h3>Witness 1</h3>
                <div class="row">
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Surname</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="witnesssurname" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>First Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="witnessfname" placeholder="First Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Middle Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="witnessmname" placeholder="Middle Name" autocomplete="off" required />
                        </div>
                    </div>


                </div>

                <h3>Witness 2</h3>
                <div class="row">
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Surname</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="witness2surname" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>First Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="witness2fname" placeholder="First Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh"><b>Middle Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="witness2mname" placeholder="Middle Name" autocomplete="off" required />
                        </div>
                    </div>


                </div>


                <div class="row mt-3">
                    <div class="col-lg-4">
                        <button type="submit" name="submit" class="btn btn-info mx-auto text-bold">
                            Pay ($50.00) <span class="fa fa-money-check-alt"></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
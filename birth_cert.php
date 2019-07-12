<?php

session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$accessmail = 'seun.bambo@cg-infotech.com';
include 'lib/helper.php';
locked()
?>

<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

    <?php
    //echo $_SESSION['email'];

    ?>
    <div class="container-fluid mt-5 mb-5">

        <div class="card card-birth mx-auto list-group-item">

            <div class="col-lg-12 text-center mt-1 mb-4">
                <span id="font-user" class="fa fa-user-circle"></span>

            </div>
            <div class="mb-5">
                <h3 class="text-center" id="form-heading">Birth Certificate Registration</h3>

                <p class="text-center"><small class="text-warning" id="small">Please enter your details below</small></p>
            </div>

            <?php
            include 'submit.php';
            //echo $_SESSION['email'];
            // $sub = inc();
            ?>
            <form class="form-birth" action="payment.php" method="post" enctype="multipart/form-data">

                <div class='row'>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="pob">First Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="pob" name="firstname" placeholder="Enter First Name" autocomplete="off" required />
                        </div>
                    </div>



                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh">Middle Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="middlename" placeholder="Middle Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh">Surname<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="surname" placeholder="Surname" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="aoh">Weight<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="weight" placeholder="Weight" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="aoh">Height<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="height" placeholder="Height" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="pob">Place of Birth<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="pob" name="pob" placeholder="Enter Place of Birth" autocomplete="off" required />
                        </div>
                    </div>



                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh">Street<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="street" placeholder="Street" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="aoh">City<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="city" placeholder="City" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="aoh">State<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="state" placeholder="State" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="aoh">Zip Code<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="aoh" placeholder="Zipcode" autocomplete="off" required />
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="noh">Name of Hospital<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="noh" name="noh" placeholder="Enter Name of Hospital" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="aoh">Address of Hospital<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="aoh" placeholder="Enter Address of Hospital" autocomplete="off" required />
                        </div>
                    </div>


                </div>
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="fname">Father's Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="fname" name="fname" placeholder="Enter Father's Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="mname">Mother's Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="mname" name="mname" placeholder="Enter Mother's Name" autocomplete="off" required />
                        </div>
                    </div>

                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="supportdoc">Supporting Document<i class="fa text-warning">*</i></label> <input type="file" class="input form-control-file" id="supportdoc" name="supportdoc" placeholder="Enter Last Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="coloption">Collection Option<i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <p class="form-check-label" for="exampleRadios1">
                                    Pickup at Location
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <p class="form-check-label" for="exampleRadios2">
                                    Delivery
                                </p>
                            </div>
                        </div>
                    </div>


                    <?php
                    $_SESSION['fname'] = $_POST['fname'];
                    ?>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <button type="submit" name="submit" class="btn btn-info mx-auto text-bold">
                            Pay ($50.00)
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
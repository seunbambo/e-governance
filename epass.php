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


    <div class="container-fluid mt-5 mb-5">

        <div class="card card-birth mx-auto list-group-item">

            <div class="col-lg-12 text-center mt-4 mb-4">
                <span id="font-user" class="fa fa-address-book"></span>

            </div>
            <div class="mb-5">
                <h3 class="text-center" id="form-heading">E-Passport</h3>

                <p class="text-center"><small class="text-warning">Please enter your details below</small></p>
            </div>
            <form class="form-birth" action="" method="post" enctype="multipart/form-data">

                <h5 id="form-heading">Personal Details</h5>
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="apptype">Application Type<i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apptype" id="citizen" value="option1">
                                <p class="form-check-label" for="citizen">
                                    Citizen
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apptype" id="alien" value="option2">
                                <p class="form-check-label" for="alien">
                                    Alien
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class='row'>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email" class="text-bold">First Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="firstName" name="firstName" placeholder="Enter First Name" autocomplete="off" required />
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email">Last Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="lastName" name="lastName" placeholder="Enter Last Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email">Date of birth<i class="fa text-warning">*</i></label>
                            <div class='input-group date' id='dob'>
                                <button type="button" class="button-icon"><span class="fa fa-calendar icon"></span></button><input type='date' class="input form-control" placeholder="DD/MM/YYYY" name="dob" autocomplete="off" value="" required />
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email">Place of birth<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="lastName" name="lastName" placeholder="Enter Place of Birth" autocomplete="off" required />
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email">Preferred Date for Biometric Capture<i class="fa text-warning">*</i></label>
                            <div class='input-group date' id='dob'>
                                <button type="button" class="button-icon"><span class="fa fa-calendar icon"></span></button><input type='date' class="input form-control" placeholder="DD/MM/YYYY" name="dob" autocomplete="off" value="" required />
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="supportdoc">Passport Photograph<i class="fa text-warning">*</i></label> <input type="file" class="input form-control-file" id="supportdoc" name="supportdoc" placeholder="Enter Last Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>


                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="gender">Gender<i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="">
                                <p class="form-check-label" for="male">
                                    Male
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="">
                                <p class="form-check-label" for="female">
                                    Female
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />

                <h5 id="form-heading">Address Details</h5>
                <div class="row">

                </div>
                <div class='row'>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="mname">City<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="mname" name="mname" placeholder="Enter City Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="fname">State<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="fname" name="fname" placeholder="Enter State Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="fname">Zip Code<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="fname" name="fname" placeholder="Enter Zip Code" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-4'>
                        <div class="form-group">
                            <label for="supportdoc">Proof of Address (Utility bill)<i class="fa text-warning">*</i></label> <input type="file" class="input form-control-file" id="supportdoc" name="supportdoc" placeholder="Enter Last Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>




                <hr />
                <h5 id="form-heading">Family Details</h5>

                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="mname">Mother's Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="mname" name="mname" placeholder="Enter Mother's Name" autocomplete="off" required />
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="fname">Father's Name<i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="fname" name="fname" placeholder="Enter Father's Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>





                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="marital-status">Marital Status<i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="marital-status" id="single" value="">
                                <p class="form-check-label" for="single">
                                    Single
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="marital-status" id="married" value="">
                                <p class="form-check-label" for="married">
                                    Married
                                </p>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row mt-3">
                    <div class="col-lg-4">
                        <a href="payment.php"><button type="button" class="btn btn-info mx-auto text-bold" value="">
                                Pay ($50.00)
                            </button></a>
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
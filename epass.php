<?php include 'inc/header.php'; ?>

<?php include 'inc/side-bar.php'; ?>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">


    <div class="container-fluid mt-5 mb-5">

        <div class="card card-birth mx-auto list-group-item">

            <div class="col-lg-12 text-center mt-4 mb-4">
                <span id="font-user" class="fa fa-address-book"></span>

            </div>
            <div class="mb-5">
                <h3 class="text-center">E-Passport</h3>

                <p class="text-center"><small class="text-warning">Please enter your details below</small></p>
            </div>
            <form class="form-birth" action="" method="post" enctype="multipart/form-data">

                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="apptype"><b>Application Type</b><i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apptype" id="citizen" value="option1">
                                <label class="form-check-label" for="citizen">
                                    Citizen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="apptype" id="alien" value="option2">
                                <label class="form-check-label" for="alien">
                                    Alien
                                </label>
                            </div>
                        </div>
                    </div>


                </div>

                <div class='row'>
                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email" class="text-bold"><b>First Name</b></label> <input type="text" class="input form-control" id="firstName" name="firstName" placeholder="Enter First Name" autocomplete="off" required />
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email"><b>Last Name</b></label> <input type="text" class="input form-control" id="lastName" name="lastName" placeholder="Enter Last Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>




                <div class='row'>
                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email"><b>Date of birth</b></label>
                            <div class='input-group date' id='dob'>
                                <button class="button-icon"><span class="fa fa-calendar"></span></button><input type='date' class="input form-control" placeholder="DD/MM/YYYY" name="dob" autocomplete="off" value="" required />
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="email"><b>Last Name</b></label> <input type="text" class="input form-control" id="lastName" name="lastName" placeholder="Enter Last Name" autocomplete="off" required />
                        </div>
                    </div>
                </div>


                <div class='col-lg-6'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="gender"><b>Gender</b><i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class='row'>
                        <div class='col-lg-6'>
                            <div class="form-group">
                                <label for="marital-status"><b>Marital Status</b><i class="fa text-warning">*</i></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="marital-status" id="single" value="">
                                    <label class="form-check-label" for="single">
                                        Single
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="marital-status" id="married" value="">
                                    <label class="form-check-label" for="married">
                                        Married
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class='row'>
                            <div class='col-lg-6'>
                                <div class="form-group">
                                    <label for="aoh"><b>Address of Hospital</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="aoh" name="aoh" placeholder="Street, State, City, Zipcode" autocomplete="off" required />
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class="form-group">
                                    <label for="fname"><b>Father's Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="fname" name="fname" placeholder="Enter Father's Name" autocomplete="off" required />
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-lg-6'>
                                <div class="form-group">
                                    <label for="mname"><b>Mother's Name</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="mname" name="mname" placeholder="Enter Mother's Name" autocomplete="off" required />
                                </div>
                            </div>

                            <div class='col-lg-6'>
                                <div class="form-group">
                                    <label for="supportdoc"><b>Supporting Document</b><i class="fa text-warning">*</i></label> <input type="file" class="input form-control-file" id="supportdoc" name="supportdoc" placeholder="Enter Last Name" autocomplete="off" required />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <button type="button" class="btn btn-info mx-auto text-bold" value="" style="padding: 10px; border-radius: 0px;">
                                Pay ($50.00)
                            </button>
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
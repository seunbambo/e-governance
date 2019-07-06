<?php include 'inc/header.php'; ?>

<?php include 'inc/side-bar.php'; ?>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">


    <div class="container-fluid mt-5 mb-5">

        <div class="card card-birth mx-auto list-group-item">

            <div class="col-lg-12 text-center mt-4 mb-4">
                <span id="font-user" class="fa fa-user-circle"></span>

            </div>
            <div class="mb-5">
                <h3 class="text-center">Birth Certificate Registration</h3>

                <p class="text-center"><small class="text-warning">Please enter your details below</small></p>
            </div>
            <form class="form-birth" action="" method="post" enctype="multipart/form-data">

                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="pob"><b>Place of Birth</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="pob" name="pob" placeholder="Enter Place of Birth" autocomplete="off" required />
                        </div>
                    </div>

                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="noh"><b>Name of Hospital</b><i class="fa text-warning">*</i></label> <input type="text" class="input form-control" id="noh" name="noh" placeholder="Enter Name of Hospital" autocomplete="off" required />
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
                <div class='row'>
                    <div class='col-lg-6'>
                        <div class="form-group">
                            <label for="coloption"><b>Collection Option</b><i class="fa text-warning">*</i></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Pickup at Location
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Delivery
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row mt-3">
                    <button type="button" class="btn btn-info mx-auto text-bold" value="" style="padding: 10px 30px;; border-radius: 0px;">
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
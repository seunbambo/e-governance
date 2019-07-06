<?php include 'inc/header.php'; ?>

<?php include 'inc/side-bar.php'; ?>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">


    <div class="container-fluid mt-5">
        <h1 class="mt-4">Birth Certificate</h1>
        <div class="card mt-5 mx-auto">

            <form class="form-register" action="" method="post" enctype="multipart/form-data">

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
                            <label for="email"><b>Email Address</b></label> <input type="email" class="input form-control" id="email" name="email" placeholder="Enter Email Address" autocomplete="off" required />
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="phone"><b>Phone</b></label> <input type="text" class="input form-control" id="phone" name="phone" placeholder="Enter Phone Number" autocomplete="off" required />
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="password"><b>Password</b></label> <input type="password" class="input form-control" id="password" name="password" placeholder="Enter Password" autocomplete="off" required />
                        </div>
                    </div>

                    <div class='col-md-6'>
                        <div class="form-group">
                            <label for="confirmpassword"><b>Confirm Password</b></label> <input type="password" class="input form-control" id="password" name="password" placeholder="Retype Password" autocomplete="off" required />
                        </div>
                    </div>
                </div>





                <div class="form-holder form-holder-2 pull-left">

                    <a class="btn btn-primary" href="#">Back
                    </a>
                </div>
                <div class="form-holder form-holder-2 pull-right">
                    <a class="btn btn-primary" href="#">Submit
                    </a>

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
</body>

</html>
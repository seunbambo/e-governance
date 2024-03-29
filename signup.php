<?php
session_start();

include 'inc/header.php';

include 'signup-submit.php';



?>


<div class="page-content">
    <div class="wizard-v3-content">
        <div class="wizard-form">


            <script>
                $('.form-control').bind('keyup blur', function() {
                    var node = $(this);
                    node.val(node.val().replace(/[^a-z ]/g, ''));
                });
            </script>

            <br><br>
            <div class="card mt-5 mx-auto">
                <div class="card-header">
                    <h3 class="text-center">Sign Up</h3>
                </div>
                <form class="form-register" action="signup-submit.php" method="post" enctype="multipart/form-data">

                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="email" class="text-bold">First Name</label> <input type="text" class="input form-control" id="firstName" name="firstName" placeholder="Enter First Name" autocomplete="off" required />
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="email">Last Name</label> <input type="text" class="input form-control" id="lastName" name="lastName" placeholder="Enter Last Name" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="email">Email Address</label> <input type="email" class="input form-control" id="email" name="email" placeholder="Enter Email Address" autocomplete="off" required />
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="phone">Phone</label> <input type="text" class="input form-control" id="phone" name="phone" placeholder="Enter Phone Number" autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="password">Password</label> <input type="password" class="input form-control" id="password" name="password" placeholder="Enter Password" autocomplete="off" required />
                            </div>
                        </div>

                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="confirmpassword">Confirm Password</label> <input type="password" class="input form-control" id="password" name="password" placeholder="Retype Password" autocomplete="off" required />
                            </div>
                        </div>
                    </div>



                    <div class="form-holder form-holder-2 pull-left">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-login" style="border-radius: 0px;"> Login </button>
                    </div>





                    <div class="form-holder form-holder-2 pull-right">
                        <button type="submit" class="btn btn-info" style="border-radius: 0px;"> Submit </button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
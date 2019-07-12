<!--most top info -->
<!--<div style="height: 40px; background: #f2f9ee"></div> data-toggle="sticky-onscroll" -->
<!-- End most top info -->
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
//style="background: #BF0A30;"
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #fff; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo-nav.png" id="logo-nav" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color: #002868;" href="index.php#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #002868;" href="#">Track Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #002868;" href="faq.php#">FAQs</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #002868;" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>

                        <div class="dropdown-content">
                            <a href="birth_cert.php#" class="list-group-item list-group-item-action">Birth Certificate</a>
                            <a href="marriage_cert.php" class="list-group-item list-group-item-action">Marriage Certificate</a>
                            <a href="#" class="list-group-item list-group-item-action">E-Passport</a>
                            <a href="#" class="list-group-item list-group-item-action">Education</a>
                            <a href="#" class="list-group-item list-group-item-action">Tourism</a>
                            <a href="#" class="list-group-item list-group-item-action">Agriculture</a>
                            <a href="#" class="list-group-item list-group-item-action">National ID</a>
                            <a href="#" class="list-group-item list-group-item-action">Traffic Fines</a>
                            <a href="#" class="list-group-item list-group-item-action">Health Insurance</a>
                            <a href="#" class="list-group-item list-group-item-action">Media</a>
                            <a href="#" class="list-group-item list-group-item-action">Transportation</a>
                            <a href="#" class="list-group-item list-group-item-action">Local Government</a>
                            <a href="#" class="list-group-item list-group-item-action">Land</a>
                            <a href="#" class="list-group-item list-group-item-action">Immigration</a>
                            <a href="#" class="list-group-item list-group-item-action">Police</a>
                            <a href="#" class="list-group-item list-group-item-action">Prosecution</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #002868;" href="about.php#">About Us</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto text-center">
                <?php if (isset($_SESSION['firstName'])) : ?>
                    <li class="nav-item text-center">
                        <a class="nav-link" style="color: #002868;" href="#">Welcome, <?php echo $_SESSION['firstName']; ?></a>
                    </li>
                    <li class="nav-item text-center">
                        <button type="button" class="btn btn-custom">
                            <a class="nav-link" style="color: #002868;" href="logout.php">Logout</a>
                        </button>

                    </li>
                <?php else : ?>

                    <li class="nav-item text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal1">
                            <a class="nav-link" style="color: #002868;" href="signup.php">Sign Up</a>
                        </button>
                    </li>
                    <li class="nav-item text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal-login">
                            <a class="nav-link" style="color: #002868;" href="#">Log In</a>
                        </button>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>


<div class="main">


    <!----******************* LOG IN MODAL *********************------>



    <div class="modal fade" id="exampleModal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLogin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title font-weight-bold" id="exampleModalLogin"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login-submit.php" method="post" style="max-width:450px;margin:auto">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <div class="input-icons">
                                <button type="button" class="button-icon">
                                    <i class="fa fa-envelope icon">
                                    </i>
                                </button>
                                <input class="input input-field" type="text" name="login-email" autocomplete="off" placeholder="Enter Email" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <div class="input-icons">
                                <button type="button" class="button-icon">
                                    <i class="fa fa-key icon">
                                    </i>
                                </button>
                                <input class="input input-field" type="password" autocomplete="off" name="login-password" placeholder="Enter Password" required />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-login" style="width: 100%;">LOG IN</button>
                </div>
            </div>
        </div>
    </div>
    <br>
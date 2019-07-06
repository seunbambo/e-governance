<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background:#BF0A30;">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="images/logo-nav.png" id="logo-nav" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Track Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php#">About Us</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto text-center">
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_name']; ?></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                <?php else : ?>

                    <li class="nav-item text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal1">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                        </button>
                    </li>
                    <li class="nav-item text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal-login">
                            <a class="nav-link" href="#">Log In</a>
                        </button>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>
<br><br><br>
<div class="container">
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
                        <form style="max-width:450px;margin:auto">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <div class="input-icons">
                                    <button type="button" class="button-icon">
                                        <i class="fa fa-envelope icon">
                                        </i>
                                    </button>
                                    <input class="input input-field" type="text" autocomplete="off" placeholder="Enter Email" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <div class="input-icons">
                                    <button type="button" class="button-icon">
                                        <i class="fa fa-key icon">
                                        </i>
                                    </button>
                                    <input class="input input-field" type="password" autocomplete="off" placeholder="Enter Password" required />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-login" style="width: 100%;">LOG IN</button>
                    </div>
                </div>
            </div>
        </div>
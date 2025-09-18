<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/additional-methods.js"> </script>
    <script src="js/validate.js"> </script>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

</head>

<body class="bg-white text-dark">

    <?php
    // $_SESSION['user_id'] =  "abc";
    unset($_SESSION['user_id']);
    if (isset($_SESSION['user_id'])) {
    ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom mb-4">
            <div class="container">
                <a class="navbar-brand fw-bold" style="color:#0d9488;" href="#">MobileStore</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dashboardMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="dashboardMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">

                        <!-- Other Links -->
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="products.php">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="offers.php">Offers</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="faq.php">FAQ</a></li>

                        <!-- Profile Dropdown -->
                        <li class="nav-item dropdown ms-3">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                                <img src="uploads/profile_photo.jpg" alt="Profile" class="rounded-circle" width="40" height="40">
                                <span class="ms-2" style="color:#0d9488;">John Doe</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                <li><a class="dropdown-item" href="user_dashboard.php"><i class="fa-solid fa-eye me-2"></i>User Dashboard</a></li>
                                <li><a class="dropdown-item" href="edit_profile.php"><i class="fa-solid fa-user-pen me-2"></i>Edit Profile</a></li>
                                <li><a class="dropdown-item" href="change_password.php"><i class="fa-solid fa-key me-2"></i>Change Password</a></li>
                                <li><a class="dropdown-item" href="cart.php"><i class="fa-solid fa-cart-shopping me-2"></i>Cart</a></li>
                                <li><a class="dropdown-item" href="wishlist.php"><i class="fa-solid fa-heart me-2"></i>Wishlist</a></li>
                                <li><a class="dropdown-item" href="order_history.php"><i class="fa-solid fa-box me-2"></i>Order History</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    <?php
    } else {
    ?>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm border-bottom">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand fw-bold" style="color:#0d9488;" href="#">MobileStore</a>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">

                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="products.php">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="offers.php">Offers</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:#0d9488;" href="faq.php">FAQ</a></li>


                    </ul>

                    <!-- Login/Register -->
                    <div class="ms-lg-3">
                        <a href="login.php" class="btn btn-sm rounded-3 me-2 text-white" style="background-color:#0d9488;">Login</a>
                        <a href="register.php" class="btn btn-sm rounded-3 me-2 text-white" style="background-color:#0d9488;">Register</a>
                    </div>
                </div>
            </div>
        </nav>


        <!-- Hero Banner -->
        <div class="container-fluid text-center text-white py-5" style="background-color:#0d9488;">
            <h1 class="fw-bold display-4 text-white"> Premium Mobile Sale</h1>
            <p class="lead">Luxury Smartphones at Golden Prices.</p>
            <a href="#" class="btn btn-lg px-4 rounded-3 text-white fw-semibold" style="background-color:#0d9488; border:2px solid #ffffff;">Shop Now</a>
        </div>
    <?php
    }
    ?>
    <br>
    <!-- Featured Product -->
    <?php
    if (isset($content)) {
        echo $content;
    }

    ?>
    <br>
    <footer class="text-white pt-5" style="background: #0d9488;">
        <div class="container">
            <div class="row">

                <!-- Brand / Tagline -->
                <div class="col-md-3 mb-4">
                    <h3 class="fw-bold text-warning"><i class="fa-solid fa-mobile-screen-button me-2"></i>MobileStore</h3>
                    <p class="small fst-italic">Premium mobiles, golden prices. Shop the future today.</p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-warning">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-house me-2"></i>Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-circle-info me-2"></i>About</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-phone me-2"></i>Contact</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-question-circle me-2"></i>FAQ</a></li>
                    </ul>
                </div>

                <!-- Support Links -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-warning">Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-truck me-2"></i>Shipping & Returns</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-shield-halved me-2"></i>Privacy Policy</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-file-contract me-2"></i>Terms & Conditions</a></li>
                        <li><a href="#" class="text-white text-decoration-none d-block py-1"><i class="fa-solid fa-headset me-2"></i>Help Center</a></li>
                    </ul>
                </div>

                <!-- Contact + Social -->
                <div class="col-md-3 mb-4">
                    <h5 class="fw-bold text-warning">Get in Touch</h5>
                    <p class="mb-1"><i class="fa-solid fa-phone me-2"></i>+91 98765 43210</p>
                    <p class="mb-1"><i class="fa-solid fa-envelope me-2"></i>support@mobilestore.com</p>
                    <p class="mb-3"><i class="fa-solid fa-location-dot me-2"></i>Tech City, India</p>

                    <!-- Social Media -->
                    <div>
                        <a href="#" class="btn btn-sm rounded-circle me-2" style="background-color:#facc15; color:#0d9488;">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle me-2" style="background-color:#facc15; color:#0d9488;">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle" style="background-color:#facc15; color:#0d9488;">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <hr class="border-light">

            <!-- Bottom Bar -->
            <div class="text-center pb-3">
                <p class="mb-0">&copy; 2025 <span class="text-warning fw-semibold">MobileStore</span>. All rights reserved.</p>
            </div>
        </div>
    </footer>


</body>

</html>
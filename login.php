<?php
include 'db_connect.php';
session_start();
if (isset($_POST['loginbtn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "select * from registration where email='$email' and password='$password'";

    $result = mysqli_query($con, $q);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        while ($res = mysqli_fetch_assoc($result)) {
            if ($res['status'] == 'Active') {
                echo 'Hello';
                if ($res['role'] == "User") {
                    $_SESSION['user_email'] = $email;
                    setcookie("success", "Login Successful", time() + 5);

?>
                    <script>
                        window.location.href = "user_dashboard.php";
                    </script>
                <?php

                } else {
                    $_SESSION['admin_email'] = $email;
                    setcookie("success", "Login Successful", time() + 5);
                ?>
                    <script>
                        window.location.href = "admin_dashboard.php";
                    </script>
                <?php
                }
            } else {
                setcookie('error', "Email not verified", time() + 5);
                ?>
                <script>
                    window.location.href = "login.php";
                </script>
        <?php
            }
        }
    } else {
        setcookie('error', "Invalid username or password", time() + 5);
        ?>
        <script>
            window.location.href = "login.php";
        </script>
<?php
    }
}

ob_start();
?>

<div class="container py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <!-- Header Banner -->
                <div class="text-center py-4" style="background-color:#0d9488;">
                    <h3 class="fw-bold text-white mb-0"><i class="fa-solid fa-user-circle me-2"></i>Login</h3>
                </div>

                <!-- Login Form -->
                <div class="card-body p-4">
                    <form id="loginForm" method="post" action="login.php">
                        <!-- Email -->
                        <div class=" mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control border-2 border-teal" id="email" name="email" placeholder="Enter your email" data-validation="required email">
                            <span class="error text-danger" id="emailError">
                            </span>


                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password" class="form-control border-2 border-teal" id="password" name="password" placeholder="Enter your password" data-validation="required">
                                <span class="error text-danger" id="passwordError">

                                </span>
                            </div>

                            <!-- Remember Me + Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember Me
                                    </label>
                                </div>
                                <a href="forgot_password.php" class="text-decoration-none" style="color:#0d9488;">Forgot Password?</a>
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn w-100 text-white fw-semibold" style="background-color:#0d9488;" name="loginbtn">Login</button>
                    </form>

                    <!-- Divider -->
                    <div class="text-center my-3">
                        <span class="text-muted">OR</span>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center">
                        <p class="mb-0">Don't have an account?
                            <a href="register.php" class="fw-semibold text-decoration-none" style="color:#0d9488;">Register Now</a>
                        </p>
                    </div>
                </div>


                <!-- Footer Banner -->

            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';

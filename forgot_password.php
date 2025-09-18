<?php
// forgot_password.php

ob_start();
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-7">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                <!-- Header Banner -->
                <div class="text-center py-4" style="background-color:#0d9488;">
                    <h3 class="fw-bold text-white mb-0"><i class="fa-solid fa-key me-2"></i>Forgot Password</h3>
                </div>

                <!-- Form -->
                <div class="card-body p-4">
                    <p class="text-center mb-4" style="color:#0d9488;">
                        Enter your registered email address to reset your password.
                    </p>

                    <form id="forgotForm" method="post" action="send_reset_link.php">
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control border-2 border-teal" id="email" name="email" placeholder="Enter your email" data-validation="required email">
                            <span class="error text-danger" id="emailError"></span>
                        </div>

                        <div class="d-grid mt-3">
                            <button type="submit" class="btn text-white fw-semibold" style="background-color:#0d9488;">Send Reset Link</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <p class="mb-0">Remembered your password?
                            <a href="login.php" class="fw-semibold text-decoration-none" style="color:#0d9488;">Login Now</a>
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

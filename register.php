<?php
// register.php
ob_start();
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <!-- Header -->
                <div class="text-center py-4" style="background-color:#0d9488;">
                    <h3 class="fw-bold text-white mb-0">
                        <i class="fa-solid fa-user-plus me-2"></i>Register
                    </h3>
                </div>

                <!-- Form -->
                <form method="post" action="register1.php" enctype="multipart/form-data" id="registerForm">
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <!-- Left Column -->
                            <div class="col-lg-6">
                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Full Name</label>
                                    <input type="text" class="form-control border-2 border-teal" name="fullname"
                                        placeholder="Enter full name" data-validation="required alpha">
                                    <span class="error text-danger" id="fullnameError"></span>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control border-2 border-teal" name="email"
                                        placeholder="Enter email" data-validation="required email">
                                    <span class="error text-danger" id="emailError"></span>
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Password</label>
                                    <input type="password" class="form-control border-2 border-teal" name="password"
                                        placeholder="Enter password" data-validation="required strongPassword min max"
                                        data-min="8" data-max="25">
                                    <span class="error text-danger" id="passwordError"></span>
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Confirm Password</label>
                                    <input type="password" class="form-control border-2 border-teal"
                                        name="confirm_password" placeholder="Confirm password"
                                        data-validation="required confirmPassword" data-password-id="password">
                                    <span class="error text-danger" id="confirm_passwordError"></span>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-lg-6">
                                <!-- Gender -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Gender</label>
                                    <select class="form-select border-2 border-teal" name="gender"
                                        data-validation="required">
                                        <option value="" selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="error text-danger" id="genderError"></span>
                                </div>

                                <!-- Mobile Number -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Mobile Number</label>
                                    <input type="text" class="form-control border-2 border-teal" name="mobile"
                                        placeholder="Enter mobile number" data-validation="required numeric min max"
                                        data-min="10" data-max="10">
                                    <span class="error text-danger" id="mobileError"></span>
                                </div>

                                <!-- Profile Photo -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Profile Photo</label>
                                    <input type="file" class="form-control border-2 border-teal" name="profile_photo"
                                        data-validation="required file filesize" data-filesize="200">
                                    <span class="error text-danger" id="profile_photoError"></span>
                                </div>

                                <!-- Address -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Address</label>
                                    <textarea class="form-control border-2 border-teal" name="address" rows="3"
                                        placeholder="Enter your address" data-validation="required"></textarea>
                                    <span class="error text-danger" id="addressError"></span>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn text-white fw-semibold"
                                        style="background-color:#0d9488;" name="regbtn">
                                        Register
                                    </button>
                                </div>

                                <div class="text-center mt-3">
                                    <p class="mb-0">Already have an account?
                                        <a href="login.php" class="fw-semibold text-decoration-none"
                                            style="color:#0d9488;">Login Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
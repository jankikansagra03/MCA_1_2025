<?php
include_once('db_connect.php');
include_once('mailer.php');
if (isset($_POST['regbtn'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $profile_photo = uniqid() . $_FILES['profile_photo']['name'];
    $profile_photo_tmp = $_FILES['profile_photo']['tmp_name'];
    $token = bin2hex(random_bytes(50));
    // $encrypted_pwd = md5($password);

    $q = "INSERT INTO `registration`(`fullname`, `email`, `password`, `mobile`, `gender`, `profile_picture`, `address`,`token`) VALUES ('$fullname','$email','$password',$mobile,'$gender','$profile_photo','$address','$token')";
    echo $q;

    if (mysqli_query($con, $q)) {
        if (!is_dir("images/profile_pictures")) {
            mkdir("images/profile_pictures");
        }
        move_uploaded_file($profile_photo_tmp, "images/profile_pictures/" . $profile_photo);
        $body = '<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Verify Your Email</title>
</head>
<body style="margin:0; padding:0; background-color:#fdf6e3; font-family:Arial, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#fdf6e3; padding:40px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff; border-radius:12px; box-shadow:0 4px 8px rgba(0,0,0,0.1); overflow:hidden;">
          <tr>
            <td align="center" style="background-color:#0d9488; padding:20px;">
              <h2 style="color:#ffffff; margin:0;">Verify Your Email</h2>
            </td>
          </tr>
          <tr>
            <td align="center" style="padding:40px 20px;">
              <p style="font-size:16px; color:#333; margin-bottom:30px;">
                Please verify your email address by clicking the button below.
              </p>
              <a href="http://localhost/MCA_Sample-1/verify.php?token=' . $token . '&email=' . $email . '" 
                 style="display:inline-block; background-color:#facc15; color:#0d9488; text-decoration:none; 
                        font-size:16px; font-weight:bold; padding:14px 30px; border-radius:8px;">
                 Verify Email
              </a>
            </td>
          </tr>
          <tr>
            <td align="center" style="background-color:#f9fafb; padding:15px; font-size:12px; color:#666;">
              © 2025 Your Company. All rights reserved.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

</body>
</html>
';
        if (sendEmail($email, "Email Verification", $body, "")) {
            setcookie("success", "Email Registered and verification email sent to registered email address", time() + 5);
        }
    } else {
        setcookie("error", "Registration failed. Try again", time() + 5);
    }
?>
    <script>
        window.location.href = "register.php";
    </script>
<?php
}
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
                <form method="post" action="register.php" enctype="multipart/form-data" id="registerForm">
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
                                        placeholder="Enter password" data-validation="required strongPassword min max" id="password"
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
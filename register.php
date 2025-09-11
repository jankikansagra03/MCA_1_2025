<?php
$title_page = "Register";
ob_start();



?>
<style>
    .error {
        color: red;
        font-size: 0.875em;
        margin-top: 0.25em;
    }
</style>
<script>
    // $(document).ready(function() {
    //     $('#register').validate({
    //         rules: {
    //             fname: {
    //                 required: true,
    //                 minlength: 3,
    //                 maxlength: 20,
    //                 pattern: /^[a-zA-Z\s]+$/
    //             },
    //             gender: {
    //                 required: true,
    //             },
    //             email: {
    //                 required: true,
    //                 email: true
    //             },
    //             pswd: {
    //                 required: true,
    //                 minlength: 6,
    //                 maxlength: 20,
    //                 pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*?&])[A-Za-z0-9@$!%*?&]{8,25}$/

    //             },
    //             repswd: {
    //                 required: true,
    //                 equalTo: "#pwd"
    //             }
    //         },
    //         messages: {
    //             fname: {
    //                 required: "Fullname is required.",
    //                 minlength: "Name must have atleast 3 characters",
    //                 maxlength: "Name must not exceed 20 characters",
    //                 lettersOnly: "Name must contain only letters"
    //             },
    //             gender: {
    //                 required: "Please select your gender",
    //             },
    //             email: {
    //                 required: "Email is required",
    //                 email: "Invalid Email"
    //             },
    //             pswd: {
    //                 required: "Password is a required field",
    //                 minlength: "Password must have 6 characters",
    //                 maxlength: "password must not be greater than 20 characters",
    //                 pattern: "Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character"
    //             },
    //             repswd: {
    //                 required: "Please re-enter password",
    //                 equalTo: "Password and Confirm Password must be same"
    //             }
    //         },
    //         errorElement: 'div',
    //         errorPlacement: function(error, element) {
    //             error.addClass("invalid-feedback");
    //             if (element.attr('name') == "gender") {
    //                 error.appendTo('#gen_error')
    //             } else {
    //                 error.insertAfter(element)
    //             }
    //         },
    //         highlight: function(element, errorClass, validClass) {
    //             $(element).addClass("is-invalid").removeClass("is-valid");
    //         },
    //         unhighlight: function(element, errorClass, validClass) {
    //             $(element).addClass('is-valid').removeClass('is-invalid');
    //         }
    //     })
    // })
</script>
<form action="signup.php" method="post" id="signupForm" enctype="multipart/form-data">

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName"
                placeholder="Enter first name" data-validation="required alpha">
            <div class="error" id="firstNameError"></div>

        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName"
                placeholder="Enter last name" data-validation="required alpha">
            <div class="error" id="lastNameError"></div>
        </div>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
            data-validation="required email">
        <div class="error" id="emailError"> </div>
    </div>
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number"
            name="mobile" data-validation="required numeric min max" data-min="10" data-max="10">
        <div class="error" id="mobileError"></div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password"
            placeholder="Create password" data-validation="required strongPassword min max" data-min="8"
            data-max="25">
        <div class="error" id="passwordError"></div>
    </div>

    <div class=" mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
            placeholder="Confirm password" data-validation="required confirmPassword"
            data-password-id="password">
        <div class="error" id="confirmPasswordError"></div>
    </div>

    <div class=" mb-3">
        <label for="profile_picture" class="form-label">Profile Picture</label>
        <input type="file" class="form-control" id="profile_picture" name="profile_picture"
            placeholder="Confirm password" data-validation="required file filesize" data-filesize="200">
        <div class="error" id="profile_pictureError"></div>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="terms" name="terms" data-validation="terms">
        <label class="form-check-label" for="terms">I agree to the Terms & Conditions</label>
        <div class="error" id="termsError"></div>
    </div>
    <button type="submit" class="btn btn-outline-danger w-100 mb-3" name="signup_btn">Sign Up</button>
    <div class="text-center">
        <p class="mb-0">Already have an account?
            <a href="login.php" class="text-danger text-decoration-none">Login</a>
        </p>
    </div>
</form>
<?php
$content1 = ob_get_clean();
include_once('layout.php');

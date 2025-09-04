<?php
$title_page = "Register";
ob_start();

?>
<script>
    $(document).ready(function() {
        $('#register').validate({
            rules: {
                fname: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    pattern: /^[a-zA-Z\s]+$/
                },
                gender: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                pswd: {
                    required: true,
                    minlength: 6,
                    maxlength: 20,
                    pattern: /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@$!%*?&])[A-Za-z0-9@$!%*?&]{8,25}$/

                },
                repswd: {
                    required: true,
                    equalTo: "#pwd"
                }
            },
            messages: {
                fname: {
                    required: "Fullname is required.",
                    minlength: "Name must have atleast 3 characters",
                    maxlength: "Name must not exceed 20 characters",
                    lettersOnly: "Name must contain only letters"
                },
                gender: {
                    required: "Please select your gender",
                },
                email: {
                    required: "Email is required",
                    email: "Invalid Email"
                },
                pswd: {
                    required: "Password is a required field",
                    minlength: "Password must have 6 characters",
                    maxlength: "password must not be greater than 20 characters",
                    pattern: "Password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character"
                },
                repswd: {
                    required: "Please re-enter password",
                    equalTo: "Password and Confirm Password must be same"
                }
            },
            errorElement: 'div',
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                if (element.attr('name') == "gender") {
                    error.appendTo('#gen_error')
                } else {
                    error.insertAfter(element)
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass('is-valid').removeClass('is-invalid');
            }
        })
    })
</script>
<form id="register" method="post">
    <div class="mb-3 mt-3">
        <label for="name1" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="fname">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="repswd">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Select Gender:</label>
        <input type="radio" name="gender" id="gender1" value="m">Male
        <input type="radio" name="gender" id="gender1" value="f">Female
        <div id="gen_error"></div>
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
$content1 = ob_get_clean();
include_once('layout.php');

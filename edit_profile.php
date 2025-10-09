<?php
include_once('db_connect.php');
include_once('user_authentication.php');
// view_profile.php
ob_start();
$email = $_SESSION['user_email'];

if (isset($_POST['updateProfileBtn'])) {
    $fname = $_POST['name'];
    $mobile = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $updt = "update registration set fullname='$fname', mobile=$mobile, gender='$gender', address='$address' where email='$email'";
    // echo $updt;
    if (mysqli_query($con, $updt)) {
        setcookie('success', "Profile Updated Successfully.", time() + 3);
?>
        <script>
            window.location.href = "view_profile.php";
        </script>
    <?php
    } else {
        setcookie('error', "Error in updating Profile", time() + 3);
    ?>
        <script>
            window.location.href = "edit_profile.php";
        </script>
<?php
    }
}
$q = "Select * from registration where email='$email'";
$result = mysqli_query($con, $q);
$user = mysqli_fetch_assoc($result);

// Mock user data (replace later with database fetch)

?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">

            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="card-header text-center py-3" style="background-color:#0d9488;">
                    <h4 class="mb-0 text-white fw-bold"><i class="fa-solid fa-user-pen me-2"></i>Edit Profile</h4>
                </div>

                <div class="card-body p-4">


                    <!-- Profile Info Form -->
                    <form method="post" action="edit_profile.php" id="editProfileForm" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control border-2 border-teal" id="name" name="name"
                                value="<?= $user['fullname'] ?>" placeholder="Enter full name" data-validation="required">
                            <span class="error text-danger" id="nameError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control border-2 border-teal" id="email" name="email"
                                value="<?= $user['email'] ?>" placeholder="Enter email" data-validation="required email" Readonly>
                            <span class="error text-danger" id="emailError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone</label>
                            <input type="text" class="form-control border-2 border-teal" id="phone" name="phone"
                                value="<?= $user['mobile'] ?>" placeholder="Enter 10-digit phone" data-validation="required number min max" data-min="10" data-max="10">
                            <span class="error text-danger" id="phoneError"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gender</label>
                            <select class="form-select border-2 border-teal" name="gender"
                                data-validation="required">
                                <option value="">Select Gender</option>
                                <option value="Male" <?php echo $user['gender'] == "Male" ? "selected" : "" ?>>Male</option>
                                <option value="Female" <?php echo $user['gender'] == "Female" ? "selected" : "" ?>>Female</option>
                                <option value="Other" <?php echo $user['gender'] == "Other" ? "selected" : "" ?>>Other</option>
                            </select>
                            <span class="error text-danger" id="genderError"></span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Address</label>
                            <textarea class="form-control border-2 border-teal" name="address" rows="3"
                                placeholder="Enter your address" data-validation="required">
                            <?= trim($user['address']) ?></textarea>
                            <span class="error text-danger" id="addressError"></span>
                        </div>
                        <div class="d-grid mt-3">
                            <button type="submit" name="updateProfileBtn" class="btn fw-semibold"
                                style="background-color:#0d9488; color:#fff;">
                                <i class="fa-solid fa-check me-2"></i> Update Profile
                            </button>
                        </div>
                    </form>

                    <hr class="my-4">

                    <!-- Profile Picture Update Form -->
                    <h6 class="fw-bold text-teal mb-3"><i class="fa-solid fa-image me-2"></i>Change Profile Picture</h6>
                    <form method="post" action="edit_profile.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" class="form-control" name="profile_picture" accept=".jpg,.jpeg,.png,.gif">
                        </div>
                        <div class="d-grid mt-2">
                            <button type="submit" name="uploadPicBtn" class="btn fw-semibold"
                                style="background-color:#0d9488; color:#fff;">
                                <i class="fa-solid fa-upload me-2"></i> Upload Picture
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
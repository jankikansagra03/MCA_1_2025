<?php
include_once('db_connect.php');
include_once('user_authentication.php');
// view_profile.php
ob_start();

$email = $_SESSION['user_email'];
$q = "Select * from registration where email='$email'";
$result = mysqli_query($con, $q);
$user = mysqli_fetch_assoc($result);

// Mock user data (replace later with database fetch)

?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">

            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <!-- Header -->
                <div class="card-header text-center py-3" style="background-color:#0d9488;">
                    <h4 class="mb-0 text-white fw-bold">
                        <i class="fa-solid fa-user me-2"></i> My Profile
                    </h4>
                </div>

                <div class="card-body p-4">
                    <div class="row g-4 align-items-center">
                        <!-- Profile Picture -->
                        <div class="col-md-4 text-center">
                            <img src="images/profile_pictures/<?= $user['profile_picture'] ?>"
                                alt="Profile Picture"
                                class="rounded-circle shadow-sm border"
                                style="width:150px; height:150px; object-fit:cover;">
                        </div>

                        <!-- Profile Details -->
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th class="text-teal" style="width:150px;">Full Name:</th>
                                    <td><?= htmlspecialchars($user['fullname']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-teal">Email:</th>
                                    <td><?= htmlspecialchars($user['email']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-teal">Gender:</th>
                                    <td><?= htmlspecialchars($user['gender']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-teal">Mobile:</th>
                                    <td><?= htmlspecialchars($user['mobile']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-teal">Address:</th>
                                    <td><?= nl2br(htmlspecialchars($user['address'])); ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4 text-center">
                        <a href="edit_profile.php" class="btn text-white fw-semibold px-4 me-2"
                            style="background-color:#0d9488;">
                            <i class="fa-solid fa-pen-to-square me-1"></i> Edit Profile
                        </a>
                        <a href="change_password.php" class="btn fw-semibold px-4"
                            style="background-color:#b8860b; color:white;">
                            <i class="fa-solid fa-lock me-1"></i> Change Password
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
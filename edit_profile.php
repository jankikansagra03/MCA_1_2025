<?php
// edit_profile.php
ob_start();
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8">

            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="card-header text-center py-3" style="background-color:#0d9488;">
                    <h4 class="mb-0 text-white fw-bold"><i class="fa-solid fa-user-pen me-2"></i>Edit Profile</h4>
                </div>

                <div class="card-body p-4">
                    <?php if ($alert) echo $alert; ?>

                    <!-- Profile Info Form -->
                    <form method="post" action="edit_profile.php" id="editProfileForm" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <input type="text" class="form-control border-2 border-teal" id="name" name="name"
                                value="" placeholder="Enter full name" data-validation="required">
                            <span class="error text-danger" id="nameError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control border-2 border-teal" id="email" name="email"
                                value="" placeholder="Enter email" data-validation="required email">
                            <span class="error text-danger" id="emailError"></span>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone</label>
                            <input type="text" class="form-control border-2 border-teal" id="phone" name="phone"
                                value="" placeholder="Enter 10-digit phone" data-validation="required number min max" data-min="10" data-max="10">
                            <span class="error text-danger" id="phoneError"></span>
                        </div>

                        <div class="d-grid mt-3">
                            <button type="submit" name="updateProfileBtn" class="btn fw-semibold"
                                style="background-color:#facc15; color:#0d9488;">
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
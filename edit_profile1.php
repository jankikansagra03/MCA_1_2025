<?php
// edit_profile.php
ob_start();

// Mock data - replace this with DB fetch for logged-in user
$user = [
    'fullname' => 'John Doe',
    'email' => 'johndoe@example.com',
    'gender' => 'Male',
    'mobile' => '9876543210',
    'profile_photo' => 'uploads/profile/default.png',
    'address' => '123, Green Avenue, Mumbai',
];
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                <!-- Header -->
                <div class="text-center py-4" style="background-color:#0d9488;">
                    <h3 class="fw-bold text-white mb-0">
                        <i class="fa-solid fa-user-pen me-2"></i>Edit Profile
                    </h3>
                </div>

                <!-- Edit Profile Form -->
                <form method="post" action="update_profile.php" enctype="multipart/form-data">
                    <div class="card-body p-4">
                        <div class="row g-4">

                            <!-- Left Column -->
                            <div class="col-lg-6">
                                <!-- Full Name -->
                                <div class="mb-3">
                                    <label for="fullname" class="form-label fw-semibold">Full Name</label>
                                    <input type="text" class="form-control border-2 border-teal"
                                        id="fullname" name="fullname"
                                        value="<?= htmlspecialchars($user['fullname']); ?>">
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control border-2 border-teal"
                                        id="email" name="email"
                                        value="<?= htmlspecialchars($user['email']); ?>">
                                </div>

                                <!-- Gender -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Gender</label>
                                    <select class="form-select border-2 border-teal" name="gender">
                                        <option value="Male" <?= $user['gender'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                        <option value="Female" <?= $user['gender'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                                        <option value="Other" <?= $user['gender'] == 'Other' ? 'selected' : ''; ?>>Other</option>
                                    </select>
                                </div>

                                <!-- Mobile Number -->
                                <div class="mb-3">
                                    <label for="mobile" class="form-label fw-semibold">Mobile Number</label>
                                    <input type="text" class="form-control border-2 border-teal"
                                        id="mobile" name="mobile"
                                        value="<?= htmlspecialchars($user['mobile']); ?>">
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-lg-6">
                                <!-- Current Profile Photo -->
                                <div class="mb-3 text-center">
                                    <label class="form-label fw-semibold">Current Profile Photo</label><br>
                                    <img src="<?= htmlspecialchars($user['profile_photo']); ?>"
                                        class="rounded-circle shadow-sm mb-2"
                                        style="width:120px; height:120px; object-fit:cover;">
                                    <input type="file" class="form-control border-2 border-teal mt-2"
                                        id="profile_photo" name="profile_photo">
                                </div>

                                <!-- Address -->
                                <div class="mb-3">
                                    <label for="address" class="form-label fw-semibold">Address</label>
                                    <textarea class="form-control border-2 border-teal"
                                        id="address" name="address"
                                        rows="4"><?= htmlspecialchars($user['address']); ?></textarea>
                                </div>
                            </div>

                            <!-- Save Button -->
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn text-white fw-semibold"
                                        style="background-color:#0d9488;">
                                        <i class="fa-solid fa-floppy-disk me-1"></i> Save Changes
                                    </button>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="view_profile.php" class="fw-semibold text-decoration-none"
                                        style="color:#b8860b;">Cancel & Go Back</a>
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
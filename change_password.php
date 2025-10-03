<?php
ob_start();

?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="card-header text-center py-3" style="background-color:#0d9488;">
                    <h4 class="mb-0 text-white fw-bold"><i class="fa-solid fa-key me-2"></i>Change Password</h4>
                </div>

                <div class="card-body p-4">


                    <p class="small text-muted mb-3">
                        For security, choose a strong password (at least 8 characters, with uppercase, lowercase, number and special character).
                    </p>

                    <form id="changePasswordForm" method="post" action="change_password.php" novalidate>
                        <!-- Current Password -->
                        <div class="mb-3 position-relative">
                            <label for="current_password" class="form-label fw-semibold">Current Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-2 border-teal" id="current_password"
                                    name="current_password" placeholder="Enter current password"
                                    data-validation="required">
                                <button type="button" class="btn border-start-0" onclick="togglePwd('current_password')" title="Show / hide">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            <span class="error text-danger" id="current_passwordError"></span>
                        </div>

                        <!-- New Password -->
                        <div class="mb-3 position-relative">
                            <label for="new_password" class="form-label fw-semibold">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-2 border-teal" id="new_password"
                                    name="new_password" placeholder="Enter new password"
                                    data-validation="required strongPassword min max" data-min="8" data-max="64">
                                <button type="button" class="btn border-start-0" onclick="togglePwd('new_password')" title="Show / hide">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            <span class="error text-danger" id="new_passwordError"></span>
                        </div>

                        <!-- Confirm New Password -->
                        <div class="mb-3 position-relative">
                            <label for="confirm_new_password" class="form-label fw-semibold">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control border-2 border-teal" id="confirm_new_password"
                                    name="confirm_new_password" placeholder="Confirm new password"
                                    data-validation="required confirmPassword" data-password-id="new_password">
                                <button type="button" class="btn border-start-0" onclick="togglePwd('confirm_new_password')" title="Show / hide">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                            <span class="error text-danger" id="confirm_new_passwordError"></span>
                        </div>

                        <div class="d-grid mt-3">
                            <button type="submit" name="changePassBtn" class="btn text-white fw-semibold"
                                style="background-color:#0d9488;">
                                <i class="fa-solid fa-check me-2"></i> Update Password
                            </button>
                        </div>
                    </form>

                    <div class="mt-3 text-center small text-muted">
                        <a href="user_dashboard.php" class="text-decoration-none" style="color:#0d9488;"><i class="fa-solid fa-arrow-left me-1"></i>Back to Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$content = ob_get_clean();

include_once("layout.php");

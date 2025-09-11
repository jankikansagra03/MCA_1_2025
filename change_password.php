<?php
ob_start();

?>

<form action="">
    <div class="mb-3 mt-3">
        <label for="current_password" class="form-label">Current Password:</label>
        <input type="password" class="form-control" id="current_password" placeholder="Enter current password" name="current_password" data-validation="required">
        <div class="error" id="current_passwordError"></div>
    </div>
    <div class="mb-3">
        <label for="new_password" class="form-label">New Password:</label>
        <input type="password" class="form-control" id="new_password" placeholder="Enter new password" name="new_password"
            data-validation="required strongPassword min max" data-min="8" data-max="25">
        <div class="error" id="new_passwordError"></div>
    </div>
    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm New Password:</label>
        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm new password" name="confirm_password" data-validation="required confirmPassword" data-password-id="new_password">
        <div class="error" id="confirm_passwordError"></div>
    </div>
    <button type="submit" class="btn btn-primary">Change Password</button>
</form>


<?php
$content1 = ob_get_clean();

include_once("layout.php");

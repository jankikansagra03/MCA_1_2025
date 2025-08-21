<?php
$title_page = "Register";
ob_start();

?>
<form action="/action_page.php">
    <div class="mb-3 mt-3">
        <label for="name1" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="email">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Confirm Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
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

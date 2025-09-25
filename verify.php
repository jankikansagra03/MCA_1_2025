<?php
include_once("db_connect.php");
$token = $_GET['token'];
$email = $_REQUEST['email'];

$q = "select * from registration where email='$email' and token='$token'";
$res = mysqli_query($con, $q);

if (mysqli_num_rows($res) == 1) {
    $updt = "update registration set status='Active' where email='$email' and token='$token'";
    if (mysqli_query($con, $updt)) {
        setcookie('success', "Email verified. You can now Login", time() + 5);
?>
        <script>
            window.location.href = "login.php";
        </script>
    <?php
    } else {
        setcookie('error', "Verification Failed", time() + 5);
    ?>
        <script>
            window.location.href = "register.php";
        </script>
    <?php
    }
} else {
    setcookie('error', "Email not registered", time() + 5);
    ?>
    <script>
        window.location.href = "register.php";
    </script>
<?php
}

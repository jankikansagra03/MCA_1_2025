<?php
session_start();
if (!isset($_SESSION['user_email'])) {
?>
    <script>
        alert("helo0");
        window.location.href = "login.php";
    </script>
<?php
}

<?php

ob_start();
?>
<h1>
    This is index page
</h1>
<h2>
    Welcome to my website
</h2>

<?php
$content1 = ob_get_clean();
include_once("layout.php");

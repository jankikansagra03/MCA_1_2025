<?php
// aboutus.php

// About Us content
ob_start();
?>

<!-- Hero Section -->


<!-- Company Info -->
<div class="container py-5">
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="images/about-company.jpg" class="img-fluid rounded-3 shadow-sm" alt="Company">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold" style="color:#0d9488;">Who We Are</h2>
            <p class="text-muted">MobileStore is a leading retailer of premium smartphones, committed to bringing the latest technology to our customers. We offer a wide range of devices, accessories, and exclusive offers, ensuring the best shopping experience for mobile enthusiasts.</p>
            <p class="text-muted">Founded in 2020, our mission is to combine quality, affordability, and exceptional customer service under one roof. Whether you're looking for the newest flagship model or a budget-friendly smartphone, we've got you covered.</p>
        </div>
    </div>

    <!-- Team Section -->
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">Meet Our Team</h2>
    <div class="row g-4">
        <!-- Team Member 1 -->
        <div class="col-md-3 text-center">
            <img src="images/team1.jpg" class="rounded-circle mb-2" alt="Team 1" width="150">
            <h5 class="fw-bold" style="color:#0d9488;">Janki Kansagra</h5>
            <p class="text-muted">Founder & CEO</p>
        </div>

        <!-- Team Member 2 -->
        <div class="col-md-3 text-center">
            <img src="images/team2.jpg" class="rounded-circle mb-2" alt="Team 2" width="150">
            <h5 class="fw-bold" style="color:#0d9488;">Rahul Sharma</h5>
            <p class="text-muted">Head of Operations</p>
        </div>

        <!-- Team Member 3 -->
        <div class="col-md-3 text-center">
            <img src="images/team3.jpg" class="rounded-circle mb-2" alt="Team 3" width="150">
            <h5 class="fw-bold" style="color:#0d9488;">Sneha Patel</h5>
            <p class="text-muted">Marketing Lead</p>
        </div>

        <!-- Team Member 4 -->
        <div class="col-md-3 text-center">
            <img src="images/team4.jpg" class="rounded-circle mb-2" alt="Team 4" width="150">
            <h5 class="fw-bold" style="color:#0d9488;">Amit Verma</h5>
            <p class="text-muted">Tech Head</p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';

<?php
ob_start();
?>
<div class="container py-5">
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">
        <i class="fa-solid fa-star me-2" style="color:#0d9488"></i> Featured Mobiles <i class="fa-solid fa-star me-2" style="color: #0d9488;"></i>
    </h2>

    <div class="row g-4">
        <!-- Product Card 1 -->
        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-4 col-xxl-4 col-xl-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="images/mobile1.jpg" class="card-img-top" alt="Mobile 1">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold" style="color:#0d9488;">iPhone 15 Pro</h5>
                    <p class="card-text text-muted">Experience the future of smartphones.</p>
                    <p class="fw-bold text-warning">₹1,20,000</p>
                    <a href="#" class="btn text-white" style="background-color:#0d9488;">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-4 col-xxl-4 col-xl-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="images/mobile2.jpg" class="card-img-top" alt="Mobile 2">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold" style="color:#0d9488;">Samsung Galaxy S24</h5>
                    <p class="card-text text-muted">Flagship performance with style.</p>
                    <p class="fw-bold text-warning">₹95,000</p>
                    <a href="#" class="btn text-white" style="background-color:#0d9488;">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-4 col-xxl-4 col-xl-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="images/mobile3.jpg" class="card-img-top" alt="Mobile 3">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold" style="color:#0d9488;">OnePlus 12</h5>
                    <p class="card-text text-muted">Power meets smooth performance.</p>
                    <p class="fw-bold text-warning">₹65,000</p>
                    <a href="#" class="btn text-white" style="background-color:#0d9488;">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once("layout.php");
?>
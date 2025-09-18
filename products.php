<?php
// shop.php

// Shop content
ob_start();
?>

<div class="container py-5">


    <!-- Search + Sort Bar -->
    <div class="row mb-4">
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <input type="text" class="form-control" placeholder=" Search mobiles..." style="border:2px solid #0d9488;">
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <select class="form-select" style="border:2px solid #0d9488; color:#0d9488;">
                <option selected disabled>Sort by Price</option>
                <option value="low-high">Low to High</option>
                <option value="high-low">High to Low</option>
            </select>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <select class=" form-select" style="border:2px solid #0d9488; color:#0d9488;">
                <option selected disabled>Sort by Company</option>
                <option value="apple">Apple</option>
                <option value="samsung">Samsung</option>
                <option value="oneplus">OnePlus</option>
                <option value="google">Google</option>
            </select>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <input type="button" value="Apply Filter" class="btn text-white w-100" style="background-color:#0d9488;">
        </div>
    </div>
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">
        <i class="fa-solid fa-mobile-screen-button me-2" style="color:#0d9488 !important;"></i> Our Collection
    </h2>
    <!-- Products Grid -->
    <div class="row g-4">
        <!-- Product Card 1 -->
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <div class=" card shadow-sm border-0 h-100">
                <img src="images/mobile1.jpg" class="card-img-top" alt="iPhone 15 Pro">
                <div class="card-body text-center">
                    <h6 class="fw-bold" style="color:#0d9488;">iPhone 15 Pro</h6>
                    <p class="fw-bold text-warning">₹1,20,000</p>
                    <a href="#" class="btn btn-sm text-white" style="background-color:#0d9488;">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <div class="card shadow-sm border-0 h-100">
                <img src="images/mobile2.jpg" class="card-img-top" alt="Samsung Galaxy S24">
                <div class="card-body text-center">
                    <h6 class="fw-bold" style="color:#0d9488;">Samsung Galaxy S24</h6>
                    <p class="fw-bold text-warning">₹95,000</p>
                    <a href="#" class="btn btn-sm text-white" style="background-color:#0d9488;">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <div class="card shadow-sm border-0 h-100">
                <img src="images/mobile3.jpg" class="card-img-top" alt="OnePlus 12">
                <div class="card-body text-center">
                    <h6 class="fw-bold" style="color:#0d9488;">OnePlus 12</h6>
                    <p class="fw-bold text-warning">₹65,000</p>
                    <a href="#" class="btn btn-sm text-white" style="background-color:#0d9488;">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
            <div class="card shadow-sm border-0 h-100">
                <img src="images/mobile4.jpg" class="card-img-top" alt="Google Pixel 9">
                <div class="card-body text-center">
                    <h6 class="fw-bold" style="color:#0d9488;">Google Pixel 9</h6>
                    <p class="fw-bold text-warning">₹80,000</p>
                    <a href="#" class="btn btn-sm text-white" style="background-color:#0d9488;">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-5 d-flex justify-content-center">
        <nav>
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link">Previous</a></li>
                <li class="page-item active"><a class="page-link" style="background-color:#0d9488; border-color:#0d9488;">1</a></li>
                <li class="page-item"><a class="page-link" style="color:#0d9488;">2</a></li>
                <li class="page-item"><a class="page-link" style="color:#0d9488;">3</a></li>
                <li class="page-item"><a class="page-link" style="color:#0d9488;">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';

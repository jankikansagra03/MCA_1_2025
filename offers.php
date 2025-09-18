<?php
// offers.php

// Offers content
ob_start();
?>
<div class="container">
    <div class="mt-5">
        <h3 class="text-center fw-bold mb-4" style="color:#0d9488;">
            <i class="fa-solid fa-ticket me-2" style="color:#0d9488 !important;"></i> Exclusive Offer Codes
        </h3>

        <div class="row g-4">
            <!-- Coupon 1 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
                <div class="offer-card p-4 text-center rounded-3 shadow-sm h-100 d-flex flex-column justify-content-center"
                    style="background-color:#facc15; color:#0d9488; cursor:pointer;">
                    <h5 class="fw-bold"><i class="fa-solid fa-bolt me-2"></i> FESTIVE10</h5>
                    <p class="mb-2">Get <span class="fw-bold">10% OFF</span> on all premium smartphones.</p>
                    <span class="coupon-code badge bg-white text-dark px-3 py-2 d-none">Use Code: FESTIVE10</span>
                </div>
            </div>

            <!-- Coupon 2 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
                <div class="offer-card p-4 text-center rounded-3 shadow-sm h-100 d-flex flex-column justify-content-center"
                    style="background-color:#facc15; color:#0d9488; cursor:pointer;">
                    <h5 class="fw-bold"><i class="fa-solid fa-bolt me-2"></i> SAMSUNG20</h5>
                    <p class="mb-2">Flat <span class="fw-bold">₹20,000 OFF</span> on Samsung Galaxy S24 series.</p>
                    <span class="coupon-code badge bg-white text-dark px-3 py-2 d-none">Use Code: SAMSUNG20</span>
                </div>
            </div>

            <!-- Coupon 3 -->
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-2">
                <div class="offer-card p-4 text-center rounded-3 shadow-sm h-100 d-flex flex-column justify-content-center"
                    style="background-color:#facc15; color:#0d9488; cursor:pointer;">
                    <h5 class="fw-bold"><i class="fa-solid fa-bolt me-2"></i> PIXEL5K</h5>
                    <p class="mb-2">Get <span class="fw-bold">₹5,000 OFF</span> on Google Pixel phones.</p>
                    <span class="coupon-code badge bg-white text-dark px-3 py-2 d-none">Use Code: PIXEL5K</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to toggle coupon visibility -->
<script>
    document.querySelectorAll('.offer-card').forEach(card => {
        card.addEventListener('click', () => {
            let code = card.querySelector('.coupon-code');
            code.classList.toggle('d-none');
        });
    });
</script>



<?php
$content = ob_get_clean();
include 'layout.php';

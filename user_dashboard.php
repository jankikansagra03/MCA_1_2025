<?php
// user_dashboard.php
ob_start();
?>

<div class="container-fluid py-4" style="background-color:#f8f9fa;">
    <!-- Dashboard Navbar -->

    <!-- Dashboard Content -->
    <div class="container">
        <div class="row g-4">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <div class="card-header text-center p-4" style="background: linear-gradient(135deg, #0d9488, #facc15); color:white;">
                        <img src="uploads/profile_photo.jpg" alt="Profile" class="rounded-circle border border-3 border-white mb-2" width="90" height="90">
                        <h5 class="fw-bold mb-0">John Doe</h5>
                        <small>john.doe@example.com</small>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="edit_profile.php" class="list-group-item list-group-item-action" style="color:#0d9488"><i class="fa-solid fa-user-pen me-2"></i>Edit Profile</a>
                        <a href="change_password.php" class="list-group-item list-group-item-action" style="color:#0d9488"><i class="fa-solid fa-key me-2"></i>Change Password</a>
                        <a href="cart.php" class="list-group-item list-group-item-action" style="color:#0d9488"><i class="fa-solid fa-cart-shopping me-2"></i>Shopping Cart</a>
                        <a href="wishlist.php" class="list-group-item list-group-item-action" style="color:#0d9488"><i class="fa-solid fa-heart me-2"></i>Wishlist</a>
                        <a href="order_history.php" class="list-group-item list-group-item-action" style="color:#0d9488"><i class="fa-solid fa-box me-2"></i>Order History</a>
                        <a href="logout.php" class="list-group-item list-group-item-action" style="color:#0d9488"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</a>
                    </div>
                </div>
            </div>

            <!-- Main Dashboard -->
            <div class="col-lg-9">
                <div class="row g-3">
                    <!-- Overview Cards -->
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm rounded-4 border-0 p-4 hover-scale" style="background: #ffffff;">
                            <i class="fa-solid fa-cart-shopping fa-2x mb-2" style="color:#0d9488;"></i>
                            <h6 class="fw-bold" style="color:#0d9488">My Cart</h6>
                            <p class="text-muted mb-0">3 Items</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm rounded-4 border-0 p-4 hover-scale" style="background: #ffffff;">
                            <i class="fa-solid fa-heart fa-2x mb-2" style="color:#0d9488;"></i>
                            <h6 class="fw-bold" style="color:#0d9488">Wishlist</h6>
                            <p class="text-muted mb-0">5 Items</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center shadow-sm rounded-4 border-0 p-4 hover-scale" style="background: #ffffff;">
                            <i class="fa-solid fa-box fa-2x mb-2" style="color:#0d9488;"></i>
                            <h6 class="fw-bold" style="color:#0d9488">Orders</h6>
                            <p class="text-muted mb-0">12 Orders</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Orders / Custom Content -->
                <div class="card shadow-sm rounded-4 border-0 mt-4 p-4">
                    <h5 class="fw-bold mb-3" style="color:#0d9488;">Recent Orders</h5>
                    <p class="text-muted">You have no recent orders.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Hover effect for cards */
    .hover-scale {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-scale:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
</style>

<?php
$content = ob_get_clean();
include 'layout.php';

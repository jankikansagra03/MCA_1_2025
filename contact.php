<?php
// contact.php

// Contact page content
ob_start();
?>

<div class="container py-5">
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">
        <i class="fa-solid fa-envelope me-2" style="color:#0d9488 !important;"></i> Contact Us
    </h2>

    <div class="row gx-2">
        <!-- Contact Details -->
        <div class="col-md-5">
            <div class="p-4" style=" color:#0d9488; border:2px solid #0d9488; border-radius:8px;">
                <h5 class="fw-bold mb-3">Get in Touch</h5>
                <p><i class="fa-solid fa-phone me-2"></i>+91 98765 43210</p>
                <p><i class="fa-solid fa-envelope me-2"></i>support@mobilestore.com</p>
                <p><i class="fa-solid fa-location-dot me-2"></i>Tech City, India</p>

                <h6 class="fw-bold mt-4 mb-2">Follow Us</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm rounded-circle" style="color:#ffffff; background-color:#0d9488;">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle" style="color:#ffffff; background-color:#0d9488;">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-sm rounded-circle" style="color:#ffffff; background-color:#0d9488;">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                <br>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.991231530353!2d70.89784381085862!3d22.24041147964518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b4a660019ee9%3A0x3d6254f36ed0e794!2sRK%20University%20Main%20Campus!5e0!3m2!1sen!2sin!4v1758044988542!5m2!1sen!2sin" height="265" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-md-7">
            <div class="p-4 rounded-3" style="background-color:#ffffff; border:2px solid #0d9488; border-radius:8px;">
                <h5 class="fw-bold mb-3" style="color:#0d9488;">Send a Message</h5>
                <form id="contactForm" method="post" action="send_contact.php">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <input type="text" class="form-control border-2 border-teal" id="name" name="name" data-validation="required alpha min max" data-min="3" data-max="30">
                        <span class="error text-danger" id="nameError">
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control border-2 border-teal" id="email" name="email" data-validation="required email">
                        <span class="error text-danger" id="emailError">
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label fw-semibold">Subject</label>
                        <input type="text" class="form-control border-2 border-teal" id="subject" name="subject" data-validation="required min max" data-min="3" data-max="50">
                        <span class="error text-danger" id="subjectError">
                        </span>

                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Message</label>
                        <textarea class="form-control border-2 border-teal" id="message" name="message" rows="5" data-validation="required"></textarea>
                        <span class="error text-danger" id="messageError">
                        </span>
                    </div>
                    <button type="submit" class="btn text-white fw-semibold" style="background-color:#0d9488;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';

<?php
// faq.php

// FAQ page content
ob_start();
?>

<div class="container py-5">
    <h2 class="text-center fw-bold mb-4" style="color:#0d9488;">
        <i class="fa-solid fa-question-circle me-2"></i> Frequently Asked Questions
    </h2>

    <div class="accordion" id="faqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading1">
                <button class="accordion-button fw-semibold text-teal" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1" style="color:#0d9488;">
                    What is MobileStore?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    MobileStore is a premium smartphone retailer offering the latest models with great offers and unbeatable prices.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading2">
                <button class="accordion-button collapsed fw-semibold text-teal" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2" style="color:#0d9488;">
                    How can I place an order?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can browse our products, select the desired item, and click "Add to Cart." Then complete checkout by providing shipping details and payment.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading3">
                <button class="accordion-button collapsed fw-semibold text-teal" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3" style="color:#0d9488;">
                    What payment methods do you accept?
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We accept all major credit/debit cards, net banking, UPI payments, and Cash on Delivery (where available).
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading4">
                <button class="accordion-button collapsed fw-semibold text-teal" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4" style="color:#0d9488;">
                    What is the return policy?
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can return products within 7 days of delivery if they are unused and in original packaging. Some exceptions apply for clearance or sale items.
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading5">
                <button class="accordion-button collapsed fw-semibold text-teal" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5" style="color:#0d9488;">
                    How can I track my order?
                </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Once your order is shipped, you will receive a tracking number via email/SMS to check the delivery status on the courier's website.
                </div>
            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';

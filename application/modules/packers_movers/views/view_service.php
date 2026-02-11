<?php
$this->load->database();
$this->load->helper('text');
$st = strtolower(str_replace(" ", "-", $state));
$this->load->helper('text');
include 'city_content.php';
$ctlink = strtolower(str_replace(" ", "-", $city));
if (file_exists("./application/modules/packers_movers/views/data/$st.php")) {
    include "data/$st.php";
} else {
    redirect("error?Invalid+Request");
}
foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} ?>

<section class="city-hero">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT CONTENT -->
            <div class="col-lg-8">

                <!-- Breadcrumb -->
                <div class="city-breadcrumb">
                    <a href="<?= site_url(); ?>">Home</a>
                    <span> / </span>
                    <a href="<?= site_url('packers-movers'); ?>">Packers & Movers</a>
                    <span> / </span>
                    <span><?= $city; ?></span>
                </div>

                <!-- H1 -->
                <h1 class="mb-3">
                    Best Packers and Movers in <?= $city; ?>
                </h1>

                <!-- Description -->
                <p>
                    Choudhary Packers and Movers offers trusted, safe, and affordable
                    relocation services in <?= $city; ?>. We specialize in household shifting,
                    office relocation, vehicle transport, and complete packing solutions
                    with zero damage assurance.
                </p>

                <!-- Trust Widgets -->
                <div class="trust-widgets">
                    <div class="trust-widget">
                        <i class="bi bi-patch-check-fill"></i> IBA Approved
                    </div>
                    <div class="trust-widget">
                        <i class="bi bi-star-fill"></i> 4.9 Google Rating
                    </div>
                    <div class="trust-widget">
                        <i class="bi bi-award-fill"></i> ISO Certified
                    </div>
                    <div class="trust-widget">
                        <i class="bi bi-headset"></i> 24/7 Support
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="d-flex align-items-center gap-3 mt-5 flex-wrap">

                    <a href="<?= $phonehtml; ?>" class="btn btn-light d-flex align-items-center gap-2 px-4 py-2">
                        <i class="bi bi-telephone-fill"></i>
                        <?= $phone; ?>
                    </a>

                    <a href="#quote-form" class="btn btn-danger d-flex align-items-center gap-2 px-4 py-2">
                        Get Free Quote
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>


            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-4 mt-4 mt-lg-0" id="quote-form">
                <?php $this->load->view('contacts/quoteform.php'); ?>
            </div>

        </div>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-start">

            <!-- LEFT CONTENT -->
            <div class="col-12 col-lg-8">
                <div class="bg-white p-4 rounded shadow-sm">

                    <p>
                        When you hire us you can expect better services in terms of shifting and packing.
                        Our expert team manages the complete relocation process smoothly and efficiently.
                    </p>

                    <p>
                        With a strong network across India, we make relocation fast, easy, and hassle-free.
                        Our services include household shifting, storage, air cargo, courier services,
                        international moving, and vehicle transportation.
                    </p>

                    <p>
                        We provide end-to-end relocation solutions under one roof — packing, loading,
                        transportation, unloading, and rearranging at your new destination.
                    </p>

                    <p>
                        Our team ensures timely delivery without compromising service quality. Heavy and
                        large goods are handled with special care to ensure complete customer satisfaction.
                    </p>

                </div>
            </div>

            <!-- RIGHT STICKY SIDEBAR -->
            <div class="col-12 col-lg-4">

                <!-- IMPORTANT: position-sticky must be DIRECT -->
                <div class="position-sticky top-0" >

                   
                    <!-- CONTACT WIDGET -->
                    <div class="bg-danger text-white rounded shadow-sm p-4 text-center">

                        <i class="bi bi-headset fs-1 mb-2"></i>

                        <h5 class="fw-bold mb-2">Need Help?</h5>

                        <p class="small mb-3">
                            Call or WhatsApp our relocation experts now.
                        </p>

                        <div class="d-grid gap-2">
                            <a href="<?= $phonehtml ?>" class="btn btn-light fw-bold">
                                <i class="bi bi-telephone-fill me-2"></i>
                                <?= $phone ?>
                            </a>

                            <a href="https://wa.me/91<?= preg_replace('/\D/', '', $phone) ?>"
                               target="_blank"
                               class="btn btn-success fw-bold">
                                <i class="bi bi-whatsapp me-2"></i>
                                WhatsApp Now
                            </a>

                            <a href="#quote-form" class="btn btn-outline-light fw-bold">
                                Get Free Quote
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .sidebar-services li {
    margin-bottom: 10px;
}

.sidebar-services a {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    color: #333;
    text-decoration: none;
    transition: all 0.25s ease;
}

.sidebar-services a i {
    color: #e31e24;
    font-size: 1.1rem;
}

.sidebar-services a:hover {
    color: #e31e24;
    transform: translateX(4px);
}

</style>
<style>
    /* ===== CITY HERO ===== */
    .city-hero {
        position: relative;
        background:
            linear-gradient(rgba(0, 0, 0, 0.72), rgba(0, 0, 0, 0.72)),
            url("<?= base_url() ?>assets/images/state/<?= $st ?>.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 40px 0;
        color: #fff;
    }

    .city-breadcrumb {
        font-size: 0.85rem;
        margin-bottom: 12px;
    }

    .city-breadcrumb a {
        color: #ffc107;
        text-decoration: none;
    }

    .city-breadcrumb span {
        color: #ddd;
    }

    .city-hero h1 {
        font-size: 2.6rem;
        font-weight: 800;
        line-height: 1.15;
    }

    .city-hero p {
        font-size: 1rem;
        color: #ddd;
        max-width: 620px;
    }

    /* Trust widgets */
    .trust-widgets {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
        margin-top: 28px;
    }

    .trust-widget {
        display: flex;
        align-items: center;
        gap: 10px;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.18);
        padding: 10px 16px;
        border-radius: 50px;
        backdrop-filter: blur(6px);
        font-size: 0.85rem;
        font-weight: 600;
    }

    .trust-widget i {
        color: #ffc107;
        font-size: 1.1rem;
    }

    /* Buttons */
    .hero-actions {
        margin-top: 30px;
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
    }

    .hero-btn {
        padding: 14px 24px;
        border-radius: 50px;
        font-weight: 700;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }

    .hero-btn.call {
        background: #ffffff;
        color: #111;
    }

    .hero-btn.call:hover {
        transform: translateY(-2px);
    }

    .hero-btn.quote {
        background: #e31e24;
        color: #ffffff;
    }

    .hero-btn.quote:hover {
        background: #c1181d;
        transform: translateY(-2px);
    }

    /* Mobile */
    @media (max-width: 768px) {
        .city-hero h1 {
            font-size: 1.9rem;
        }
    }
</style>
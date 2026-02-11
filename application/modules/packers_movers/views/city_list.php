<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<main class="main">

    <!-- BREADCRUMB -->
    <div class="site-breadcrumb state-breadcrumb"
        style="background-image:url(<?= base_url() ?>assets/images/state/<?= $st ?>.jpg)">
        <div class="breadcrumb-overlay"></div>
        <div class="container">
            <h1 class="breadcrumb-title">
                Packers and Movers in <?= $state ?>, India
            </h1>
            <ul class="breadcrumb-menu">
                <li>
                    <a href="<?= site_url() ?>">
                        <i class="bi bi-house-door-fill me-1"></i> Home
                    </a>
                </li>

                <li class="breadcrumb-sep">
                    <i class="bi bi-chevron-right"></i>
                </li>

                <li>
                    <a href="<?= site_url('our-branches') ?>">
                        <i class="bi bi-diagram-3 me-1"></i> Our Branches
                    </a>
                </li>

                <li class="breadcrumb-sep">
                    <i class="bi bi-chevron-right"></i>
                </li>

                <li class="active">
                    <i class="bi bi-geo-alt-fill me-1"></i> <?= $state ?>
                </li>
            </ul>

        </div>
    </div>

    <!-- CITY LIST -->
    <section class="our-service-page">
        <div class="container feature-content-section">

            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h2 class="section-title">
                        Packers and Movers Services in <?= $state ?>
                    </h2>
                    <p class="section-subtitle">
                        Trusted relocation services available across all major cities of <?= $state ?>.
                    </p>
                </div>
            </div>

            <div class="row">
                <?php
                $st = str_replace(" ", "-", $state);
                foreach ($cities as $ct):
                    $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                    $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
                        <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="city-card-link">

                            <div class="city-card city-card-color">

                                <div class="city-icon">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <div class="city-name">
                                    <span>Packers & Movers</span>
                                    <h5><?= $ct['nm'] ?></h5>
                                </div>

                            </div>

                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

</main>
<style>
    .breadcrumb-menu {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-menu li a {
        color: #ffc107;
        font-weight: 500;
        text-decoration: none;
    }

    .breadcrumb-menu li a:hover {
        text-decoration: underline;
    }

    .breadcrumb-menu .breadcrumb-sep {
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.75rem;
    }

    .breadcrumb-menu li.active {
        color: #ffffff;
        font-weight: 600;
    }

    /* ===== BREADCRUMB ===== */
    .state-breadcrumb {
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        padding: 80px 0;
        color: #fff;
    }

    .breadcrumb-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.65);
    }

    .state-breadcrumb .container {
        position: relative;
        z-index: 2;
    }

    .breadcrumb-title {
        font-size: 2.5rem;
        font-weight: 800;
        margin-bottom: 10px;
    }


    /* ===== SECTION ===== */
    .our-service-page {
        background: linear-gradient(135deg, #f8f9fa, #ffffff);
        padding: 70px 0;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 800;
    }

    .section-subtitle {
        color: #6c757d;
        max-width: 650px;
        margin: 8px auto 0;
    }

    /* ===== CITY CARD ===== */
    .city-card-link {
        text-decoration: none;
        display: block;
        height: 100%;
    }

    .city-card {
        border-radius: 16px;
        padding: 22px 20px;
        display: flex;
        align-items: center;
        gap: 16px;
        height: 100%;
        color: #fff;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        transition: all 0.35s ease;
    }

    /* Colorful gradient */
    .city-card-color {
        background: linear-gradient(135deg, #e31e24, #ff9800);
    }

    .city-card:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 22px 45px rgba(0, 0, 0, 0.25);
    }

    /* Icon */
    .city-icon {
        width: 52px;
        height: 52px;
        min-width: 52px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
    }

    /* Text */
    .city-name span {
        font-size: 0.75rem;
        opacity: 0.85;
        letter-spacing: 0.5px;
    }

    .city-name h5 {
        font-size: 1.05rem;
        font-weight: 700;
        margin: 2px 0 0;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .breadcrumb-title {
            font-size: 1.8rem;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .city-card {
            padding: 18px 16px;
        }

        .city-icon {
            width: 44px;
            height: 44px;
            font-size: 1.4rem;
        }
    }
</style>
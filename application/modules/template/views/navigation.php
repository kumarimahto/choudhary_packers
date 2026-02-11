<style>
    :root {
        --primary-red: #E31E24;
        --deep-black: #0B0B0B;
        --royal-gold: #FFD700;
        --soft-gold: #FFC107;
        --glass-bg: rgba(255, 255, 255, 0.98);
        --card-radius: 20px;
    }


    :root {
        --primary-color: #e30b0b;
        --secondary-color: #ff9c00;
        --dark-color: #222222;
        --light-color: #ffffff;
        --gray-color: #6c757d;
        --transition: all 0.3s ease;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow-x: hidden;
        background-color: #f8f9fa;
    }

    .top-nav {
        background-color: var(--dark-color);
        color: white;
        padding: 8px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        width: 100%;
        position: relative;
        /* normal flow */
    }


    .top-nav-container {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-wrap: nowrap;
        gap: 0;
        padding-left: 0;
        width: 100%;
        overflow-x: unset;
        white-space: normal;
    }

    .top-nav-links {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: nowrap;
        width: auto;
    }

    .top-nav-link:first-child {
        margin-left: 24px;
    }

    .top-nav-link {
        color: #ddd;
        text-decoration: none;
        font-size: 0.75rem;
        white-space: nowrap;
        transition: var(--transition);
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: nowrap;
        width: auto;
        flex: 1 1 auto;
    }

    .top-nav-link:hover {
        color: #fff;
        background: rgba(255, 156, 0, 0.12);
        box-shadow: 0 2px 8px rgba(255, 156, 0, 0.18);
        transform: scale(1.08);
    }

    .top-nav-link i {
        font-size: 0.95rem;
        transition: color 0.2s, transform 0.2s;
        color: #ff9c00;
    }

    .top-nav-link:hover i {
        color: #fff;
        transform: scale(1.2) rotate(-10deg);
    }

    .top-nav-contact {
        display: flex;
        align-items: center;
        gap: 8px;
        min-width: 0;
    }

    .top-nav-phone {
        flex-shrink: 0;
        width: 120px;
        min-width: 120px;
        display: inline-flex;
        white-space: normal;
        color: var(--secondary-color);
        font-weight: 600;
        text-decoration: none;
        font-size: 0.75rem;
        font-size: 0.95rem !important;
        white-space: nowrap;
        margin-left: 8px;
        min-width: unset;
        overflow: visible;
        text-overflow: unset;
        display: flex;
        align-items: center;
        gap: 7px;
        background: none;
        padding: 0 10px;
        border-radius: 0;
        box-shadow: none;
        transition: color 0.2s;
    }

    .top-nav-phone:hover {
        color: #fff;
    }

    .main-nav {
        background-color: white;
        padding: 12px 0;
        position: sticky;
        top: 0;
        z-index: 1060;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
        transition: var(--transition);
    }


    .main-nav.sticky {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(0);
        }
    }

    .main-nav-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Logo Section */
    .logo-section {
        display: flex;
        align-items: center;
        gap: 10px;
        flex: 0 1 auto;
        min-width: 0;
    }

    .company-logo {
        display: flex;
        align-items: center;
        text-decoration: none;
        gap: 10px;
    }

    .company-logo img {
        height: 70px;
        max-height: 56px;
        width: auto;
        display: block;
        object-fit: contain;
    }

    .logo-icon {
        font-size: 0.75rem;
        flex-shrink: 0;
        flex-grow: 1;
        width: auto;
        min-width: 120px;
        display: inline-flex;
        white-space: nowrap;
        flex-direction: column;
    }

    .logo-main {
        font-size: 1.6rem;
        font-weight: 800;
        color: var(--dark-color);
        line-height: 1.2;
    }

    .logo-sub {
        font-size: 0.85rem;
        color: var(--gray-color);
        font-weight: 500;
    }

    .logo-highlight {
        color: var(--primary-color);
    }

    /* Center Navigation Links */
    .main-nav-center {
        display: flex;
        justify-content: center;
        flex: 1;
    }

    .main-nav-links {
        display: flex;
        gap: 36px;
        align-items: center;
    }

    .main-nav-links a {
        color: var(--primary-color) !important;
        text-decoration: none !important;
        padding: 6px 12px;
        border-radius: 6px;
        transition: background 0.25s ease, color 0.25s ease, transform 0.15s ease;
        font-weight: 600;
        font-size: 0.95rem;
    }

    .main-nav-links a:hover {
        background: var(--primary-color);
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(227, 11, 11, 0.18);
    }

    /* Right Section */
    .main-nav-right {
        display: flex;
        align-items: center;
        gap: 16px;
        flex: 0 0 auto;
    }

    .main-nav-contact {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .main-phone {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
    }

    .phone-label {
        font-size: 0.8rem;
        color: var(--gray-color);
        margin-bottom: 2px;
    }

    .phone-number {
        font-size: 1.02rem;
        font-weight: 700;
        color: var(--primary-color);
        text-decoration: none;
        transition: var(--transition);
        white-space: nowrap;
    }

    .phone-number:hover {
        color: #c50909;
    }

    .phone-icon {
        width: 36px;
        height: 36px;
        background-color: rgba(227, 11, 11, 0.06);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 1.05rem;
    }

    .menu-toggle-btn {
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 4px;
        padding: 9px 16px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition);
        cursor: pointer;
    }

    .menu-toggle-btn:hover {
        background-color: #c50909;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(227, 11, 11, 0.2);
    }

    /* Navigation Overlay */
    .nav-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
    }

    .nav-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .nav-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 30px;
        border-bottom: 1px solid #eee;
        background-color: white;
    }

    .nav-logo {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .nav-logo-text {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark-color);
    }

    .nav-logo-highlight {
        color: var(--primary-color);
    }

    .close-nav {
        background: none;
        border: none;
        font-size: 2.2rem;
        color: var(--dark-color);
        cursor: pointer;
        transition: var(--transition);
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .close-nav:hover {
        background-color: #f8f9fa;
        color: var(--primary-color);
        transform: rotate(90deg);
    }

    .nav-content {
        flex: 1;
        overflow-y: auto;
        padding: 30px;
    }

    .nav-grid {
        display: flex !important;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        gap: 0;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
    }

    @media (max-width: 1200px) {
        .nav-grid {
            flex-direction: column;
            align-items: stretch;
        }
    }

    @media (max-width: 768px) {
        .nav-grid {
            grid-template-columns: 1fr;
        }
    }

    .nav-column {
        flex: 1 1 0;
        min-width: 320px;
        max-width: 400px;
        padding: 0 10px 30px 10px;
        box-sizing: border-box;
    }

    .nav-title {
        color: var(--primary-color);
        font-size: 1.4rem;
        font-weight: 700;
        color: #e30b0b;
        border-bottom: 2px solid #f2bcbc;
        margin-bottom: 18px;
        padding-bottom: 6px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .nav-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-links li {
        margin-bottom: 14px;
    }

    .nav-links a {
        color: #222;
        text-decoration: none;
        font-size: 1.08rem;
        font-weight: 500;
        transition: color 0.2s;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .nav-links a:hover {
        color: var(--primary-color);
    }

    .nav-icon {
        font-size: 1.2rem;
        color: #ff9800;
        min-width: 22px;
        text-align: center;
    }

    .nav-links a:hover .nav-icon {
        color: var(--primary-color);
        transform: scale(1.1);
    }

    .nav-footer {
        background-color: #f8f9fa;
        padding: 25px 30px;
        border-top: 1px solid #eee;
    }

    .nav-footer-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav-contact {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .nav-contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .nav-contact-icon {
        color: var(--primary-color);
        font-size: 1.2rem;
    }

    .nav-contact-text {
        font-weight: 600;
        color: var(--dark-color);
    }

    .nav-actions {
        display: flex;
        gap: 15px;
    }

    .nav-action-btn {
        padding: 10px 20px;
        border-radius: 4px;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: var(--transition);
    }

    .nav-action-btn.primary {
        background-color: var(--primary-color);
        color: white;
    }

    .nav-action-btn.secondary {
        background-color: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
    }

    .nav-action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .nav-action-btn.primary:hover {
        background-color: #c50909;
    }

    .nav-action-btn.secondary:hover {
        background-color: var(--primary-color);
        color: white;
    }

    /* RESPONSIVE STYLES */
    @media (max-width: 1200px) {
        .main-nav-links {
            gap: 24px;
        }

        .main-nav-links a {
            font-size: 0.9rem;
            padding: 6px 10px;
        }
    }

    @media (max-width: 992px) {
        .main-nav-center {
            display: none;
        }



        .main-nav-container {
            justify-content: space-between;
        }

        .top-nav-links {
            display: none;
        }

        .top-nav-contact {
            width: 100%;
            justify-content: center;
        }

        .top-nav-phone {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .main-nav {
            padding: 10px 0;
        }

        .company-logo img {
            height: 55px;
        }

        .menu-toggle-btn {
            padding: 8px 14px;
            font-size: 0.9rem;
        }

        .nav-footer-content {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }

        .nav-contact {
            flex-direction: column;
            gap: 15px;
        }

        .nav-actions {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {


        .top-nav {
            padding: 6px 0;
        }

        .main-nav {
            padding: 8px 0;
        }

        .company-logo img {
            height: 55px;
        }

        .menu-toggle-btn {
            padding: 7px 12px;
            font-size: 0.85rem;
        }

        .top-nav-phone {
            font-size: 0.9rem;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .nav-column {
        animation: fadeInUp 0.5s ease forwards;
        opacity: 0;
    }

    .nav-column:nth-child(1) {
        animation-delay: 0.1s;
    }

    .nav-column:nth-child(2) {
        animation-delay: 0.2s;
    }

    .nav-column:nth-child(3) {
        animation-delay: 0.3s;
    }
</style>

<body>
    <!-- TOP NAVIGATION (FIXED AT VERY TOP - BLACK BAR) -->
    <nav class="top-nav">
        <div class="container">
            <div class="top-nav-container">
                <div class="top-nav-links" style="flex:1;">
                    <a href="#" class="top-nav-link"><i class="bi bi-credit-card"></i> Online Payment</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-headset"></i> Customer Care</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-truck"></i> Shifting Process</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-cube"></i> Trucking Cube</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-heart"></i> CSR</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-question-circle"></i> FAQs</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-exclamation-triangle"></i> Beware of Fake</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-stars"></i> Our USP's</a>
                    <a href="#" class="top-nav-link"><i class="bi bi-globe"></i> Worldwide Presence</a>
                </div>
                <div class="top-nav-contact">
                    <a href="<?= $phonehtml ?>" class="top-nav-phone"><i class="bi bi-telephone-fill"></i>
                        <?= $phone ?></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN NAVIGATION (STICKY WHITE BAR WITH LOGO) -->
    <nav class="main-nav" id="mainNav">
        <div class="container">
            <div class="main-nav-container">

                <!-- Logo Section -->
                <div class="logo-section">
                    <a href="<?= site_url() ?>" class="company-logo">
                        <img src="<?= base_url('assets/images/logo/packerslogo.png') ?>" alt="Packers Logo">
                    </a>
                </div>
                <a href="<?= site_url('our-branches') ?>" class="btn btn-danger btn-sm d-flex align-items-center gap-1 d-lg-none">
                    <i class="bi bi-geo-alt-fill"></i>
                    Find Your Location
                </a>
                <!-- CENTER NAV BUTTONS (DESKTOP ONLY) -->
                <div class="d-none d-lg-flex align-items-center gap-3">

                    <a href="<?= site_url('') ?>"
                        class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-1">
                        <i class="bi bi-truck"></i>
                        Track Your Shipment
                    </a>

                    <a href="<?= site_url('our-branches') ?>" 
                        class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                        <i class="bi bi-geo-alt-fill"></i>
                        Find Your Location
                    </a>

                </div>


                <!-- RIGHT SECTION -->
                <div class="main-nav-right">
                    <div class="main-nav-contact d-none d-lg-flex">
                        <div class="phone-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="main-phone">
                            <div class="phone-label">24/7 Support</div>
                            <a href="<?= $phonehtml ?>" class="phone-number"><?= $phone ?></a>
                        </div>
                    </div>

                    <button class="menu-toggle-btn" id="openNav">
                        <i class="bi bi-list"></i>
                    </button>
                </div>

            </div>
        </div>
    </nav>


    <!-- FULL SCREEN NAVIGATION OVERLAY -->
    <div class="nav-overlay" id="navOverlay">
        <!-- Navigation Header -->
        <div class="nav-header">
            <div class="nav-logo">
                <a href="<?= site_url() ?>" class="company-logo">
                    <img src="<?= base_url('assets/images/logo/packerslogo.png') ?>" alt="Packers Logo">
                </a>
            </div>

            <button class="close-nav" id="closeNav">
                <i class="bi bi-x"></i>
            </button>
        </div>

        <!-- Navigation Content -->
        <div class="nav-content">
            <div class="nav-grid">
                <!-- Column 1: For Consumers -->
                <div class="nav-column">
                    <h3 class="nav-title"><i class="bi bi-people-fill"></i> Comapny</h3>
                    <ul class="nav-links">
                        <li><a href="<?= site_url() ?>"><i class="bi bi-house-door nav-icon"></i> Home</a></li>
                        <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-person-circle nav-icon"></i> About
                                Us</a></li>
                        <li><a href="<?= site_url('gallery') ?>"><i class="bi bi-images nav-icon"></i> Gallery</a></li>
                        <li><a href="<?= site_url('contact') ?>"><i class="bi bi-envelope nav-icon"></i> Contact</a>
                        </li>
                        <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-diagram-3 nav-icon"></i> Privacy
                                policy</a></li>
                        <li><a href="<?= site_url('refund-cancellation-policy') ?>"><i
                                    class="bi bi-arrow-repeat nav-icon"></i> Refund &amp; Cancellation</a></li>
                        <li><a href="<?= site_url('terms-and-conditions') ?>"><i
                                    class="bi bi-file-earmark-text nav-icon"></i> Terms &amp; Conditions</a></li>
                    </ul>
                </div>



                <!-- Column 3: Our Services -->
                <div class="nav-column">
                    <h3 class="nav-title" style="color:#e30b0b !important;">
                        <a href="<?= site_url('services') ?>" style="color:#e30b0b !important;"
                            <?= ($this->uri->segment(1) == 'services') ? 'class="active-service"' : '' ?>>
                            Our Services<i class="bi bi-caret-down-fill"></i>
                        </a>
                    </h3>
                    <ul class="nav-links">
                        <li><a href="<?= site_url('packing-and-moving') ?>"
                                <?= ($this->uri->segment(1) == 'packing-and-moving' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'packing-and-moving')) ? 'class="active-service"' : '' ?>><i
                                    class="bi bi-box-seam nav-icon me-2"></i>Packing and Moving</a></li>
                        <li><a href="<?= site_url('transportation') ?>" <?= ($this->uri->segment(1) == 'transportation' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'transportation')) ? 'class="active-service"' : '' ?>><i
                                    class="bi bi-truck nav-icon me-2"></i>Transportation</a></li>
                        <li><a href="<?= site_url('local-shifting') ?>" <?= ($this->uri->segment(1) == 'local-shifting' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'local-shifting')) ? 'class="active-service"' : '' ?>><i class="bi bi-geo-alt nav-icon me-2"></i>Local
                                Shifting</a></li>
                        <li><a href="<?= site_url('home-relocation') ?>" <?= ($this->uri->segment(1) == 'home-relocation' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'home-relocation')) ? 'class="active-service"' : '' ?>><i class="bi bi-house-door nav-icon me-2"></i>Home
                                Relocation</a></li>
                        <li><a href="<?= site_url('commercial-shifting') ?>"
                                <?= ($this->uri->segment(1) == 'commercial-shifting' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'commercial-shifting')) ? 'class="active-service"' : '' ?>><i
                                    class="bi bi-building nav-icon me-2"></i>Commercial Shifting</a></li>
                        <li><a href="<?= site_url('car-carrier') ?>" <?= ($this->uri->segment(1) == 'car-carrier' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'car-carrier')) ? 'class="active-service"' : '' ?>><i class="bi bi-truck nav-icon me-2"></i>Car
                                Carrier</a></li>
                        <li><a href="<?= site_url('loading-and-unloading') ?>"
                                <?= ($this->uri->segment(1) == 'loading-and-unloading' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'loading-and-unloading')) ? 'class="active-service"' : '' ?>><i class="bi bi-people nav-icon me-2"></i>Loading
                                &amp; Unloading</a></li>
                        <li><a href="<?= site_url('warehouse-services') ?>"
                                <?= ($this->uri->segment(1) == 'warehouse-services' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'warehouse-services')) ? 'class="active-service"' : '' ?>><i
                                    class="bi bi-archive nav-icon me-2"></i>Warehouse Services</a></li>
                        <li><a href="<?= site_url('insurance-services') ?>"
                                <?= ($this->uri->segment(1) == 'insurance-services' || ($this->uri->segment(1) == 'services' && $this->uri->segment(2) == 'insurance-services')) ? 'class="active-service"' : '' ?>><i
                                    class="bi bi-shield-check nav-icon me-2"></i>Insurance Services</a></li>

                        <li><a href="<?= site_url('our-branches') ?>">
                                <i class="bi bi-shield-check nav-icon me-2"></i>All India Services</a></li>

                    </ul>
                </div>

                <!-- Column 2: Activities -->
                <div class="nav-column">
                    <h3 class="nav-title" style="color:#e30b0b !important;"><i class="bi bi-activity"></i> Activities
                    </h3>
                    <ul class="nav-links">
                        <li><a href="<?= site_url('payment-details') ?>"><i class="bi bi-credit-card nav-icon"></i>Payment Details</a></li>
                    <li><a href="<?= site_url('home') ?>"><i class="bi bi-truck nav-icon"></i> Track Your Shipment</a></li>  
                      <li><a href="<?=site_url('partner') ?>"><i class="bi bi-people-fill nav-icon"></i>Become a Partner</a></li>
                        <li><a href="<?= site_url('moving-tips') ?>"><i class="bi bi-lightbulb nav-icon"></i>Moving Tips and Suggestions</a></li>
                        <li><a href="<?= site_url('detect-fraud') ?>"><i class="bi bi-shield-exclamation nav-icon"></i>Detect Fraud Packers Tips</a>
                        </li>
                        <li><a href="<?= site_url('shipment-gallery') ?>"><i class="bi bi-images nav-icon"></i>Shipment Gallery</a></li>
                        <li><a href="<?= site_url('video-gallery') ?>"><i class="bi bi-camera-video nav-icon"></i>Video Gallery</a></li>
                        <li><a href="<?= site_url('reviews') ?>"><i class="bi bi-star-fill nav-icon"></i>Reviews & Feedbacks</a></li>
                        <li><a href="<?=site_url('submit') ?>"><i class="bi bi-exclamation-circle nav-icon"></i>Submit a Complaint</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Navigation Footer -->
        <div class="nav-footer">
            <div class="nav-footer-content">
                <div class="nav-contact">
                    <div class="nav-contact-item">
                        <i class="bi bi-telephone nav-contact-icon"></i>
                        <div class="nav-contact-text"><?= $phone ?></div>
                    </div>
                    <div class="nav-contact-item">
                        <i class="bi bi-envelope nav-contact-icon"></i>
                        <div class="nav-contact-text"><?= $mail ?></div>
                    </div>
                    <div class="nav-contact-item">
                        <i class="bi bi-clock nav-contact-icon"></i>
                        <div class="nav-contact-text">24/7 Service</div>
                    </div>
                </div>

                <div class="nav-actions">
                    <a href="<?= site_url('contact') ?>" class="nav-action-btn primary">
                        <i class="bi bi-chat-dots"></i> Get Quote
                    </a>
                    <a href="#" class="nav-action-btn secondary">
                        <i class="bi bi-telephone"></i> Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
        
   <!-- Call Button (Fixed Left) -->
<div class="fab-wrapper fab-call position-fixed start-0 mb-2 ms-2">
    <a aria-label="Call" title="Call Us Now" href="tel:<?= @str_replace(' ', '', $phone) ?>"
        class="d-flex align-items-center text-decoration-none">
        <i class="bi bi-telephone-fill me-2 fab-icon" style="animation: phoneFlip 3s infinite ease-in-out;"></i>
        <span class="fab-text">Call Us Now!</span>
    </a>
</div>

<!-- WhatsApp Button (Fixed Left) -->
<div class="fab-wrapper fab-whatsapp position-fixed start-0 mb-1 ms-2">
    <a aria-label="WhatsApp" title="Instant Quote – Just 30 Mins!"
        href="https://api.whatsapp.com/send?phone=+<?= @str_replace(' ', '', $phone) ?>&text=Hello+sir,+I+am+interested+in+one+of+your+services"
        target="_blank" class="d-flex align-items-center text-decoration-none">
        <i class="bi bi-whatsapp me-2 fab-icon"></i>
        <span class="fab-text">Get Cost in Just 25 Mins!</span>
    </a>
</div>

<style>
    /* Base FAB wrapper */
.fab-wrapper {
  position: fixed;
  left: 12px;
  z-index: 999999;
}

/* Shared button style (same on mobile & desktop) */
.fab-wrapper a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
    padding: 11px 10px;
  /* minimum height */
  border-radius: 22px;
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  color: #fff;
  line-height: 1;
  /* IMPORTANT FIX */
  box-shadow: 0 8px 22px rgba(0, 0, 0, 0.22);
  transition: all 0.3s ease;
}

/* ICON FIX (THIS SOLVES IT) */
.fab-icon {
  font-size: 16px;
  line-height: 1;
  /* IMPORTANT */
  display: inline-flex;
  align-items: center;
  justify-content: center;
  vertical-align: middle;
   transition: all 0.3s ease;
   
  /* IMPORTANT */
}

/* Call button */
.fab-call {
  bottom: 90px;
}

.fab-call a {
  background: linear-gradient(135deg, #dc3545, #b02a37);
  
}

/* WhatsApp button */
.fab-whatsapp {
  bottom: 35px;
}

.fab-whatsapp a {
  background: linear-gradient(135deg, #25d366, #128c7e);
}

/* Subtle hover */
.fab-wrapper a:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 30px rgba(0, 0, 0, 0.3);
}
/* Flip Animation */
@keyframes phoneFlip {
  0%   { transform: rotateY(0deg); }
  20%  { transform: rotateY(180deg); }
  40%  { transform: rotateY(360deg); }
  100% { transform: rotateY(360deg); }
}

</style>
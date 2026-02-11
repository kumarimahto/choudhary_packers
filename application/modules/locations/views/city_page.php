

<!-- FontAwesome & Google Fonts for Modern Feel -->

<style>
    :root {
        --primary-red: #e63946;
        --secondary-yellow: #ffcc00;
        --dark-black: #1a1a1a;
        --pure-white: #ffffff;
        --light-bg: #f4f7fa;
        --text-dark: #2d3436;
        --glass-white: rgba(255, 255, 255, 0.95);
    }

    /* Modern Hero with Layered Depth */
    .hero-section {
        background: linear-gradient(135deg, rgba(231, 32, 48, 0.9) 0%, rgba(189, 65, 65, 0.95) 100%), 
                    url('https://images.unsplash.com/photo-1574007557239-acf6863bc375?auto=format&fit=crop&w=1600&q=80');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
        padding: 100px 0 140px 0;
        text-align: center;
        position: relative;
        clip-path: ellipse(150% 100% at 50% 0%);
    }

    .hero-section h1 {
        font-size: clamp(2rem, 5vw, 3.2rem);
        font-weight: 800;
        letter-spacing: -1px;
        text-shadow: 0 4px 10px rgba(0,0,0,0.3);
    }

    /* Floating Breadcrumb */
    .hero-breadcrumb {
        display: inline-flex;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 10px 30px;
        border-radius: 100px;
        list-style: none;
        margin-top: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .hero-breadcrumb li a {
        color: #fff;
        font-weight: 500;
        transition: 0.3s;
    }

    .hero-breadcrumb li.active {
        color: var(--secondary-yellow);
    }

    .hero-breadcrumb li:not(:last-child)::after {
        content: '\f0da';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        margin: 0 15px;
        opacity: 0.5;
    }

    /* Main Content Container */
    .content-wrapper {
        margin-top: -80px;
        position: relative;
        z-index: 100;
    }

    .main-card {
        background: var(--glass-white);
        border-radius: 30px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        border: 1px solid rgba(255,255,255,0.3);
    }

    /* Side Accent for Modern Look */
    .service-info-header {
        border-bottom: 2px solid #f0f0f0;
        padding: 60px 50px 40px;
    }

    .section-title {
        color: var(--primary-black);
        font-weight: 800;
        position: relative;
        display: inline-block;
    }

    .section-title::before {
        content: "";
        position: absolute;
        width: 40px;
        height: 4px;
        background: var(--secondary-yellow);
        bottom: -10px;
        border-radius: 10px;
    }

    /* Animated Feature Cards */
    .feature-box {
        background: #fff;
        padding: 30px 20px;
        border-radius: 20px;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid #f0f0f0;
        height: 100%;
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        border-color: var(--primary-red);
    }

    .feature-icon-wrapper {
        width: 70px;
        height: 70px;
        background: rgba(230, 57, 70, 0.1);
        color: var(--primary-red);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 1.8rem;
        transition: 0.3s;
    }

    .feature-box:hover .feature-icon-wrapper {
        background: var(--primary-red);
        color: white;
    }

    /* Modern Text Layouts */
    .description-text {
        font-size: 1.1rem;
        line-height: 1.9;
        color: #555;
    }

    .quote-block {
        background: linear-gradient(to right, #fff5f5, #fff);
        border-left: 6px solid var(--primary-red);
        padding: 30px;
        border-radius: 0 20px 20px 0;
        margin: 40px 0;
    }

    /* Shifting Process Steps */
    .process-step {
        text-align: left;
        padding-left: 40px;
        position: relative;
        margin-bottom: 30px;
    }

    .process-step::before {
        content: "\f058";
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 0;
        color: var(--primary-red);
        font-size: 1.4rem;
    }

    .cta-container {
        background: var(--dark-black);
        color: white;
        padding: 35px 20px; 
        text-align: center;
        border-radius: 20px;
        margin-top: 50px;
        width: 100%; 
        border-bottom: 5px solid var(--primary-red);
    }

    .btn-ultra {
        background: var(--primary-red);
        color: white !important;
        padding: 12px 40px;
        border-radius: 50px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: 0.4s;
        box-shadow: 0 10px 20px rgba(230, 57, 70, 0.4);
        border: 2px solid var(--secondary-yellow);
        display: inline-block;
    }

    .btn-ultra:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(230, 57, 70, 0.5);
        background: #c12e3a;
        color: var(--secondary-yellow) !important;
    }

    @media (max-width: 768px) {
        .hero-section { padding: 80px 0 100px 0; }
        .main-card { border-radius: 0; }
        .service-info-header { padding: 40px 20px; }
        .cta-container { padding: 30px 15px; }
    }
</style>

<header class="hero-section">
    <div class="container">
        <h1 class="animate__animated animate__fadeInUp">Best Packers and Movers in <span style="color: var(--secondary-yellow);"><?= $cityName ?></span></h1>
        
        <ul class="hero-breadcrumb animate__animated animate__fadeInUp animate__delay-1s">
            <li><a href="<?= base_url(); ?>"><i class="fas fa-house-chimney"></i> Home</a></li>
            <li><a href="<?= site_url('locations'); ?>">Locations</a></li>
            <li class="active"><?= $cityName ?></li>
        </ul>
    </div>
</header>

<div class="container content-wrapper mb-5">
    <div class="row">
        <div class="col-lg-11 mx-auto">
            
            <div class="main-card">
                <!-- Header Section -->
                <div class="service-info-header text-center">
                    <h2 class="section-title">Experience Excellence in Shifting</h2>
                    <p class="description-text mt-4">
                        When you hire us, you can expect world-class relocation standards in terms of shifting and packing services. We house a specialized team of logistics experts who manage the entire lifecycle of your move seamlessly. From the initial survey to the final placement, <strong>Packers and Movers <?= $cityName ?></strong> handles every challenge with precision.
                    </p>
                </div>

                <div class="p-5">
                    <!-- Modern Feature Grid -->
                    <div class="row mb-5">
                        <div class="col-md-4 mb-4">
                            <div class="feature-box text-center">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-box-open"></i>
                                </div>
                                <h5 class="font-weight-bold">Premium Packing</h5>
                                <p class="small text-muted mb-0">Multi-layer protective wrapping for fragile items.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="feature-box text-center">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-truck-fast"></i>
                                </div>
                                <h5 class="font-weight-bold">GPS-Enabled Transport</h5>
                                <p class="small text-muted mb-0">Real-time tracking of your precious belongings.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="feature-box text-center">
                                <div class="feature-icon-wrapper">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <h5 class="font-weight-bold">Zero-Damage Policy</h5>
                                <p class="small text-muted mb-0">Total safety assurance with insured transit.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Information Split Section -->
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="quote-block">
                                <p class="mb-0 font-italic text-dark">
                                    "Our vast network across India transforms stressful relocations into comfortable experiences. We specialize in household goods, industrial shifting, air cargo, and long-term storage solutions."
                                </p>
                            </div>
                            <p class="description-text">
                                We provide a comprehensive suite of relocation solutions under one roof. Whether it's arranging, unloading, or rearranging your materials in a new location, our expertise ensures a hassle-free transition across any city in India.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <div class="p-4 rounded-lg shadow-sm" style="background: #fdfdfd; border: 1px dashed #ddd;">
                                <h6 class="font-weight-bold text-uppercase mb-3" style="letter-spacing: 1px; color: var(--primary-red);">Our Process</h6>
                                <div class="process-step">
                                    <strong>Inventory Check</strong>
                                    <p class="small text-muted">Detailed listing of all items.</p>
                                </div>
                                <div class="process-step">
                                    <strong>Safe Loading</strong>
                                    <p class="small text-muted">Using modern cranes and ramps.</p>
                                </div>
                                <div class="process-step">
                                    <strong>Timely Delivery</strong>
                                    <p class="small text-muted">Strict adherence to schedules.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Description -->
                    <div class="mt-5 p-4 rounded" style="background-color: #fef2f2; border-right: 8px solid var(--primary-red);">
                        <p class="description-text mb-0">
                            Our team is dedicated to providing absolute assistance. We utilize specialized travel vans and high-grade packing materials to ensure your vehicles and household items are carried safely to their destination. Our pricing model is designed to meet your budgetary expectations without compromising on the luxury of service.
                        </p>
                    </div>

                    <div class="mt-5">
                        <p class="description-text text-center">
                            Efficiency and quality are the pillars of our service. We offer dedicated care for oversized goods and high-value items, ensuring they receive the specialized handling they require.
                        </p>
                    </div>

                    <div class="cta-container shadow-lg">
                        <h4 class="font-weight-bold mb-2">Ready for a Stress-Free Move?</h4>
                        <p class="mb-3 small opacity-75">Join 10,000+ happy families who moved with us this year.</p>
                        <a href="<?=site_url('contact')?>" class="btn btn-ultra">
                            <i class="fas fa-phone-volume mr-2"></i> Get Your Free Quote
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


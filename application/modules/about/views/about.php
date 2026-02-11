<main class="main about-page">
    <div class="hero-slider-section position-relative">
        <div id="aboutHeroSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 420px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-3 fw-bold mb-3" data-aos="fade-down" data-aos-duration="900" style="margin-top:-18px; z-index:4; position:relative;">About <span style="color: #ff9c00;">Our Journey</span></h1>
                        
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-hero py-5 position-relative overflow-hidden" data-aos="fade-up" data-aos-duration="800">
        <div class="container position-relative">
            <div class="row align-items-center">
                <!-- Content Side -->
                <div class="col-lg-7 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="800" data-aos-delay="50">
                    <span class="badge bg-danger mb-3 px-3 py-2 text-uppercase letter-spacing-1">Premium Moving Services</span>
                    <h2 class="display-5 mb-4 fw-bold text-dark">Who is <span style="color: #ff0000;">Choudhary Packers?</span></h2>
                    
                    <p class="lead text-dark fw-semibold" style="font-size:1.15rem; line-height:1.8;">
                        Choudhary Packers & Movers is an Indian based relocation enterprise well known for high-quality services, careful handling and professional standards. 
                    </p>
                    <p class="text-muted" style="font-size:1rem; line-height:1.7;">
                        With years of hands-on experience, our team masters packing and moving operations, using industry-grade materials and proven procedures to protect your belongings. From local shifts to long-distance relocations, we manage every phase—packing, loading, transport, and delivery—with a singular focus on 100% safety.
                    </p>

                    <!-- AIM & STRATEGY BOXES -->
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-danger bg-white shadow-sm h-100" data-aos="fade-up" data-aos-duration="700">
                                <h5 class="fw-bold text-dark mb-2"><i class="bi bi-bullseye text-danger me-2"></i>OUR AIM</h5>
                                <p class="small text-muted mb-0">Hassle-free relocation at reasonable prices. Customer satisfaction with safe and secure delivery is our main goal.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 border-start border-4 border-warning bg-white shadow-sm h-100" data-aos="fade-up" data-aos-duration="700" data-aos-delay="120">
                                <h5 class="fw-bold text-dark mb-2"><i class="bi bi-gear-wide-connected text-warning me-2"></i>OUR STRATEGY</h5>
                                <p class="small text-muted mb-0">Simple & Transparent: Professional survey, accurate estimation, and execution with a surety of safety.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="col-lg-5 order-1 order-lg-2 mb-5 mb-lg-0" data-aos="fade-up" data-aos-duration="900" data-aos-delay="150">
                    <div class="about-image-stack position-relative ms-lg-4">
                        <div class="main-img-container shadow-lg rounded-4 overflow-hidden border-5 border-white border" data-aos="zoom-in" data-aos-duration="900">
                            <img src="<?= base_url('assets/images/logo/packerslogo.png') ?>" alt="About Choudhary Packers" class="img-fluid" style="min-height:400px; width:100%; object-fit:cover;">
                        </div>
                        <div class="exp-badge bg-white text-dark p-4 rounded-4 shadow-lg position-absolute bottom-0 start-0 translate-middle-y ms-n4 border-bottom border-4 border-warning" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                            <h2 class="display-6 fw-bold mb-0 text-danger">10+</h2>
                            <p class="small mb-0 fw-bold">Years of<br>Excellence</p>
                        </div>
                        <div class="position-absolute top-0 end-0 mt-n3 me-n3 w-50 h-50 border border-danger border-5 rounded-4 d-none d-md-block" style="z-index: -1;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("choose.php"); ?>

    <section class="working-process py-5 position-relative bg-white overflow-hidden">
        <div class="container py-4">
            <div class="text-center mb-5" data-aos="fade-down">
                <h2 class="display-5 fw-bold text-dark mb-2">Our <span style="color: #ff0000;">5-Step</span> Working Process</h2>
                <p class="text-muted fw-semibold">Stress-free relocation in 5 simple steps</p>
            </div>

            <div class="process-timeline-container position-relative py-5">
                <div class="timeline-main-line d-none d-lg-block"></div>
                
                <div class="row g-0 justify-content-between text-center position-relative" style="z-index: 2;">
                    <!-- Step 1 -->
                    <div class="col-lg-2 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-item">
                            <div class="step-icon bg-danger text-white mb-4 mx-auto shadow">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Free Survey</h6>
                            <p class="x-small text-muted mb-0">Site visit & accurate quote</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-2 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-item">
                            <div class="step-icon bg-danger text-white mb-4 mx-auto shadow">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Professional Packing</h6>
                            <p class="x-small text-muted mb-0">Premium packing materials</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-2 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-item">
                            <div class="step-icon bg-danger text-white mb-4 mx-auto shadow">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Safe Loading</h6>
                            <p class="x-small text-muted mb-0">Trained team & equipment</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-2 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-item">
                            <div class="step-icon bg-danger text-white mb-4 mx-auto shadow">
                                <i class="bi bi-pin-map"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">GPS Transport</h6>
                            <p class="x-small text-muted mb-0">Live tracking delivery</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="col-lg-2" data-aos="fade-up" data-aos-delay="500">
                        <div class="step-item">
                            <div class="step-icon bg-danger text-white mb-4 mx-auto shadow">
                                <!-- Fixed Icon Visibility for Step 5 -->
                                <i class="bi bi-house-door-fill" style="position: relative; z-index: 10;"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-1">Unpacking & Setup</h6>
                            <p class="x-small text-muted mb-0">Careful setup at destination</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
    /* Working Process Specific Styling */
    .timeline-main-line {
        position: absolute;
        top: 85px;
        left: 5%;
        right: 5%;
        height: 2px;
        background: #000000; /* Black Line */
        z-index: 1; /* Behind icons */
    }
    .step-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        position: relative;
        z-index: 3; 
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .x-small { font-size: 0.8rem; }

    .hero-slider-section .carousel-item {
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?= base_url('assets/images/about/about_us.jpg') ?>');
        background-position: center; background-size: cover; background-attachment: fixed;
    }
    .about-page { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #fff; }
    .breadcrumb-item + .breadcrumb-item::before { content: ">"; color: #fff; padding: 0 10px; }

    @media (max-width: 991px) {
        .timeline-main-line { display: none; }
        .step-icon { margin-bottom: 15px; }
    }
    </style>
</main>
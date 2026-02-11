<main class="main services-page">
    <!-- Hero Slider / Breadcrumb Section -->
    <section class="services-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('<?= base_url() ?>assets/images/service/services.jpg') center/cover no-repeat fixed; height: 350px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-4 fw-800 mb-2" data-aos="fade-down" data-aos-duration="1000">Our <span style="color: #ffcc00;">Services</span></h1>
                        
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEW MODERN SECTION: Quick Stats & Highlights -->
    <section class="quick-highlights py-5 mt-n5 position-relative z-3">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="highlights-wrapper bg-white shadow-lg p-4 p-md-5 rounded-5" data-aos="fade-up">
                        <div class="row align-items-center g-4">
                            <div class="col-md-3 text-center border-end-md">
                                <div class="highlight-item">
                                    <h3 class="fw-800 text-danger mb-0">25K+</h3>
                                    <p class="text-muted small fw-bold text-uppercase mb-0">Safe Deliveries</p>
                                </div>
                            </div>
                            <div class="col-md-3 text-center border-end-md">
                                <div class="highlight-item">
                                    <h3 class="fw-800 text-danger mb-0">100%</h3>
                                    <p class="text-muted small fw-bold text-uppercase mb-0">Insurance Cover</p>
                                </div>
                            </div>
                            <div class="col-md-3 text-center border-end-md">
                                <div class="highlight-item">
                                    <h3 class="fw-800 text-danger mb-0">50+</h3>
                                    <p class="text-muted small fw-bold text-uppercase mb-0">Active Cities</p>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="highlight-item">
                                    <div class="d-flex align-items-center justify-content-center gap-2">
                                        <i class="bi bi-shield-check-fill text-success fs-3"></i>
                                        <span class="fw-800 text-dark">ISO Certified</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid px-l py-5">
        <!-- Intro Section -->
        <div class="row mb-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-8 text-center">
                <div class="badge-modern mb-3">Expertise in Motion</div>
                <h2 class="display-5 fw-800 text-dark mb-4">Focused Moving <span class="text-danger-gradient">Solutions</span></h2>
                <div class="divider-modern mx-auto mb-4"></div>
                <p class="lead text-secondary px-l">
                    Choudhary Packers and Movers Jabalpur: Your Reliable Shifting Partner. We specialize in delivering efficient and affordable shifting services in Jabalpur and surrounding districts.
                </p>
            </div>
        </div>

        <?php
        $services = array(
            array('slug' => 'packing-and-moving', 'title' => 'Packing and Moving', 'icon' => 'bi-box-seam', 'desc' => 'Professional packing and moving services to ensure your goods reach safely.'),
            array('slug' => 'transportation', 'title' => 'Transportation', 'icon' => 'bi-truck', 'desc' => 'Efficient transportation for household and commercial consignments.'),
            array('slug' => 'local-shifting', 'title' => 'Local Shifting', 'icon' => 'bi-geo-alt', 'desc' => 'Quick and reliable local shifting within the city.'),
            array('slug' => 'home-relocation', 'title' => 'Home Relocation', 'icon' => 'bi-house-door', 'desc' => 'Full-service home relocation from packing to unpacking.'),
            array('slug' => 'commercial-shifting', 'title' => 'Commercial Shifting', 'icon' => 'bi-building', 'desc' => 'Planned office and commercial relocations with minimal downtime.'),
            array('slug' => 'car-carrier', 'title' => 'Car Carrier', 'icon' => 'bi-car-front', 'desc' => 'Safe car transportation and carrier services.'),
            array('slug' => 'loading-and-unloading', 'title' => 'Loading & Unloading', 'icon' => 'bi-people', 'desc' => 'Experienced crew for loading and unloading your goods.'),
            array('slug' => 'warehouse-services', 'title' => 'Warehouse Services', 'icon' => 'bi-archive', 'desc' => 'Secure warehousing solutions for short and long term storage.'),
            array('slug' => 'insurance-services', 'title' => 'Insurance Services', 'icon' => 'bi-shield-check', 'desc' => 'Goods insurance for added protection against transit risks.')
        );
        ?>

        <!-- MODERN SERVICES GRID -->
        <div class="row g-4 mt-2">
            <?php foreach ($services as $index => $s): ?>
                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="<?= ($index % 3) * 100 ?>">
                    <div class="modern-glass-card">
                        <div class="card-inner p-4 p-xl-5">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <div class="modern-icon-container">
                                    <i class="bi <?= $s['icon'] ?>"></i>
                                    <div class="icon-blob"></div>
                                </div>
                                <span class="modern-index">0<?= $index + 1 ?></span>
                            </div>
                            
                            <h4 class="fw-800 mb-3 text-dark"><?= $s['title'] ?></h4>
                            <p class="text-secondary mb-4"><?= $s['desc'] ?></p>
                            
                            <a href="<?= site_url($s['slug']) ?>" class="modern-action-link">
                                <span>Explore Service</span>
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                        <div class="card-progress-bar"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- WHY CHOOSE SECTION - REIMAGINED -->
        <div class="row mt-5 pt-5  align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="visual-stack position-relative mx-auto" style="max-width: 450px;">
                    <div class="stack-bg-shape"></div>
                    <div class="main-img-container rounded-5 overflow-hidden shadow-lg">
                        <img src="<?= base_url() ?>assets/images/service/packers.png" class="img-fluid" alt="Our Shifting Expertise">
                    </div>
                    <!-- Experience Floating Box -->
                    <div class="floating-stat-card shadow-lg" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-icon"><i class="bi bi-stars"></i></div>
                        <div class="stat-info">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Years of Mastery</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-4">
                    <h6 class="text-danger fw-bold text-uppercase mb-2">The Choudhary Advantage</h6>
                    <h2 class="display-6 fw-800 mb-5">Why We Are The <span class="text-danger">Top Choice?</span></h2>

                    <div class="feature-timeline">
                        <div class="timeline-item d-flex gap-4 mb-4">
                            <div class="timeline-dot-wrapper">
                                <div class="timeline-dot bg-danger"></div>
                                <div class="timeline-line"></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-700 mb-1">Expert Handling</h5>
                                <p class="text-muted small">Specialized crew trained for high-value and fragile relocations.</p>
                            </div>
                        </div>

                        <div class="timeline-item d-flex gap-4 mb-4">
                            <div class="timeline-dot-wrapper">
                                <div class="timeline-dot bg-warning"></div>
                                <div class="timeline-line"></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-700 mb-1">Transparent Economics</h5>
                                <p class="text-muted small">No hidden fees. Flat rates with comprehensive breakdown quotes.</p>
                            </div>
                        </div>

                        <div class="timeline-item d-flex gap-4 mb-4">
                            <div class="timeline-dot-wrapper">
                                <div class="timeline-dot bg-danger"></div>
                                <div class="timeline-line"></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-700 mb-1">GPS-Enabled Transit</h5>
                                <p class="text-muted small">Real-time tracking of your belongings during the entire journey.</p>
                            </div>
                        </div>

                        <div class="timeline-item d-flex gap-4">
                            <div class="timeline-dot-wrapper">
                                <div class="timeline-dot bg-warning"></div>
                            </div>
                            <div class="timeline-content">
                                <h5 class="fw-700 mb-1">Secure Warehousing</h5>
                                <p class="text-muted small">24/7 monitored storage solutions for your long-term needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
    
    /* Body Background changed to light red */
    .services-page { 
        font-family: 'Plus Jakarta Sans', sans-serif; 
        background-color: #fff2f2; /* Light Red section background */
        color: #1e293b; 
    }
    .fw-800 { font-weight: 800; }
    .fw-700 { font-weight: 700; }
    
    /* New Highlights Styling */
    .mt-n5 { margin-top: -3rem !important; }
    .highlights-wrapper {
        border: 1px solid rgba(220, 38, 38, 0.1);
        backdrop-filter: blur(10px);
    }
    .border-end-md { border-right: 1px solid #eee; }
    @media (max-width: 767px) {
        .border-end-md { border-right: none; border-bottom: 1px solid #eee; padding-bottom: 1.5rem; }
    }

    /* Header Elements */
    .badge-modern {
        display: inline-block;
        padding: 6px 18px;
        background: rgba(220, 38, 38, 0.08);
        color: #dc2626;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    .text-danger-gradient {
        background: linear-gradient(90deg, #dc2626, #f97316);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .divider-modern { width: 60px; height: 5px; background: #ffcc00; border-radius: 10px; }

    /* Modern Glass Card - Background is now clean white to contrast with the red page */
    .modern-glass-card {
        background: #ffffff; 
        border: 1px solid rgba(220, 38, 38, 0.15);
        border-radius: 30px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        height: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }
    .modern-glass-card:hover {
        transform: translateY(-12px);
        background: #fff;
        box-shadow: 0 30px 60px rgba(220, 38, 38, 0.12);
        border-color: rgba(220, 38, 38, 0.3);
    }
    .card-inner { position: relative; z-index: 2; }

    .modern-icon-container {
        width: 65px;
        height: 65px;
        background: #f8f9fa;
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: #dc2626;
        position: relative;
        box-shadow: 0 10px 20px rgba(220,38,38,0.05);
    }
    .icon-blob {
        position: absolute;
        width: 100%;
        height: 100%;
        background: #dc2626;
        opacity: 0.05;
        border-radius: 20px;
        z-index: -1;
        transition: 0.4s;
    }
    .modern-glass-card:hover .icon-blob { transform: scale(1.4) rotate(15deg); opacity: 0.15; }

    .modern-index { font-weight: 800; font-size: 1.5rem; opacity: 0.15; }

    .modern-action-link {
        text-decoration: none;
        color: #dc2626; 
        font-weight: 700;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: 0.3s;
    }
    .modern-action-link i { font-size: 1.4rem; transition: 0.3s; color: #dc2626; }
    .modern-action-link:hover { color: #f97316; }
    .modern-action-link:hover i { transform: translateX(5px); color: #f97316; }

    .card-progress-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        width: 0;
        background: linear-gradient(90deg, #dc2626, #ffcc00);
        transition: width 0.6s ease;
    }
    .modern-glass-card:hover .card-progress-bar { width: 100%; }

    /* Visual Stack */
    .visual-stack { z-index: 1; }
    .stack-bg-shape {
        position: absolute;
        top: -15px;
        left: -15px;
        width: 150px;
        height: 150px;
        background: #ffcc00;
        border-radius: 35px;
        z-index: -1;
        opacity: 0.3;
    }
    .main-img-container { border: 8px solid white; box-shadow: 0 30px 60px rgba(0,0,0,0.1); }
    
    .floating-stat-card {
        position: absolute;
        bottom: 20px;
        right: -15px;
        background: white;
        padding: 15px 25px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 12px;
        z-index: 3;
    }
    .stat-icon { font-size: 1.6rem; color: #dc2626; }
    .stat-number { display: block; font-weight: 800; font-size: 1.3rem; line-height: 1; }
    .stat-label { font-size: 0.75rem; color: #64748b; font-weight: 600; }

    /* Timeline Feature Styling */
    .timeline-dot-wrapper { display: flex; flex-direction: column; align-items: center; }
    .timeline-dot { width: 14px; height: 14px; border-radius: 50%; border: 3px solid white; box-shadow: 0 0 0 4px rgba(0,0,0,0.05); }
    .timeline-line { width: 2px; flex-grow: 1; background: #e2e8f0; margin: 10px 0; }
    .timeline-content h5 { transition: color 0.3s; }
    .timeline-item:hover h5 { color: #dc2626; }

    @media (max-width: 991px) {
        .floating-stat-card { position: static; margin-top: 20px; width: fit-content; }
        .visual-stack { margin-bottom: 40px; margin-left: 0; max-width: 400px; }
    }
</style>
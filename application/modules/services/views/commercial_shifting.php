<main class="main service-details-page">
    <!-- Hero Section -->
    <section class="service-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('<?= base_url() ?>assets/images/service/services.jpg') center/cover no-repeat fixed; height: 450px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-3 fw-bold mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            Efficient <span style="color: #ffcc00;">Commercial Shifting</span>
                        </h1>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('services')?>" class="text-white text-decoration-none opacity-75"><span class="mx-2 text-white-50">></span> Services</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Commercial Shifting</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Wave Decor -->
        <div class="hero-wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-4">
            <div class="row ">
                <!-- Left Side: Main Content -->
                <div class="col-lg-8" data-aos="fade-right" data-aos-duration="1000">
                    <div class="content-card p-4 p-md-5 bg-white shadow-sm rounded-4 border-start-red">
                        <div class="mb-4">
                            <span class="badge bg-danger px-3 py-2 mb-2">Corporate Relocation Experts</span>
                            <h2 class="fw-bold text-dark display-6">Expert <span class="text-danger">Office & Business Shifting</span></h2>
                        </div>

                        <div class="service-description text-secondary lead-custom">
                            <p class="mb-4">
                                <strong>Choudhary Packers & Movers</strong> provides world-class commercial shifting services designed to minimize downtime and maximize efficiency. Whether it's a small startup office or a massive corporate headquarters, we handle the logistics with surgical precision.
                            </p>
                            
                            <div class="highlight-box p-4 mb-4 border-start-yellow bg-light-yellow rounded-3">
                                <p class="mb-0 italic">
                                    "We prioritize your business continuity. Our team works around the clock, including weekends and holidays, to ensure your office is up and running in the new location as quickly as possible."
                                </p>
                            </div>

                            <p class="mb-4">
                                Commercial relocation involves moving sensitive IT infrastructure, heavy machinery, modular furniture, and confidential documents. Our specialized team uses color-coded labeling and systematic packing to ensure that every department's assets are organized and easily identifiable at the destination.
                            </p>

                            <!-- Features Row -->
                            <div class="row g-4 my-4">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-danger text-white me-3">
                                            <i class="bi bi-cpu"></i>
                                        </div>
                                        <span class="fw-bold">IT Asset Management</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-warning text-dark me-3">
                                            <i class="bi bi-calendar-check"></i>
                                        </div>
                                        <span class="fw-bold">Scheduled Transitions</span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-4">
                                We utilize specialized equipment like heavy-duty cranes, hydraulic lifts, and anti-static packaging for servers and electronics. Our supervisors coordinate directly with your facility managers to adhere to building regulations and security protocols during the move.
                            </p>

                            <!-- Specialized Banner -->
                            <div class="expertise-banner p-4 bg-light border rounded-4 mb-4 position-relative overflow-hidden">
                                <div class="position-relative z-index-1">
                                    <h4 class="text-danger fw-bold mb-2">Secure Document Handling</h4>
                                    <p class="small mb-0 text-dark opacity-75">Confidentiality is key in business. We provide tamper-evident crates and specialized transport for your critical files and archives.</p>
                                </div>
                                <i class="bi bi-building-check water-mark-icon text-danger"></i>
                            </div>

                            <p>
                                Choosing <strong>Choudhary Packers</strong> for your commercial move means choosing a partner who understands the high stakes of corporate relocation. We offer customized insurance plans and detailed inventory reports to give you complete transparency throughout the process.
                            </p>
                            <p>
                                From planning the floor layout at the new office to the final installation of workstations, we provide a turnkey solution. Let us handle the heavy lifting while you focus on growing your business.
                            </p>
                            
                            <p>
                                Our comprehensive approach includes pre-move surveys where we assess the volume and nature of the goods. We also provide specialized packing materials for delicate office equipment and artwork. Our goal is to ensure a transition so smooth that your staff can simply walk into their new desks and resume work immediately.
                            </p>
                            <p>
                                We understand that time is money in the corporate world. Our fleet of specialized transport vehicles is equipped with GPS tracking, allowing you to monitor the progress of your move in real-time. Our customer support team is available 24/7 to address any concerns you may have during the relocation process.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Sidebar -->
                <div class="col-lg-4">
                    <div class="sticky-sidebar-wrapper">
                        <?php $this->load->view('services/sidebar_forms'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .service-details-page { font-family: 'Plus Jakarta Sans', sans-serif; }
    
    /* Hero & Breadcrumb Styles */
    .service-hero { margin-bottom: -50px; }
    .hero-wave { position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg); }
    .hero-wave svg { position: relative; display: block; width: calc(100% + 1.3px); height: 80px; }
    .hero-wave .shape-fill { fill: #f8f9fa; }
    
    .breadcrumb-item + .breadcrumb-item::before { content: none; }
    
    /* Decorative & Content Styles */
    .border-start-red { border-left: 6px solid #ff0000; }
    .border-start-yellow { border-left: 4px solid #ffcc00; }
    .border-top-red { border-top: 5px solid #ff0000; }
    
    .lead-custom p { color: #4b4b4b; line-height: 1.8; font-size: 1.05rem; }
    .bg-light-yellow { background-color: rgba(255, 204, 0, 0.08); }
    .italic { font-style: italic; color: #555; }

    .icon-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
    }

    .water-mark-icon {
        position: absolute;
        right: -10px;
        bottom: -20px;
        font-size: 8rem;
        opacity: 0.05;
        transform: rotate(-15deg);
    }

    .z-index-1 { z-index: 1; }
</style>
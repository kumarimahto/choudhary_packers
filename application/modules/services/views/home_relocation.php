<main class="main service-details-page">
    <!-- Hero Section -->
    <section class="service-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('<?= base_url() ?>assets/images/service/services.jpg') center/cover no-repeat fixed; height: 450px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-3 fw-bold mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            Professional <span style="color: #ffcc00;">Home Relocation</span>
                        </h1>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('services')?>" class="text-white text-decoration-none opacity-75"><span class="mx-2 text-white-50">></span> Services</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Home Relocation</li>
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
                            <span class="badge bg-danger px-3 py-2 mb-2">Total Shifting Solutions</span>
                            <h2 class="fw-bold text-dark display-6">Safe & Reliable <span class="text-danger">Household Shifting</span></h2>
                        </div>

                        <div class="service-description text-secondary lead-custom">
                            <p class="mb-4">
                                <strong>Choudhary Packers & Movers</strong> specializes in providing premium home relocation services. We understand that a home is not just a building, but a place filled with memories and valuable belongings. Our mission is to move your emotions along with your furniture.
                            </p>
                            
                            <div class="highlight-box p-4 mb-4 border-start-yellow bg-light-yellow rounded-3">
                                <p class="mb-0 italic">
                                    "Your peace of mind is our priority. We handle everything from fragile kitchenware to heavy wardrobes with the same level of precision and care."
                                </p>
                            </div>

                            <p class="mb-4">
                                Our home relocation process begins with a detailed assessment of your requirements. We use multi-layer packing techniques—bubble wraps, corrugated sheets, and stretch films—to ensure that even the most delicate items remain intact during the journey.
                            </p>

                            <!-- Features Row -->
                            <div class="row g-4 my-4">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-danger text-white me-3">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <span class="fw-bold">Multi-Layer Packing</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-warning text-dark me-3">
                                            <i class="bi bi-house-up"></i>
                                        </div>
                                        <span class="fw-bold">Hassle-free Setup</span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-4">
                                Whether it is moving within the same city or relocating to a different state, our expert team ensures a seamless transition. We provide dedicated supervisors at every site to monitor the packing and loading process, ensuring no detail is overlooked.
                            </p>

                            <!-- Specialized Banner -->
                            <div class="expertise-banner p-4 bg-light border rounded-4 mb-4 position-relative overflow-hidden">
                                <div class="position-relative z-index-1">
                                    <h4 class="text-danger fw-bold mb-2">Furniture Disassembly & Assembly</h4>
                                    <p class="small mb-0 text-dark opacity-75">Our skilled technicians are experts in handling complex furniture. We dismantle beds and wardrobes at the source and assemble them perfectly at your new home.</p>
                                </div>
                                <i class="bi bi-door-open water-mark-icon text-danger"></i>
                            </div>

                            <p>
                                At <strong>Choudhary Packers</strong>, we take pride in our punctuality and transparency. From the moment you contact us until the last box is unpacked, we keep you updated. Our competitive pricing and high-quality service make us the preferred choice for thousands of families.
                            </p>
                            <!-- Extra content for better scrolling experience -->
                            <p>
                                We also offer specialized crating for expensive electronics and glass items. Our fleet of closed-body containers protects your goods from dust, rain, and theft during transit. Trust us to make your next home move the most comfortable experience of your life.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Sidebar (sticky wrapper left intentionally empty) -->
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
<main class="main service-details-page">
    <!-- Hero Section -->
    <section class="service-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('<?= base_url() ?>assets/images/service/services.jpg') center/cover no-repeat fixed; height: 450px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-3 fw-bold mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            Secure <span style="color: #ffcc00;">Warehousing</span> Solutions
                        </h1>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('services')?>" class="text-white text-decoration-none opacity-75"><span class="mx-2 text-white-50">></span> Services</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Warehousing</li>
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
                            <span class="badge bg-danger px-3 py-2 mb-2">Safe Storage Facility</span>
                            <h2 class="fw-bold text-dark display-6">Modern <span class="text-danger">Warehouse Services</span></h2>
                        </div>

                        <div class="service-description text-secondary lead-custom">
                            <p class="mb-4">
                                <strong>Choudhary Packers and Movers</strong> provides high-quality warehouse services for safe and secure storage of all types of goods for long or short periods. Our warehousing facility is equipped with modern infrastructure and security systems to ensure the absolute safety of your valuables.
                            </p>
                            
                            <div class="highlight-box p-4 mb-4 border-start-yellow bg-light-yellow rounded-3">
                                <p class="mb-0 italic">
                                    "We understand the value of your possessions. Our storage solutions are designed to provide a moisture-free, pest-controlled, and highly secure environment for everything from household furniture to sensitive office equipment."
                                </p>
                            </div>

                            <p class="mb-4">
                                We offer warehouse services for all types of goods like household goods, office goods, industrial goods, and even vehicles. Our warehouses are strategically located to ensure easy access and smooth transportation. We provide 24/7 security and surveillance to keep a constant eye on your stored items.
                            </p>

                            <!-- Features Row -->
                            <div class="row g-4 my-4">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-danger text-white me-3">
                                            <i class="bi bi-shield-check"></i>
                                        </div>
                                        <span class="fw-bold">24/7 CCTV Surveillance</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-warning text-dark me-3">
                                            <i class="bi bi-thermometer-half"></i>
                                        </div>
                                        <span class="fw-bold">Pest & Moisture Control</span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-4">
                                Our systematic inventory management system ensures that every item entering or leaving the warehouse is properly documented. This allows for quick retrieval of goods whenever you need them. We use professional packing techniques even for storage to prevent dust accumulation and aging of the materials.
                            </p>

                            <!-- Expertise Banner -->
                            <div class="expertise-banner p-4 bg-light border rounded-4 mb-4 position-relative overflow-hidden">
                                <div class="position-relative z-index-1">
                                    <h4 class="text-danger fw-bold mb-2">Short & Long Term Storage</h4>
                                    <p class="small mb-0 text-dark opacity-75">Whether you need space for a few days during a transition or a few months for seasonal inventory, we have flexible plans to suit your needs.</p>
                                </div>
                                <i class="bi bi-building-check water-mark-icon text-danger"></i>
                            </div>

                            <p class="mb-4">
                                Safety is our priority. Our warehouses are fire-protected and regularly inspected for structural integrity. Our professional staff is trained to manage the storage space efficiently, ensuring that fragile items are kept away from heavy loads and categorized systematically.
                            </p>
                            
                            <p>
                                At <strong>Choudhary Packers</strong>, we provide more than just space; we provide a promise of safety. Our warehouse services are affordable and reliable, making us the preferred choice for storage needs in the region. Let us handle the space while you focus on your move.
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
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');
    
    .service-details-page { font-family: 'Plus Jakarta Sans', sans-serif; }
    
    /* Hero & Wave */
    .service-hero { margin-bottom: -50px; }
    .hero-wave { position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg); }
    .hero-wave svg { position: relative; display: block; width: calc(100% + 1.3px); height: 80px; }
    .hero-wave .shape-fill { fill: #f8f9fa; }
    
    /* Content Cards & Accents */
    .border-start-red { border-left: 6px solid #ff0000; }
    .border-start-yellow { border-left: 4px solid #ffcc00; }
    .border-top-red { border-top: 5px solid #000000; }
    
    .lead-custom p { color: #4b4b4b; line-height: 1.8; font-size: 1.05rem; margin-bottom: 1.5rem; }
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
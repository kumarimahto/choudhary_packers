<main class="main service-details-page">
    <!-- Hero Section (Transportation Content) -->
    <section class="service-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('<?= base_url() ?>assets/images/service/services.jpg') center/cover no-repeat fixed; height: 450px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <!-- Top Red bar removed as per request -->
                        <h1 class="display-3 fw-bold mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            Safe & Fast <span style="color: #ffcc00;">Transportation</span>
                        </h1>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('services')?>" class="text-white text-decoration-none opacity-75"><span class="mx-2 text-white-50">></span> Services</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Transportation</li>
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
                            <span class="badge bg-danger px-3 py-2 mb-2">Efficient Logistics Solutions</span>
                            <h2 class="fw-bold text-dark display-6">Pan India <span class="text-danger">Transportation Services</span></h2>
                            <!-- Title red line removed here -->
                        </div>

                        <div class="service-description text-secondary lead-custom">
                            <p class="mb-4">
                                <strong>Choudhary Packers & Movers</strong> offer highly reliable and professional transportation services across the country. Whether you need to move household goods, office equipment, or industrial supplies, our well-maintained fleet and expert drivers ensure timely delivery.
                            </p>
                            
                            <div class="highlight-box p-4 mb-4 border-start-yellow bg-light-yellow rounded-3">
                                <p class="mb-0 italic">
                                    "Effective transportation is the backbone of any successful relocation. We focus on route optimization and cargo safety to ensure your items reach the destination without a single scratch."
                                </p>
                            </div>

                            <p class="mb-4">
                                Our transportation network covers every corner of India. We utilize specialized containers and specialized vehicles to handle different types of cargo. From heavy-duty trucks to small transport vans, we have the right vehicle for every requirement. Our real-time tracking (optional) and professional coordination make the transit phase stress-free for you.
                            </p>

                            <!-- Features Row -->
                            <div class="row g-4 my-4">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-danger text-white me-3">
                                            <i class="bi bi-truck"></i>
                                        </div>
                                        <span class="fw-bold">Modern Fleet</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-warning text-dark me-3">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                        <span class="fw-bold">GPS Tracking</span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-4">
                                Safety during transit is our topmost priority. We ensure that all goods are properly stacked and secured within the vehicle to prevent shifting during travel. Our drivers are trained to handle long-distance routes with care, following all safety regulations and time schedules strictly.
                            </p>

                            <!-- Specialized Banner -->
                            <div class="expertise-banner p-4 bg-light border rounded-4 mb-4 position-relative overflow-hidden">
                                <div class="position-relative z-index-1">
                                    <h4 class="text-danger fw-bold mb-2">Door-to-Door Delivery</h4>
                                    <p class="small mb-0 text-dark opacity-75">We don't just move trucks; we move your trust. Our service includes picking up from your doorstep and delivering exactly where you want, with zero delays.</p>
                                </div>
                                <i class="bi bi-truck-flatbed water-mark-icon text-danger"></i>
                            </div>

                            <p>
                                Understanding the budget constraints of our clients, we offer the most competitive rates in the market for transportation. We provide customized quotes based on distance, cargo volume, and urgency. Our transparency in pricing means no hidden charges, giving you full peace of mind.
                            </p>
                            <!-- Extra content for better scrolling experience -->
                            <p>
                                We believe in building long-term relationships with our clients. That's why we provide 24/7 customer support to handle any queries during transit. Our fleet undergoes regular maintenance checks to ensure peak performance and minimal risk of breakdowns on the highway.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Sidebar (Sticky wrapper fixed) -->
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
    
    /* Red line class removed from usage but kept for reference if needed elsewhere */
    .title-line { display: none; } 
    
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
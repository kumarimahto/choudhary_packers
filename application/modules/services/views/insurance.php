<main class="main service-details-page">
    <!-- Hero Section -->
    <section class="service-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('<?= base_url() ?>assets/images/service/services.jpg') center/cover no-repeat fixed; height: 450px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-3 fw-bold mb-3" data-aos="zoom-in" data-aos-duration="1000">
                            Transit <span style="color: #ffcc00;">Insurance</span> Services
                        </h1>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?=site_url('services')?>" class="text-white text-decoration-none opacity-75"><span class="mx-2 text-white-50">></span> Services</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Insurance Services</li>
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
                            <span class="badge bg-danger px-3 py-2 mb-2">Complete Risk Protection</span>
                            <h2 class="fw-bold text-dark display-6">Moving & <span class="text-danger">Transit Insurance</span></h2>
                        </div>

                        <div class="service-description text-secondary lead-custom">
                            <p class="mb-4">
                                At <strong>Choudhary Packers and Movers</strong>, we understand that your belongings are not just items; they are valuable assets and memories. Despite our best efforts and professional packing, unforeseen circumstances like accidents, natural calamities, or transit hurdles can occur. To provide you with total peace of mind, we offer comprehensive <strong>Transit Insurance Services</strong>.
                            </p>
                            
                            <div class="highlight-box p-4 mb-4 border-start-yellow bg-light-yellow rounded-3">
                                <p class="mb-0 italic">
                                    "Your safety is our priority, but your financial protection is our responsibility. Our transit insurance ensures that you are fully compensated in the rare event of any damage during the moving process."
                                </p>
                            </div>

                            <p class="mb-4">
                                We facilitate insurance coverage for all types of relocations, including household shifting, office relocation, and vehicle transportation. Our team assists you in the documentation process, ensuring that the valuation of your goods is done accurately so that you get the maximum benefit in case of a claim.
                            </p>

                            <!-- Features Row -->
                            <div class="row g-4 my-4">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-danger text-white me-3">
                                            <i class="bi bi-file-earmark-check"></i>
                                        </div>
                                        <span class="fw-bold">Hassle-Free Documentation</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white border">
                                        <div class="icon-circle bg-warning text-dark me-3">
                                            <i class="bi bi-cash-stack"></i>
                                        </div>
                                        <span class="fw-bold">Quick Claim Settlement</span>
                                    </div>
                                </div>
                            </div>

                            <p class="mb-4">
                                Our insurance services cover damages resulting from fire, accidents, collisions, and other transit-related risks. We work with leading insurance providers to offer you the best premiums and reliable coverage. This service is designed to eliminate the anxiety associated with long-distance moving.
                            </p>

                            <!-- Expertise Banner -->
                            <div class="expertise-banner p-4 bg-light border rounded-4 mb-4 position-relative overflow-hidden">
                                <div class="position-relative z-index-1">
                                    <h4 class="text-danger fw-bold mb-2">Transparent Policies</h4>
                                    <p class="small mb-0 text-dark opacity-75">We believe in complete transparency. Our team will explain all the terms and conditions of the insurance policy before you sign up, so there are no surprises later.</p>
                                </div>
                                <i class="bi bi-shield-lock-fill water-mark-icon text-danger"></i>
                            </div>

                            <p class="mb-4">
                                Choosing insurance is a smart decision for any move, especially for high-value items, electronics, and vehicles. It adds an extra layer of security and ensures that your moving experience remains positive, regardless of any external factors.
                            </p>
                            
                            <p>
                                Trust <strong>Choudhary Packers</strong> for a risk-free relocation. Our dedicated support team is always available to help you understand the benefits of transit insurance and guide you through the claim process if ever needed.
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
    .border-top-red { border-top: 5px solid #ff0000; }
    
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
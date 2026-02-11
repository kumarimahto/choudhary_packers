<main class="main gallery-page">
    <!-- Hero Section with Breadcrumb -->
    <section class="gallery-hero position-relative overflow-hidden">
        <div class="carousel slide">
            <div class="carousel-inner">
                <!-- Background Image Fix: Ensuring correct path and extension -->
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('<?= base_url('assets/images/gallery/image1.png') ?>') center/cover no-repeat fixed; height: 350px;">
                    <div class="container h-100 d-flex flex-column align-items-center justify-content-center text-center text-white">
                        <h1 class="display-4 fw-bold mb-2" data-aos="fade-down" data-aos-duration="1000">Our <span style="color: #ffcc00;">Gallery</span></h1>
                        
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <ol class="breadcrumb mb-0 justify-content-center bg-transparent">
                                <li class="breadcrumb-item"><a href="<?=site_url()?>" class="text-white text-decoration-none opacity-75">Home</a></li>
                                <li class="breadcrumb-item active text-warning fw-bold" aria-current="page"><span class="mx-2 text-white-50">></span> Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Decorative Wave -->
        <div class="hero-wave" style="position: absolute; bottom: 0; left: 0; width: 100%; line-height: 0; transform: rotate(180deg);">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" style="height: 60px; width: 100%;">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" fill="#ffffff"></path>
            </svg>
        </div>
    </section>

    <!-- Gallery Grid Section -->
    <div class="container py-5">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-12 text-center">
                <span class="text-danger fw-bold text-uppercase letter-spacing-1 small">Visual Journey</span>
                <h2 class="display-5 fw-bold mt-2">Captured <span class="text-danger">Moments</span></h2>
                <div class="mx-auto mb-3" style="width: 70px; height: 4px; background: #ffcc00;"></div>
                <p class="text-muted mx-auto" style="max-width: 600px;">Take a look at our recent relocation projects, professional packing, and safe shipments delivered across the country.</p>
            </div>
        </div>

        <div class="row g-4">
            <?php
            // Dynamically load images from assets/images/gallery/
            $gallery_dir = FCPATH . 'assets/images/gallery/';
            $images = glob($gallery_dir . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
            $fallback = base_url('assets/images/logo/packerslogo.png');

            if (empty($images)) {
                echo '<div class="col-12 text-center text-muted">No gallery images found. Please add images to assets/images/gallery/</div>';
            } else {
                $idx = 0;
                foreach ($images as $path) {
                    $idx++;
                    $file = basename($path);
                    $img = base_url("assets/images/gallery/{$file}");
                    $delay = ($idx * 50) % 1000;
            ?>
            <div class="col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-delay="<?= $delay ?>" data-aos-duration="800">
                <div class="gallery-item-wrapper position-relative overflow-hidden rounded-4 shadow-sm">
                    <img src="<?= $img ?>" class="img-fluid gallery-img" alt="Choudhary Packers Gallery <?= $idx ?>" onerror="this.onerror=null; this.src='<?= $fallback ?>';">
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</main>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap');

    .gallery-page { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #fff; }

    /* Hero Section */
    .gallery-hero .carousel-item { background-attachment: fixed !important; }
    .letter-spacing-1 { letter-spacing: 1px; }

    /* Gallery Items */
    .gallery-item-wrapper {
        height: 280px;
        background: #f8f9fa;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Hover Effects */
    .gallery-item-wrapper:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
    }

    .gallery-item-wrapper:hover .gallery-img {
        transform: scale(1.1);
    }

    /* Responsive */
    @media (max-width: 575px) {
        .gallery-item-wrapper {
            height: 200px;
        }
        .display-4 { font-size: 2.5rem; }
    }
</style>
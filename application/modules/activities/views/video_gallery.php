<!-- HERO SECTION: Clean & Minimalist (Breadcrumb Only) -->
<section class="city-hero" style="background: #2a2b2c; border-bottom: 1px solid #3d3e3f; padding-top: 80px; padding-bottom: 80px;">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 text-center text-lg-start">
                <!-- BREADCRUMB: Large, Aligned & Minimal -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="<?= site_url(); ?>" class="text-white-50 text-decoration-none fs-5 transition-link">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-danger fs-5 fw-bold d-flex align-items-center" aria-current="page">
                            Video Gallery
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- VIDEO GRID SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- MAIN CONTENT: VIDEO FEED -->
            <div class="col-12 col-lg-8">
                <div class="bg-white p-4 rounded-4 shadow-sm">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold text-dark mb-0">Latest Videos</h4>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle rounded-pill" type="button" data-bs-toggle="dropdown">
                                Sort By: Newest
                            </button>
                        </div>
                    </div>

                    <div class="row g-4">
                        <!-- Video Item 1 -->
                        <div class="col-md-6">
                            <div class="video-card position-relative overflow-hidden rounded-4 shadow-sm">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/0.jpg" alt="Video 1" class="img-fluid w-100">
                                <div class="video-overlay d-flex flex-column justify-content-between p-3">
                                    <span class="badge bg-danger align-self-start"><i class="bi bi-clock me-1"></i> 02:45</span>
                                    <div class="text-center py-4">
                                        <div class="play-btn-small"><i class="bi bi-play-circle-fill"></i></div>
                                    </div>
                                    <h6 class="text-white fw-bold mb-0">Household Packing Process</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 2 -->
                        <div class="col-md-6">
                            <div class="video-card position-relative overflow-hidden rounded-4 shadow-sm">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" alt="Video 2" class="img-fluid w-100">
                                <div class="video-overlay d-flex flex-column justify-content-between p-3">
                                    <span class="badge bg-danger align-self-start"><i class="bi bi-clock me-1"></i> 01:20</span>
                                    <div class="text-center py-4">
                                        <div class="play-btn-small"><i class="bi bi-play-circle-fill"></i></div>
                                    </div>
                                    <h6 class="text-white fw-bold mb-0">Loading & Unloading Safety</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 3 (Large/Featured) -->
                        <div class="col-12">
                            <div class="video-card position-relative overflow-hidden rounded-4 shadow-sm featured-video">
                                <img src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaad5b?auto=format&fit=crop&w=1200&q=80" alt="Video 3" class="img-fluid w-100">
                                <div class="video-overlay d-flex flex-column justify-content-between p-4">
                                    <span class="badge bg-danger align-self-start px-3 py-2 fs-6">Featured Video</span>
                                    <div class="text-center">
                                        <div class="play-btn-large"><i class="bi bi-play-fill"></i></div>
                                        <h4 class="text-white fw-bold mt-3">Company Documentary: 10 Years of Excellence</h4>
                                    </div>
                                    <p class="text-white-50 mb-0 small">A look into how we became India's most trusted movers.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 4 -->
                        <div class="col-md-6">
                            <div class="video-card position-relative overflow-hidden rounded-4 shadow-sm">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/1.jpg" alt="Video 4" class="img-fluid w-100">
                                <div class="video-overlay d-flex flex-column justify-content-between p-3">
                                    <span class="badge bg-danger align-self-start"><i class="bi bi-clock me-1"></i> 03:15</span>
                                    <div class="text-center py-4">
                                        <div class="play-btn-small"><i class="bi bi-play-circle-fill"></i></div>
                                    </div>
                                    <h6 class="text-white fw-bold mb-0">Customer Success Story</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Video Item 5 -->
                        <div class="col-md-6">
                            <div class="video-card position-relative overflow-hidden rounded-4 shadow-sm">
                                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/2.jpg" alt="Video 5" class="img-fluid w-100">
                                <div class="video-overlay d-flex flex-column justify-content-between p-3">
                                    <span class="badge bg-danger align-self-start"><i class="bi bi-clock me-1"></i> 00:55</span>
                                    <div class="text-center py-4">
                                        <div class="play-btn-small"><i class="bi bi-play-circle-fill"></i></div>
                                    </div>
                                    <h6 class="text-white fw-bold mb-0">Office Assets Relocation</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDEBAR: QUOTE FORM -->
            <div class="col-12 col-lg-4" id="quote-form">
                <div class="position-sticky" style="top: 20px;">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
                        <div class="card-body p-0">
                            <?php $this->load->view('contacts/quoteform.php'); ?>
                        </div>
                    </div>

                    <!-- SOCIAL TRUST CARD -->
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center">
                        <h6 class="fw-bold mb-3">Follow our YouTube</h6>
                        <p class="small text-muted mb-3">Subscribe for latest packing tips and company updates.</p>
                        <a href="#" class="btn btn-danger w-100 rounded-pill fw-bold">
                            <i class="bi bi-youtube me-2"></i> Subscribe Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .rounded-4 { border-radius: 1.25rem !important; }
    
    /* Video Card Styling */
    .video-card {
        cursor: pointer;
        background: #000;
        min-height: 200px;
    }
    .video-card img {
        opacity: 0.7;
        transition: all 0.5s ease;
        object-fit: cover;
    }
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.2) 100%);
        transition: all 0.3s ease;
    }
    .video-card:hover img {
        transform: scale(1.05);
        opacity: 0.5;
    }
    .video-card:hover .video-overlay {
        background: linear-gradient(to top, rgba(220, 53, 69, 0.7) 0%, rgba(0,0,0,0.4) 100%);
    }

    /* Play Button Animations */
    .play-btn-small {
        font-size: 3rem;
        color: white;
        opacity: 0.8;
        transition: transform 0.3s ease;
    }
    .video-card:hover .play-btn-small {
        transform: scale(1.2);
        opacity: 1;
    }
    .play-btn-large {
        font-size: 4rem;
        color: white;
        background: rgba(220, 53, 69, 0.9);
        width: 80px;
        height: 80px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
    }
    .video-card:hover .play-btn-large {
        transform: scale(1.1);
        background: #fff;
        color: #dc3545;
    }

    .breadcrumb-item + .breadcrumb-item::before { 
        content: ">"; 
        color: rgba(255,255,255,0.4) !important; 
        font-size: 14px;
        padding-left: 12px;
        padding-right: 12px;
        line-height: 1;
        display: inline-block;
        vertical-align: middle;
    }
    
    .breadcrumb-item, .breadcrumb-item a {
        display: flex;
        align-items: center;
        line-height: 1;
    }

    .transition-link:hover {
        color: #fff !important;
        opacity: 1 !important;
    }

    @media (max-width: 991px) {
        .city-hero { text-align: center; }
        .breadcrumb { justify-content: center; }
    }
</style>
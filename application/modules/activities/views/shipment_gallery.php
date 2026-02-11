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
                            Shipment Gallery
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY CONTENT SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <!-- LEFT CONTENT: MASONRY GALLERY -->
            <div class="col-12 col-lg-8 mx-auto">
                <div class="bg-white p-3 p-md-4 rounded-4 shadow-sm">
                    
                    <!-- Category Filter Tabs -->
                    <div class="d-flex flex-wrap gap-2 mb-4 border-bottom pb-3">
                        <button class="btn btn-danger rounded-pill px-4 btn-sm fw-bold">All Shipments</button>
                        <button class="btn btn-outline-secondary rounded-pill px-4 btn-sm fw-bold">Household</button>
                        <button class="btn btn-outline-secondary rounded-pill px-4 btn-sm fw-bold">Office Shift</button>
                        <button class="btn btn-outline-secondary rounded-pill px-4 btn-sm fw-bold">Vehicle</button>
                    </div>

                    <div class="row g-3">
                        <!-- Gallery Item 1 -->
                        <div class="col-md-6">
                            <div class="gallery-card position-relative overflow-hidden rounded-4 shadow-sm border">
                                <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=600&q=80" alt="Shipment 1" class="img-fluid w-100 transition-img">
                                <div class="gallery-overlay p-3 d-flex flex-column justify-content-end">
                                    <span class="badge bg-danger mb-2 align-self-start">Household</span>
                                    <h6 class="text-white fw-bold mb-0">Premium Packing, Mumbai</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 2 -->
                        <div class="col-md-6">
                            <div class="gallery-card position-relative overflow-hidden rounded-4 shadow-sm border">
                                <img src="https://images.unsplash.com/photo-1600518464441-9154a4dea21b?auto=format&fit=crop&w=600&q=80" alt="Shipment 2" class="img-fluid w-100 transition-img">
                                <div class="gallery-overlay p-3 d-flex flex-column justify-content-end">
                                    <span class="badge bg-danger mb-2 align-self-start">Vehicle</span>
                                    <h6 class="text-white fw-bold mb-0">Safe Car Carrier, Delhi</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 3 -->
                        <div class="col-md-12">
                            <div class="gallery-card position-relative overflow-hidden rounded-4 shadow-sm border" style="max-height: 350px;">
                                <img src="https://images.unsplash.com/photo-1519003722824-194d4455a60c?auto=format&fit=crop&w=1200&q=80" alt="Shipment 3" class="img-fluid w-100 transition-img" style="object-fit: cover; height: 100%;">
                                <div class="gallery-overlay p-3 d-flex flex-column justify-content-end">
                                    <span class="badge bg-danger mb-2 align-self-start">Warehouse</span>
                                    <h6 class="text-white fw-bold mb-0">Secured Storage Solutions</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 4 -->
                        <div class="col-md-6">
                            <div class="gallery-card position-relative overflow-hidden rounded-4 shadow-sm border">
                                <img src="https://images.unsplash.com/photo-1614359835514-92f8ba196357?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFja2VycyUyMGFuZCUyMG1vdmVyc3xlbnwwfHwwfHx8MA%3D%3D" alt="Shipment 4" class="img-fluid w-100 transition-img">
                                <div class="gallery-overlay p-3 d-flex flex-column justify-content-end">
                                    <span class="badge bg-danger mb-2 align-self-start">Office</span>
                                    <h6 class="text-white fw-bold mb-0">IT Infrastructure Shifting</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Item 5 -->
                        <div class="col-md-6">
                            <div class="gallery-card position-relative overflow-hidden rounded-4 shadow-sm border">
                                <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=600&q=80" alt="Shipment 5" class="img-fluid w-100 transition-img">
                                <div class="gallery-overlay p-3 d-flex flex-column justify-content-end">
                                    <span class="badge bg-danger mb-2 align-self-start">International</span>
                                    <h6 class="text-white fw-bold mb-0">Global Relocation, Dubai</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- LOAD MORE -->
                    <div class="text-center mt-5">
                        <button class="btn btn-outline-danger px-5 py-2 rounded-pill fw-bold shadow-sm">
                            <i class="bi bi-plus-circle me-2"></i> Load More Shipments
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .rounded-4 { border-radius: 1.5rem !important; }
    
    /* Gallery Hover Effects */
    .gallery-card {
        cursor: pointer;
        min-height: 250px;
        background: #f8f9fa;
    }
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 50%);
        opacity: 0.9;
        transition: all 0.3s ease;
    }
    .transition-img {
        transition: transform 0.5s ease;
        object-fit: cover;
        height: 100%;
    }
    .gallery-card:hover .transition-img {
        transform: scale(1.1);
    }
    .gallery-card:hover .gallery-overlay {
        background: linear-gradient(to top, rgba(220, 53, 69, 0.8) 0%, rgba(0,0,0,0.2) 100%);
    }

    /* Optimized Breadcrumb Design matching large style */
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

<style>
    :root {
        --primary-accent: #ff0707;
        --secondary-accent: #e4b20f;
        --dark-bg: #1a1b1c;
        --soft-bg: #f8fafc;
    }

    body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background-color: var(--soft-bg);
    }

    /* --- HERO SECTION --- */
    .city-hero {
        background: linear-gradient(90deg, #0f1720 0%, #1d1f22 100%);
        padding: 60px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .city-hero .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
        color: rgba(255, 255, 255, 0.4);
        padding: 0 12px;
    }

    /* --- FORM CARD DESIGN --- */
    .partner-card-wrapper {
        background: #ffffff;
        border-radius: 30px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(0, 0, 0, 0.03);
    }

    .form-header-gradient {
        background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
        padding: 40px;
        border-bottom: 1px solid #eee;
    }

    .form-body {
        padding: 40px;
    }

    /* --- INPUT STYLING --- */
    .partner-form .form-label {
        font-weight: 600;
        color: #4a5568;
        margin-bottom: 8px;
        font-size: 0.9rem;
    }

    .partner-form .form-control, 
    .partner-form .form-select {
        border: 2px solid #edf2f7;
        border-radius: 12px;
        padding: 12px 18px;
        transition: all 0.3s ease;
        background-color: #fbfbfc;
    }

    .partner-form .form-control:focus, 
    .partner-form .form-select:focus {
        border-color: var(--secondary-accent);
        background-color: #fff;
        box-shadow: 0 8px 20px rgba(228, 178, 15, 0.1);
        outline: none;
    }

    /* --- ICON BOX --- */
    .input-group-custom {
        position: relative;
    }

    .input-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #cbd5e0;
        z-index: 5;
    }

    /* --- FILE UPLOAD --- */
    .file-input-wrapper {
        background: #f8fafc;
        border: 2px dashed #e2e8f0;
        border-radius: 12px;
        padding: 15px;
        transition: 0.3s;
    }

    .file-input-wrapper:hover {
        border-color: var(--secondary-accent);
    }

    /* --- SUBMIT BUTTON --- */
    .btn-partner-submit {
        background: var(--dark-bg);
        color: white;
        border: none;
        padding: 16px 30px;
        border-radius: 12px;
        font-weight: 700;
        letter-spacing: 0.5px;
        transition: all 0.3s;
        width: 100%;
    }

    .btn-partner-submit:hover {
        background: #000;
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        color: #fff;
    }

    /* --- SIDE INFO --- */
    .benefit-item {
        display: flex;
        gap: 15px;
        margin-bottom: 25px;
    }

    .benefit-icon {
        width: 45px;
        height: 45px;
        background: #fff5f5;
        color: var(--primary-accent);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        font-size: 1.2rem;
    }

    @media (max-width: 991px) {
        .form-header-gradient, .form-body { padding: 30px 20px; }
    }
</style>

<!-- HERO SECTION -->
<section class="city-hero">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 text-center text-lg-start">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="#" class="text-white-50 text-decoration-none fs-5">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-danger fs-5 fw-bold d-flex align-items-center" aria-current="page">
                            Become a Partner
                        </li>
                    </ol>
                </nav>

                <div class="mt-4">
                    <h1 class="text-white fw-bold mb-2" style="font-size: 2.5rem;">Join Our Elite Network</h1>
                    <p class="text-white-50 mb-0 fs-5" style="max-width:720px;">Collaborate with India's most trusted relocation platform and grow your business with verified leads.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Left Side: Why Partner? -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 30px; z-index: 1;">
                    <h3 class="fw-bold mb-4">Why Partner With Us?</h3>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Scale Your Growth</h6>
                            <p class="small text-muted">Get access to high-quality, pre-verified move requests daily.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="bi bi-shield-check"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Brand Trust</h6>
                            <p class="small text-muted">Associate your business with a platform known for safety and quality.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="bi bi-lightning-charge"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Smart Analytics</h6>
                            <p class="small text-muted">Manage your bookings and feedback with our partner dashboard.</p>
                        </div>
                    </div>

                    <div class="p-4 bg-white rounded-4 border mt-4">
                        <p class="small text-muted mb-0"><i class="bi bi-info-circle me-2"></i> After submission, our vendor relations team will conduct a background check and contact you within 48 business hours.</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: The Form -->
            <div class="col-lg-8">
                <div class="partner-card-wrapper">
                    <div class="form-header-gradient">
                        <h4 class="fw-bold mb-1">Application Form</h4>
                        <p class="text-muted mb-0">Fill in your details to start the onboarding process</p>
                    </div>

                    <div class="form-body">
                        <form action="#" method="post" enctype="multipart/form-data" class="partner-form">
                            <div class="row g-4">
                                <!-- Personal Details -->
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <div class="input-group-custom">
                                        <input name="name" required class="form-control" placeholder="Enter your name">
                                        <i class="bi bi-person input-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Company Name</label>
                                    <div class="input-group-custom">
                                        <input name="company" class="form-control" placeholder="Registered company name">
                                        <i class="bi bi-building input-icon"></i>
                                    </div>
                                </div>

                                <!-- Contact Details -->
                                <div class="col-md-6">
                                    <label class="form-label">Email Address *</label>
                                    <div class="input-group-custom">
                                        <input name="email" type="email" required class="form-control" placeholder="name@company.com">
                                        <i class="bi bi-envelope input-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone Number *</label>
                                    <div class="input-group-custom">
                                        <input name="phone" required class="form-control" placeholder="10-digit mobile number">
                                        <i class="bi bi-telephone input-icon"></i>
                                    </div>
                                </div>

                                <!-- Service Category -->
                                <div class="col-12">
                                    <label class="form-label">Service Category *</label>
                                    <select name="service_type" class="form-select" required>
                                        <option value="" disabled selected>Select your primary service</option>
                                        <option>Packers & Movers</option>
                                        <option>Household Storage / Warehousing</option>
                                        <option>Commercial Logistics</option>
                                        <option>Vehicle Transportation</option>
                                    </select>
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <label class="form-label">Operational Expertise</label>
                                    <textarea name="message" rows="4" class="form-control" placeholder="Briefly describe your areas of operation and fleet size..."></textarea>
                                </div>

                                <!-- File Upload -->
                                <div class="col-12">
                                    <label class="form-label">Business Documents (Optional)</label>
                                    <div class="file-input-wrapper">
                                        <input name="attachment" type="file" class="form-control border-0 bg-transparent p-0">
                                        <p class="small text-muted mb-0 mt-2"><i class="bi bi-file-earmark-pdf me-1"></i> Upload GST, Trade License, or Company Profile (PDF/JPG)</p>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12 mt-5">
                                    <button type="submit" class="btn btn-partner-submit">
                                        Submit Application <i class="bi bi-arrow-right ms-2"></i>
                                    </button>
                                    <p class="text-center small text-muted mt-3">By submitting, you agree to our Partner Terms & Conditions.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
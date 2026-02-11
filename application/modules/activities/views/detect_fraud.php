
<style>
    :root {
        --primary-accent: #ff0707; /* Brand Red */
        --secondary-accent: #e4b20f; 
        --dark-bg: #1a1b1c;
        --glass-white: rgba(255, 255, 255, 0.95);
        --text-main: #2d3436;
    }

    body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background-color: #f8fafc;
        color: var(--text-main);
        overflow-x: hidden;
    }

    .city-hero {
        background: #2a2b2c;
        border-bottom: 1px solid #3d3e3f;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .breadcrumb-item + .breadcrumb-item::before { 
        content: ">"; 
        color: rgba(255,255,255,0.4) !important; 
        font-size: 14px;
        padding-left: 12px;
        padding-right: 12px;
        line-height: 1;
    }
    
    .breadcrumb-item a {
        color: rgba(255,255,255,0.6) !important;
        text-decoration: none;
        transition: 0.3s;
    }

    /* --- MODERNIZED CONTENT DESIGN --- */
    .main-title {
        font-size: clamp(2rem, 5vw, 3.2rem);
        font-weight: 900;
        letter-spacing: -1.5px;
        background: linear-gradient(135deg, #2d3436 0%, #000 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .highlight-accent {
        color: var(--primary-accent);
        -webkit-text-fill-color: var(--primary-accent);
    }

    /* Redesigned Info Cards */
    .info-card {
        background: white;
        border: 1px solid rgba(0,0,0,0.05);
        padding: 2rem;
        border-radius: 20px;
        height: 100%;
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        position: relative;
        overflow: hidden;
    }

    .info-card::after {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 4px;
        background: var(--secondary-accent);
        opacity: 0;
        transition: 0.3s;
    }

    .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    .info-card:hover::after { opacity: 1; }

    .icon-circle {
        width: 60px;
        height: 60px;
        background: #fff5f5;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: var(--primary-accent);
        font-size: 1.5rem;
    }

    /* Modern Checklist with Vertical Line */
    .checklist-wrapper {
        background: white;
        border-radius: 30px;
        padding: 3rem;
        box-shadow: 0 30px 60px rgba(0,0,0,0.05);
        border: 1px solid #fff;
    }

    /* Vertical Line Container */
    .list-container {
        position: relative;
    }

    .list-container::before {
        content: '';
        position: absolute;
        left: 27px; /* Centers with the 24px width of list-number */
        top: 10px;
        bottom: 10px;
        width: 2px;
        background: #000; /* Black vertical line */
        z-index: 0;
        opacity: 0.15;
    }

    .list-item-new {
        display: flex;
        gap: 20px;
        padding: 1.5rem;
        border-radius: 15px;
        transition: 0.3s;
        border: 1px solid transparent;
        position: relative;
        z-index: 1;
    }

    .list-item-new:hover {
        background: #fdfdfd;
        border-color: #eee;
    }

    .list-number {
        font-size: 0.8rem;
        font-weight: 800;
        background: var(--dark-bg);
        color: white;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 5px;
        position: relative;
        z-index: 2;
        border: 2px solid white; /* Prevents line from showing through circle */
    }

    /* Enhanced Safe Badge */
    .premium-badge {
        background: linear-gradient(145deg, #ffffff, #f0f0f0);
        border-radius: 25px;
        padding: 3rem 2rem;
        text-align: center;
        border: 1px solid #e0e0e0;
        position: sticky;
        top: 20px;
    }

    .shield-animate {
        font-size: 5rem;
        color: #00b894;
        filter: drop-shadow(0 10px 15px rgba(0, 184, 148, 0.2));
        margin-bottom: 1.5rem;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    /* CTA Section Upgrade */
    .cta-box-premium {
        background: var(--dark-bg);
        border-radius: 40px;
        padding: 5rem 3rem;
        color: white;
        position: relative;
        z-index: 1;
    }

    .btn-premium-red {
        background: var(--primary-accent);
        color: white;
        border-radius: 50px;
        padding: 1.2rem 2.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: 0.3s;
        border: none;
        text-decoration: none;
        display: inline-block;
    }

    .btn-premium-red:hover {
        background: #ff3333;
        box-shadow: 0 15px 30px rgba(255, 7, 7, 0.4);
        transform: translateY(-3px);
        color: white;
    }

    .btn-outline-white {
        border: 2px solid rgba(255,255,255,0.2);
        color: white;
        border-radius: 50px;
        padding: 1.2rem 2.5rem;
        transition: 0.3s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-outline-white:hover {
        background: white;
        color: var(--dark-bg);
    }
</style>

<!-- HERO SECTION (Breadcrumb Preserved) -->
<section class="city-hero">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="#" class="text-white-50 text-decoration-none fs-5">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-danger fs-5 fw-bold d-flex align-items-center" aria-current="page">
                            Detect Fraud Packers & Movers
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    
    <!-- HEADER -->
    <div class="text-center mb-5 pb-3">
        <h1 class="main-title mb-3">Identify & <span class="highlight-accent">Avoid Fraud</span><br>Packers and Movers</h1>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">Don't let scammers compromise your relocation. Use our professional verification guide to stay protected throughout your journey.</p>
    </div>

    <!-- REDESIGNED QUICK WARNINGS GRID -->
    <div class="row g-4 mb-5">
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-circle"><i class="bi bi-graph-down"></i></div>
                <h5 class="fw-bold">Beware of Low Quotes</h5>
                <p class="small text-muted mb-0">Extreme low-ball estimates are often bait to trap customers. Real companies maintain standard market pricing.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-circle"><i class="bi bi-geo-alt"></i></div>
                <h5 class="fw-bold">Verify Physical Office</h5>
                <p class="small text-muted mb-0">Never trust a mover who only provides a phone number. Visit their warehouse to verify their existence.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-circle"><i class="bi bi-truck"></i></div>
                <h5 class="fw-bold">Check Branding</h5>
                <p class="small text-muted mb-0">Legitimate movers use their own branded vehicles. Unmarked or rented trucks are a major red flag for fraud.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="info-card">
                <div class="icon-circle"><i class="bi bi-file-earmark-text"></i></div>
                <h5 class="fw-bold">Get Written Quotes</h5>
                <p class="small text-muted mb-0">Avoid verbal or WhatsApp deals. Always demand a printed quotation on official company letterhead.</p>
            </div>
        </div>
    </div>

    <!-- MAIN CHECKLIST SECTION -->
    <div class="checklist-wrapper">
        <div class="row">
            <div class="col-lg-7">
                <div class="mb-5">
                    <span class="badge bg-danger mb-3 px-3 py-2 rounded-pill">ESSENTIAL PROTECTION</span>
                    <h2 class="display-6 fw-black">Master <span class="text-danger">Verification</span> Checklist</h2>
                    <p class="text-muted fs-5">Verify these 5 critical legal points before signing any agreement:</p>
                </div>

                <!-- Added list-container for the vertical line -->
                <div class="list-container">
                    <div class="list-item-new">
                        <div class="list-number">1</div>
                        <div>
                            <h5 class="fw-bold mb-1">GSTIN Verification</h5>
                            <p class="text-muted small">Verify the GST number on the government portal. Ensure the company name and registered trade name match perfectly.</p>
                        </div>
                    </div>

                    <div class="list-item-new">
                        <div class="list-number">2</div>
                        <div>
                            <h5 class="fw-bold mb-1">Official Quotation Analysis</h5>
                            <p class="text-muted small">The document must feature a registered office address and a valid landline contact number to be considered legal.</p>
                        </div>
                    </div>

                    <div class="list-item-new">
                        <div class="list-number">3</div>
                        <div>
                            <h5 class="fw-bold mb-1">Mandatory Office Visit</h5>
                            <p class="text-muted small">If a mover discourages you from visiting their warehouse, walk away. Professional companies are always transparent.</p>
                        </div>
                    </div>

                    <div class="list-item-new">
                        <div class="list-number">4</div>
                        <div>
                            <h5 class="fw-bold mb-1">Authentic Reviews Check</h5>
                            <p class="text-muted small">Ignore website testimonials. Check Google Maps and independent social media platforms for genuine customer experiences.</p>
                        </div>
                    </div>

                    <div class="list-item-new">
                        <div class="list-number">5</div>
                        <div>
                            <h5 class="fw-bold mb-1">Secure Payment Terms</h5>
                            <p class="text-muted small">Avoid 100% advance payments. Pay a small token amount, then settle the balance only after loading or final delivery.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 ps-lg-5 mt-5 mt-lg-0">
                <div class="premium-badge">
                    <div class="shield-animate">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="fw-bold">100% Secure<br>Relocation Tips</h3>
                    <hr class="w-25 mx-auto my-4 border-2">
                    <p class="text-muted mb-4">This checklist has been curated by industry experts to protect users from the rising number of relocation scams.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <span class="badge bg-success-subtle text-success p-2 px-3 border border-success-subtle">Verified Experts</span>
                        <span class="badge bg-primary-subtle text-primary p-2 px-3 border border-primary-subtle">2024 Safety Standards</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PREMIUM CTA SECTION -->
    <div class="mt-5 pt-4">
        <div class="cta-box-premium overflow-hidden">
            <!-- Decorative circles -->
            <div style="position:absolute; width: 300px; height: 300px; background: var(--secondary-accent); border-radius: 50%; top: -150px; left: -150px; opacity: 0.1;"></div>
            <div style="position:absolute; width: 200px; height: 200px; background: var(--primary-accent); border-radius: 50%; bottom: -100px; right: -100px; opacity: 0.1;"></div>

            <div class="row align-items-center position-relative">
                <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                    <h2 class="display-5 fw-bold mb-3">Protect Your Valuable Assets</h2>
                    <p class="fs-5 opacity-75">Connect with our team to get a list of 100% verified, fraud-free movers today.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-grid gap-3">
                        <a href="tel:<?= $phone ?>" class="btn btn-premium-red py-3">Call Now</a>
                        <a href="#" class="btn btn-outline-white py-3">
                            Get Quote in 25 Mins
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
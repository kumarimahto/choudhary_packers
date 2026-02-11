
    <style>
        :root {
            --brand-red: #ff3b3b;
            --brand-yellow: #ffd43b;
            --brand-black: #1a1a1a;
            --brand-dark: #2a2b2c;
            --text-gray: #6c757d;
        }

        .city-hero {
            background: var(--brand-dark);
            border-bottom: 1px solid #3d3e3f;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .breadcrumb-item + .breadcrumb-item::before { 
            content: ">"; 
            color: rgba(255,255,255,0.4);
            padding: 0 12px;
        }

        .transition-link:hover {
            color: #fff !important;
        }

        /* --- REDESIGNED CONTENT SECTION --- */
        .moving-tips-v2 {
            padding: 100px 0;
            background: #ffffff;
            position: relative;
        }

        /* Sidebar Navigation / Title Area */
        .tips-sidebar {
            position: sticky;
            top: 200px;
        }

        .tips-tag {
            background: #ffe5e5;
            color: var(--brand-red);
            padding: 6px 18px;
            border-radius: 4px;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 15px;
        }

        .tips-main-title {
            font-size: 3rem;
            font-weight: 900;
            line-height: 1.1;
            color: var(--brand-black);
            margin-bottom: 25px;
        }

        .tips-main-title span {
            color: var(--brand-red);
        }

        /* Checklist Design Replacement */
        .tip-row {
            display: flex;
            gap: 30px;
            padding: 40px;
            border-bottom: 1px solid #eee;
            transition: all 0.4s ease;
            position: relative;
            background: #fff;
        }

        .tip-row:hover {
            background: #fcfcfc;
            transform: scale(1.02);
            border-bottom-color: var(--brand-red);
            z-index: 2;
        }

        .tip-number {
            font-size: 4rem;
            font-weight: 900;
            line-height: 1;
            color: #f1f1f1;
            min-width: 80px;
            transition: 0.4s;
        }

        .tip-row:hover .tip-number {
            color: var(--brand-yellow);
        }

        .tip-icon-box {
            width: 60px;
            height: 60px;
            background: var(--brand-red); /* Changed from black to red as requested */
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 24px;
            flex-shrink: 0;
            transition: 0.3s;
        }

        .tip-row:hover .tip-icon-box {
            background: var(--brand-black); /* Swapped colors on hover for dynamic effect */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .tip-content h4 {
            font-weight: 800;
            margin-bottom: 12px;
            color: var(--brand-black);
        }

        .tip-content p {
            color: var(--text-gray);
            font-size: 1.05rem;
            line-height: 1.6;
            margin: 0;
        }

        /* Special Highlight Box */
        .pro-note {
            background: var(--brand-black);
            color: #fff;
            padding: 40px;
            border-radius: 20px;
            margin-top: 50px;
            display: flex;
            align-items: center;
            gap: 25px;
            border-left: 8px solid var(--brand-yellow);
        }

        .pro-note i {
            font-size: 40px;
            color: var(--brand-yellow);
        }

        @media (max-width: 991px) {
            .tips-main-title { font-size: 2.2rem; }
            .tip-row { padding: 30px 15px; flex-direction: column; gap: 15px; }
            .tip-number { font-size: 2.5rem; }
        }
    </style>
</head>


<!-- HERO SECTION -->
<section class="city-hero">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 text-center text-lg-start">
                <!-- BREADCRUMB (UNCHANGED) -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="#" class="text-white-50 text-decoration-none fs-5 transition-link">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-danger fs-5 fw-bold d-flex align-items-center">
                            Moving Tips
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- REDESIGNED MOVING TIPS SECTION -->
<section class="moving-tips-v2">
    <div class="container">
        <div class="row">
            <!-- Left Side: Sticky Content -->
            <div class="col-lg-5">
                <div class="tips-sidebar">
                    <span class="tips-tag">Expert Guide</span>
                    <h2 class="tips-main-title">Smart Moving<br>Steps For <span>Success</span></h2>
                    <p class="text-muted fs-5 mb-4">
                        Don't let the stress of relocation overwhelm you. Our professional movers have curated the ultimate checklist to ensure your transition is flawless.
                    </p>
                    <div class="d-none d-lg-block">
                        <img src="https://img.icons8.com/illustrations/external-fauzidea-detailed-outline-fauzidea/128/external-moving-logistics-fauzidea-detailed-outline-fauzidea.png" alt="Moving icon" style="opacity: 0.1;">
                    </div>
                </div>
            </div>

            <!-- Right Side: New List Design -->
            <div class="col-lg-7">
                
                <!-- Tip 01 -->
                <div class="tip-row">
                    <div class="tip-number">01</div>
                    <div class="tip-icon-box">
                        <i class="bi bi-calendar2-check"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Early Strategic Planning</h4>
                        <p>Create a master moving checklist 4 weeks in advance. Identify high-priority items and set a strict timeline for each room.</p>
                    </div>
                </div>

                <!-- Tip 02 -->
                <div class="tip-row">
                    <div class="tip-number">02</div>
                    <div class="tip-icon-box">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Premium Packing Standards</h4>
                        <p>Use heavy-duty corrugated boxes for kitchenware and bubble wrap for electronics. Never skimp on tape quality to avoid accidental spills.</p>
                    </div>
                </div>

                <!-- Tip 03 -->
                <div class="tip-row">
                    <div class="tip-number">03</div>
                    <div class="tip-icon-box">
                        <i class="bi bi-recycle"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Smart Decluttering</h4>
                        <p>Separate items into: Keep, Donate, and Discard. Reducing your inventory can lower your relocation cost by up to 20%.</p>
                    </div>
                </div>

                <!-- Tip 04 -->
                <div class="tip-row">
                    <div class="tip-number">04</div>
                    <div class="tip-icon-box">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Essential Document Vault</h4>
                        <p>Keep passports, property papers, and jewelry in a "Day Zero" bag that travels with you personally, not in the truck.</p>
                    </div>
                </div>

                <!-- Tip 05 -->
                <div class="tip-row">
                    <div class="tip-number">05</div>
                    <div class="tip-icon-box">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="tip-content">
                        <h4>Hire Verified Professionals</h4>
                        <p>Always choose licensed movers. Professional handling ensures your furniture is dismantled and reassembled without a single scratch.</p>
                    </div>
                </div>

                <!-- Professional Note -->
                <div class="pro-note">
                    <i class="bi bi-info-circle-fill"></i>
                    <div>
                        <h5 class="fw-bold mb-1" style="color: var(--brand-yellow);">PRO TIP:</h5>
                        <p class="mb-0 small">Take photos of your electronic setups (cables/connections) before unplugging them to make re-installation a breeze!</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


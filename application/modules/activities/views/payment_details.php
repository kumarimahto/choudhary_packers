
    <style>
        :root {
            --primary-red: #dc3545;
            --accent-yellow: #ffc107;
            --dark-bg: #2a2b2c;
            --light-gray: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f6f9;
            color: #333;
        }

        /* --- HERO SECTION --- */
        .city-hero {
            background: var(--dark-bg);
            border-bottom: 1px solid #3d3e3f;
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .custom-breadcrumb .breadcrumb-item + .breadcrumb-item::before {
            content: ">" !important;
            color: rgba(255, 255, 255, 0.3) !important;
            font-size: 16px;
            padding: 0 15px;
        }

        .transition-link { transition: 0.3s; }
        .transition-link:hover { color: #fff !important; opacity: 1 !important; }

        /* --- MAIN CONTENT --- */
        .payment-section { padding: 80px 0; }

        .section-heading .tag {
            background: rgba(220, 53, 69, 0.1);
            color: var(--primary-red);
            padding: 6px 16px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 13px;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        .section-heading h2 {
            font-weight: 800;
            font-size: 2.5rem;
            margin: 15px 0;
            letter-spacing: -1px;
        }

        /* --- PREMIUM BANK CARD --- */
        .bank-card {
            background: #fff;
            border-radius: 24px;
            overflow: hidden;
            margin-top: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.08);
            border: 1px solid #eee;
        }

        .bank-header {
            background: linear-gradient(135deg, #6a95c0, #2c2f33);
            color: #fff;
            padding: 25px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 4px solid var(--accent-yellow);
        }

        .bank-header div {
            font-size: 1.1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .bank-header div i { color: var(--accent-yellow); font-size: 1.4rem; }

        .bank-badge {
            background: var(--primary-red);
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .bank-body { padding: 45px; position: relative; }
        
        /* Decorative watermark icon */
        .bank-body::after {
            content: "\f197"; /* Bank icon */
            font-family: "bootstrap-icons";
            position: absolute;
            right: 20px;
            bottom: 10px;
            font-size: 150px;
            color: rgba(0,0,0,0.03);
            pointer-events: none;
        }

        .info-group label {
            font-size: 11px;
            text-transform: uppercase;
            color: #999;
            font-weight: 800;
            letter-spacing: 1px;
            display: block;
            margin-bottom: 5px;
        }

        .info-group p {
            font-size: 1.25rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 0;
        }

        .info-group .highlight-num {
            font-family: 'Courier New', Courier, monospace;
            letter-spacing: 2px;
            font-size: 1.4rem;
            color: #000;
        }

        .copy-btn {
            background: none;
            border: none;
            color: var(--primary-red);
            font-size: 0.9rem;
            cursor: pointer;
            padding: 0;
            margin-left: 10px;
            transition: 0.2s;
        }
        .copy-btn:hover { text-decoration: underline; color: #000; }

        /* --- FEATURE BOXES --- */
        .feature-box {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: 0.4s;
            height: 100%;
            border: 1px solid transparent;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            border-color: rgba(220, 53, 69, 0.2);
        }

        .icon-circle {
            width: 55px;
            height: 55px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .bg-red-soft { background: #fff1f2; color: var(--primary-red); }
        .bg-yellow-soft { background: #fffdec; color: #d4a017; }

        /* --- SIDEBAR --- */
        .help-card {
            background: #fff;
            padding: 35px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.06);
            border: 1px solid #eee;
        }

        .avatar-box {
            width: 80px;
            height: 80px;
            background: var(--primary-red);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(220, 53, 69, 0.2);
        }

        .trust-list {
            list-style: none;
            padding: 0;
            text-align: left;
            margin-top: 25px;
        }

        .trust-list li {
            padding: 8px 0;
            font-size: 0.95rem;
            color: #555;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .trust-list li i { color: #28a745; }

        .note-box {
            background: #fff4f4;
            border: 1px dashed var(--primary-red);
            padding: 20px;
            border-radius: 16px;
            margin-top: 25px;
        }

        .btn-call {
            background: #1a1c1e;
            color: white;
            border-radius: 12px;
            padding: 12px;
            transition: 0.3s;
            text-decoration: none;
            display: block;
        }
        .btn-call:hover { background: #000; color: #fff; }

        @media (max-width: 991px) {
            .section-heading h2 { font-size: 2rem; }
            .bank-body { padding: 30px; }
        }
    </style>
</head>
<body>

<section class="city-hero" style="background: #2a2b2c; border-bottom: 1px solid #3d3e3f; padding-top: 80px; padding-bottom: 80px;">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center custom-breadcrumb">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="<?=site_url()?>" class="text-white-50 text-decoration-none fs-5 transition-link">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-danger fs-5 fw-bold d-flex align-items-center" aria-current="page">
                           Payment Details
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION -->
<section class="payment-section">
    <div class="container">
        <div class="row g-5">

            <!-- LEFT SIDE: BANK INFO -->
            <div class="col-lg-8">
                <div class="section-heading">
                    <span class="tag">Official Banking Info</span>
                    <h2>Secure Payment Gateways</h2>
                    <p class="lead text-muted">Your payment is completely secure with us. Please use the bank details provided below to process your transaction.</p>
                </div>

                <!-- PREMIUM BANK CARD -->
                <div class="bank-card">
                    <div class="bank-header">
                        <div>
                            <i class="bi bi-shield-check"></i>
                            CURRENT ACCOUNT
                        </div>
                        <span class="bank-badge">STATE BANK OF INDIA</span>
                    </div>

                    <div class="bank-body">
                        <div class="row g-5">
                            <div class="col-md-6">
                                <div class="info-group">
                                    <label>Account Holder Name</label>
                                    <p>Choudhary Packers and Movers</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-group">
                                    <label>Account Number</label>
                                    <p class="highlight-num">1234 5678 9012 <button class="copy-btn"><i class="bi bi-files"></i> Copy</button></p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-group">
                                    <label>IFSC Code (Swift/NEFT)</label>
                                    <p class="text-danger">SBIN0001234</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="info-group">
                                    <label>Branch Office</label>
                                    <p>Main Branch, City Center Plaza</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TRUST FEATURES -->
                <div class="row g-4 mt-3">
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="icon-circle bg-red-soft">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h5 class="fw-bold">GST Compliant Billing</h5>
                            <p class="text-muted">A 100% genuine GST invoice will be sent to your WhatsApp and Email after every payment.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box">
                            <div class="icon-circle bg-yellow-soft">
                                <i class="bi bi-lock"></i>
                            </div>
                            <h5 class="fw-bold">Encrypted Transaction</h5>
                            <p class="text-muted">Direct bank transfer (NEFT/IMPS) is the most secure method. Please avoid unreliable third-party apps.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDEBAR -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top:40px;">
                    
                    <div class="help-card">
                        <div class="avatar-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="fw-bold">Accounts Helpdesk</h4>
                        <p class="text-muted">For any assistance regarding payments, please contact our billing team.</p>
                        
                        <div class="d-grid gap-3 mt-4">
                            <a href="tel:+919876543210" class="btn btn-call btn-lg fw-bold">
                                <i class="bi bi-telephone-fill me-2"></i> +91 98765 43210
                            </a>
                            <a href="#" class="btn btn-success btn-lg fw-bold rounded-12 shadow-sm" style="background: #25D366; border:none; text-decoration: none; color: white;">
                                <i class="bi bi-whatsapp me-2"></i> WhatsApp Support
                            </a>
                        </div>

                        <ul class="trust-list">
                            <li><i class="bi bi-check-circle-fill"></i> Verified Bank Account</li>
                            <li><i class="bi bi-check-circle-fill"></i> No Hidden Charges</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instant Confirmation</li>
                        </ul>
                    </div>

                    <!-- IMPORTANT WARNING -->
                    <div class="note-box shadow-sm">
                        <div class="d-flex gap-2">
                            <i class="bi bi-exclamation-octagon-fill text-danger fs-4"></i>
                            <div>
                                <h6 class="fw-bold text-danger mb-1">Please Note:</h6>
                                <p class="small text-dark mb-0">Always confirm details by calling our official number before making a transfer. We never ask for OTP or PIN.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Simple copy to clipboard functionality
    document.querySelector('.copy-btn').addEventListener('click', function() {
        const accountNumber = "1234 5678 9012";
        const tempInput = document.createElement('input');
        tempInput.value = accountNumber;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
        
        const btn = this;
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="bi bi-check-lg"></i> Copied';
        setTimeout(() => {
            btn.innerHTML = originalText;
        }, 2000);
    });
</script>

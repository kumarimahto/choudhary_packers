
    <style>
       
        .hero-premium {
            position: relative;
            display: flex;
            align-items: center;
            background: radial-gradient(circle at 20% 30%, rgba(227, 30, 36, 0.15) 0%, transparent 50%),
                        radial-gradient(circle at 80% 70%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                        linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 40px 0;
        }

        /* --- TOP BADGE --- */
        .unique-top-btn {
            background: var(--primary-red);
            color: #ffffff;
            padding: 10px 22px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            border: 2px solid var(--primary-red);
        }

        .unique-top-btn i {
            background: #ffffff;
            color: var(--primary-red);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
        }

        .display-text {
            font-weight: 800;
            line-height: 1.1;
        }

        /* --- FEATURE TAGS --- */
        .feature-tag {
            background: transparent;
            padding: 5px 0;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1rem;
            font-weight: 600;
            color: #ffffff;
            border: none;
        }

        .feature-tag i {
            color: var(--soft-gold);
            font-size: 1.4rem;
            filter: drop-shadow(0 0 8px rgba(255, 193, 7, 0.4));
        }

        
        

        /* --- BUTTONS --- */
        .hero-btn {
            width: 220px;
            height: 52px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .call-btn { background: white; color: var(--deep-black); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
        .quote-btn { background: var(--primary-red); color: white; box-shadow: 0 5px 15px rgba(227, 30, 36, 0.2); }
        
        .quote-btn:hover, .call-btn:hover { transform: translateY(-3px); }

    </style>

    <section class="hero-premium">
        <div class="container">
            <div class="row align-items-center ">
                
                <!-- Left Content -->
                <div class="col-lg-8 hero-content">
                    <div class="unique-top-btn">
                        <i class="bi bi-patch-check-fill"></i>
                       Govt. Approved Transporter
                    </div>
                    
                    <h1 class="display-text mb-4">
                        <span style="color: #ffffff;">Choudhary Packers and</span> 
                       
                        <span style="color: var(--soft-gold);">Movers</span>
                    </h1>
                    
                    <p class="fs-6 text-white-50 mb-5" style="max-width: 520px; line-height: 1.6;">
                        Experience India's most loved relocation service. Safe packing, premium handling, and zero-stress shifting with 100% security.
                    </p>

                    <!-- Feature Grid -->
                    <div class="row g-3 mb-5">
                        <div class="col-6">
                            <div class="feature-tag">
                                <i class="bi bi-shield-lock-fill"></i>
                                <span>Premium Security</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-tag">
                                <i class="bi bi-gem"></i>
                                <span>Deluxe Packing</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-tag">
                                <i class="bi bi-lightning-charge-fill"></i>
                                <span>Express Delivery</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-tag">
                                <i class="bi bi-award-fill"></i>
                                <span>Gold Standard Service</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex  align-items-center gap-3 mb-5">
                        <a href="<?=$phonehtml?>" class="hero-btn call-btn">
                            <i class="bi bi-telephone-fill"></i> <?=$phone?>
                        </a>
                        <a href="#quote-form" class="hero-btn quote-btn">
                            Book Your Move <i class="bi bi-chevron-right ms-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Re-designed Professional Form -->
                <div class="col-lg-4 " id="quote-form">
                 <?php $this->load->view('contacts/quoteform.php')?>
                </div>

            </div>
        </div>
    </section>

   
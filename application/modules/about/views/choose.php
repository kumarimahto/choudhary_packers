<?php

$choose_us_data = [
    [
        'title' => 'World Class Packing',
        'description' => 'We use premium multi-layer packaging materials to ensure your delicate items remain scratch-free and secure during the entire transit.',
        'icon' => 'inventory_2',
        'accent_color' => '#ff0000',
        'bg_light' => 'rgba(255, 0, 0, 0.05)'
    ],
    [
        'title' => 'On-Time Delivery',
        'description' => 'Our advanced logistics network ensures that your belongings reach their destination exactly when promised. Reliability is our core promise.',
        'icon' => 'local_shipping',
        'accent_color' => '#f9c80e',
        'bg_light' => 'rgba(249, 200, 14, 0.05)'
    ],
    [
        'title' => 'Professional Team',
        'description' => 'Our staff is professionally trained in handling complex relocations, from heavy furniture to fragile glassware, with maximum care.',
        'icon' => 'badge',
        'accent_color' => '#222222',
        'bg_light' => 'rgba(34, 34, 34, 0.05)'
    ],
    [
        'title' => 'Affordable Pricing',
        'description' => 'Get premium moving services at the most competitive market rates with zero hidden charges and complete transparency in billing.',
        'icon' => 'payments',
        'accent_color' => '#ff0000',
        'bg_light' => 'rgba(255, 0, 0, 0.05)'
    ],
    [
        'title' => '24/7 Support',
        'description' => 'We provide dedicated move coordinators and a 24/7 support line to keep you updated on your shipment status at any given moment.',
        'icon' => 'support_agent',
        'accent_color' => '#f9c80e',
        'bg_light' => 'rgba(249, 200, 14, 0.05)'
    ],
    [
        'title' => 'Comprehensive Insurance',
        'description' => 'To give you complete peace of mind, we offer full transit insurance coverage against any unforeseen circumstances or damages.',
        'icon' => 'verified_user',
        'accent_color' => '#222222',
        'bg_light' => 'rgba(34, 34, 34, 0.05)'
    ]
];
?>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<section class="relocation-section" style="background: linear-gradient(135deg, #fff5f5 0%, #ffe3e3 100%); font-family: 'Poppins', sans-serif; overflow: hidden; position: relative;">
    
    <div style="position: absolute; top: -100px; right: -100px; width: 450px; height: 450px; background: rgba(255,0,0,0.06); border-radius: 50%; filter: blur(80px);"></div>
    <div style="position: absolute; bottom: -50px; left: -50px; width: 350px; height: 350px; background: rgba(249,200,14,0.05); border-radius: 50%; filter: blur(60px);"></div>

    <div class="container-fluid px-lg-5 py-5" style="position: relative; z-index: 2;">
        <!-- Header -->
        <div class="text-center mb-5">
            <h6 class="fw-bold mb-2" style="color: #ff0000; letter-spacing: 3px; text-transform: uppercase; font-size: 0.85rem;">Professional Excellence</h6>
            <h2 class="display-5 fw-800 text-dark mb-3">Why Trust <span style="color: #ff0000;">Choudhary</span> Packers?</h2>
            <div class="mx-auto" style="width: 80px; height: 4px; background: #f9c80e; border-radius: 5px;"></div>
        </div>

        <div class="row g-4 mb-5">
            <?php foreach ($choose_us_data as $item): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="trust-card-premium h-100">
                        <div class="card-content-wrap p-4 text-center" style="background: white; border: 1px solid rgba(255,0,0,0.12);">
                            <div class="icon-portal mb-4 mx-auto">
                                <div class="portal-ring" style="border-color: <?= $item['accent_color']; ?>;"></div>
                                <div class="icon-inner shadow-sm" style="background: <?= $item['bg_light']; ?>;">
                                    <span class="material-symbols-outlined" style="color: <?= $item['accent_color']; ?>; font-size: 2.2rem;">
                                        <?= $item['icon']; ?>
                                    </span>
                                </div>
                            </div>
                            
                            <h4 class="fw-700 text-dark mb-3" style="font-size: 1.25rem;"><?= $item['title']; ?></h4>
                            <p class="text-muted mb-0" style="font-size: 0.92rem; line-height: 1.7; opacity: 0.85;">
                                <?= $item['description']; ?>
                            </p>

                            <!-- Hover Decorative Bar -->
                            <div class="hover-indicator" style="background: <?= $item['accent_color']; ?>;"></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="award-full-width py-5" style="background-color: rgba(255,255,255,0.4); backdrop-filter: blur(10px); border-top: 1px solid rgba(255,0,0,0.1); border-bottom: 1px solid rgba(255,0,0,0.1);">
        <div class="container-fluid px-lg-5">
            <div class="bg-white border rounded-4 overflow-hidden shadow-sm">
                <div class="row align-items-center g-0">
                    
                    <!-- Left Side: Image -->
                    <div class="col-lg-5 p-4 p-md-5 text-center award-img-bg border-end">
                        <div class="cert-wrapper">
                           <img src="<?= base_url('assets/images/about/certificate.jpg'); ?>" class="img-fluid cert-main border">
                            <div class="award-ribbon-tag">
                                <span class="material-symbols-outlined" style="font-size: 1rem;">verified</span> Verified 2019
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Content -->
                    <div class="col-lg-7 p-4 p-md-5">
                        <div class="d-flex align-items-center mb-3">
                            <div style="width: 30px; height: 2px; background: #ff0000;" class="me-2"></div>
                            <span style="color: #ff0000; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Official Recognition</span>
                        </div>
                        
                        <h2 class="fw-800 text-dark mb-1" style="font-size: 2.2rem;">Indian Movers Organization</h2>
                        <h5 class="fw-bold mb-4" style="color: #f9c80e;">Associate Member Certificate</h5>
                        
                        <div class="award-description mb-4">
                            <p class="text-dark" style="font-size: 1.05rem; line-height: 1.7;">
                                This is to certify that <strong style="color: #ff0000;">M/s Choudhary Packers And Movers, Jabalpur</strong> 
                                is an esteemed Associate Member of the <strong class="text-dark">Indian Movers Organization (IMO)</strong>. 
                            </p>
                            <p class="text-muted" style="font-size: 0.95rem;">
                                Awarded in <strong>2019</strong> to <strong>Azad Choudhary</strong>, this recognition reflects our dedication to professional standards and safety in the packing and moving industry.
                            </p>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center p-3 rounded-2 border bg-white">
                                    <span class="material-symbols-outlined text-danger me-3" style="font-size: 1.8rem;">military_tech</span>
                                    <div>
                                        <h6 class="fw-bold mb-0" style="font-size: 0.9rem;">National Quality</h6>
                                        <small class="text-muted">Certified Service</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center p-3 rounded-2 border bg-white">
                                    <span class="material-symbols-outlined text-warning me-3" style="font-size: 1.8rem;">handshake</span>
                                    <div>
                                        <h6 class="fw-bold mb-0" style="font-size: 0.9rem;">Trusted Partner</h6>
                                        <small class="text-muted">IMO Accredited</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3 border-top border-light">
                            <span class="text-dark fw-bold" style="font-size: 0.8rem; letter-spacing: 1px; font-style: italic; opacity: 0.7;">"SABKA VISHWAS IMO KE SAATH"</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .fw-800 { font-weight: 800; }
    .fw-700 { font-weight: 700; }
    
    .trust-card-premium {
        position: relative;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        border-radius: 20px;
        overflow: hidden;
    }

    .card-content-wrap {
        height: 100%;
        border-radius: 20px;
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
        box-shadow: 0 4px 15px rgba(255, 0, 0, 0.04);
    }

    .icon-portal {
        width: 80px;
        height: 80px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .portal-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border: 2px dashed;
        border-radius: 50%;
        opacity: 0.2;
        transition: all 0.8s ease;
    }

    .icon-inner {
        width: 60px;
        height: 60px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
        transition: all 0.4s ease;
    }

    .trust-card-premium:hover {
        transform: translateY(-8px);
    }

    .trust-card-premium:hover .card-content-wrap {
        box-shadow: 0 20px 40px rgba(255, 0, 0, 0.12);
        border-color: #ff0000 !important;
        background: #fff !important;
    }

    .trust-card-premium:hover .portal-ring {
        transform: rotate(180deg);
        opacity: 0.6;
    }

    .trust-card-premium:hover .icon-inner {
        transform: scale(1.1) rotate(5deg);
        border-radius: 50%;
        background: white !important;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .hover-indicator {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0%;
        height: 3px;
        border-radius: 10px 10px 0 0;
        transition: width 0.4s ease;
    }

    .trust-card-premium:hover .hover-indicator {
        width: 60%;
    }

    .award-img-bg { background-color: #ffffff; }
    .cert-wrapper { position: relative; display: inline-block; }
    .cert-main { max-width: 85%; border-radius: 4px; }
    .award-ribbon-tag {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        background: #ff0000;
        color: white;
        padding: 5px 15px;
        border-radius: 4px;
        font-weight: 600;
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        gap: 5px;
        white-space: nowrap;
    }

    @media (max-width: 991px) {
        .award-img-bg { border-end: none !important; border-bottom: 1px solid #eee; }
        .display-5 { font-size: 1.8rem; }
        h2 { font-size: 1.6rem !important; }
    }
</style>
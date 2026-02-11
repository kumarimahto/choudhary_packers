<?php
$states_arr = [
    ['name' => 'Madhya Pradesh', 'image' => 'madhya-pradesh.jpg'],
    
];
?>

<div class="st-service-area py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="state-badge">Nationwide Presence</span>
            <h2 class="state-main-title fw-bold mt-2">All India Services</h2>
            <p class="text-muted small mt-1">
                Trusted packers and movers services across major cities in India
            </p>
            <div class="state-divider mx-auto"></div>
        </div>

        <div class="state-grid">

            <?php foreach ($states_arr as $state): 
                $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $state['name'])));
                $url  = site_url('packers-movers-' . $slug);
            ?>
                <a href="<?= $url; ?>" class="state-link">

                    <div class="state-card">

                        <div class="state-img-wrap">
                            <img 
                                src="<?= base_url('assets/images/state/' . $state['image']); ?>" 
                                alt="<?= $state['name']; ?>" 
                                class="state-img"
                                loading="lazy"
                            >
                            <span class="state-overlay"></span>
                        </div>

                        <div class="state-content">
                            <h5 class="state-title">
                                <?= $state['name']; ?>
                            </h5>
                            <span class="state-subtitle">
                                Packers & Movers
                            </span>
                        </div>

                    </div>

                </a>
            <?php endforeach; ?>

        </div>

    </div>
</div>
<style>/* Section */
.st-service-area {
    background: #f8f9fa;
}

/* Heading */
.state-badge {
    display: inline-block;
    background: rgba(227, 30, 36, 0.1);
    color: #e31e24;
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 1px;
}

.state-main-title {
    font-size: 2rem;
}

.state-divider {
    width: 60px;
    height: 3px;
    background: #e31e24;
    margin-top: 14px;
    border-radius: 2px;
}

/* GRID */
.state-grid {
    display: grid;
    grid-template-columns: repeat(8, 1fr);
    gap: 18px;
}

/* Card */
.state-link {
    text-decoration: none;
}

.state-card {
    background: #ffffff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    transition: all 0.35s ease;
    position: relative;
}

.state-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 22px 45px rgba(0,0,0,0.16);
}

/* Image */
.state-img-wrap {
    position: relative;
}

.state-img {
    width: 100%;
    height: 130px;
    object-fit: cover;
}

.state-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,0.05),
        rgba(0,0,0,0.55)
    );
    opacity: 0;
    transition: opacity 0.3s ease;
}

.state-card:hover .state-overlay {
    opacity: 1;
}

/* Content */
.state-content {
    padding: 14px 12px 18px;
    text-align: center;
}

.state-title {
    font-size: 0.95rem;
    font-weight: 700;
    margin-bottom: 2px;
    color: #111;
}

.state-subtitle {
    font-size: 0.75rem;
    color: #6c757d;
    letter-spacing: 0.5px;
}

/* Responsive */
@media (max-width: 1400px) {
    .state-grid {
        grid-template-columns: repeat(6, 1fr);
    }
}

@media (max-width: 1200px) {
    .state-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 768px) {
    .state-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .state-main-title {
        font-size: 1.6rem;
    }
}
</style>
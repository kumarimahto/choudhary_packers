<?php
$services = [
    [
        'title' => 'Home Shifting',
        'desc'  => 'House relocation services are one of our best offerings. We ensure safe, smooth, and stress-free home shifting.',
        'icon'  => 'bi-house-door-fill',
        'color' => '#e31e24'
    ],
    [
        'title' => 'Commercial Shifting',
        'desc'  => 'We are well-known across India for reliable and professional commercial relocation services.',
        'icon'  => 'bi-building',
        'color' => '#0d6efd'
    ],
    [
        'title' => 'Transportation Service',
        'desc'  => 'We have earned a strong reputation with secure, timely, and efficient transportation services.',
        'icon'  => 'bi-truck',
        'color' => '#198754'
    ],
    [
        'title' => 'Loading & Unloading',
        'desc'  => 'Loading and unloading is a critical relocation process handled carefully by our trained professionals.',
        'icon'  => 'bi-box-seam',
        'color' => '#fd7e14'
    ],
];
?>

<section class="services-section">
    <div class="container">
        <div class="row g-4">

            <?php foreach ($services as $service): ?>
                <div class="col-6 col-lg-3">
                    <div class="service-card colored-card"
                         style="--card-color: <?= $service['color']; ?>">

                        <div class="service-icon">
                            <i class="bi <?= $service['icon']; ?>"></i>
                        </div>

                        <h5><?= $service['title']; ?></h5>
                        <p><?= $service['desc']; ?></p>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<style>
    /* Services Section */
.services-section {
    padding: 40px 0;
    background: #f8f9fa;
}

/* Colored Card */
.colored-card {
    background: linear-gradient(
        135deg,
        var(--card-color),
        color-mix(in srgb, var(--card-color) 80%, #000)
    );
    color: #ffffff;
    border-radius: 16px;
    padding: 30px 20px;
    height: 100%;
    text-align: center;
    box-shadow: 0 14px 35px rgba(0, 0, 0, 0.15);
    transition: all 0.35s ease;
    border: none;
    position: relative;
    overflow: hidden;
}

/* Soft overlay for readability */
.colored-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.15);
    z-index: 0;
}

.colored-card * {
    position: relative;
    z-index: 1;
}

/* Hover */
.colored-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 24px 50px rgba(0, 0, 0, 0.25);
}

/* Icon */
.colored-card .service-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 18px;
    border-radius: 50%;
    background: rgba(255,255,255,0.18);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    color: #ffffff;
    transition: all 0.3s ease;
}

.colored-card:hover .service-icon {
    background: #ffffff;
    color: var(--card-color);
}

/* Text */
.colored-card h5 {
    font-weight: 700;
    font-size: 1.05rem;
    margin-bottom: 10px;
}

.colored-card p {
    font-size: 0.9rem;
    line-height: 1.6;
    opacity: 0.95;
}

/* Mobile */
@media (max-width: 576px) {
    .colored-card {
        padding: 22px 14px;
    }

    .colored-card p {
        font-size: 0.85rem;
    }
}

</style>
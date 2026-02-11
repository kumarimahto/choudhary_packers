

<?php include 'cities_list.php'; ?>


<style>
    :root {
        --primary-red: #e30b0b;
        --dark-bg: #1a1a1a;
        --text-gray: #6c757d;
    }

    .network-section {
        background-color: #fcfcfc;
        padding: 80px 0;
    }

    /* Header Styling */
    .header-group {
        text-align: center;
        margin-bottom: 60px;
    }

    .header-group h1 {
        font-weight: 800;
        font-size: 2.5rem;
        color: #222;
        text-transform: uppercase;
        letter-spacing: -1px;
    }

    .header-group .underline {
        width: 80px;
        height: 5px;
        background: var(--primary-red);
        margin: 15px auto;
        border-radius: 10px;
    }

    /* Unique Card Design */
    .city-card-wrapper {
        position: relative;
        padding: 15px;
        transition: all 0.4s ease;
    }

    .city-card-unique {
        background: #fff;
        border-radius: 25px;
        overflow: hidden;
        position: relative;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Image Container & Overlay */
    .city-img-box {
        position: relative;
        height: 280px;
        overflow: hidden;
    }

    .city-img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s ease;
    }

    /* Active Badge inspired by your image */
    .status-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--primary-red);
        color: white;
        padding: 6px 18px;
        border-radius: 50px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        z-index: 5;
        box-shadow: 0 4px 10px rgba(227, 11, 11, 0.3);
    }

    /* Content Area */
    .city-info {
        padding: 30px 20px;
        text-align: center;
        background: #fff;
        position: relative;
        z-index: 2;
    }

    .city-name {
        font-size: 1.5rem;
        font-weight: 800;
        color: #333;
        margin-bottom: 8px;
        transition: color 0.3s ease;
    }

    .city-text {
        color: var(--text-gray);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 25px;
        height: 45px;
        overflow: hidden;
    }

    /* Floating Button Style */
    .btn-explore {
        background: #fff;
        color: #333;
        border: 2px solid #eee;
        padding: 10px 30px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 13px;
        text-transform: uppercase
        display: inline-block;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    /* HOVER EFFECTS */
    .city-card-wrapper:hover .city-card-unique {
        transform: translateY(-15px);
        box-shadow: 0 25px 50px rgba(0,0,0,0.12);
        border-color: rgba(227, 11, 11, 0.2);
    }

    .city-card-wrapper:hover .city-img-box img {
        transform: scale(1.15);
    }

    .city-card-wrapper:hover .city-name {
        color: var(--primary-red);
    }

    .city-card-wrapper:hover .btn-explore {
        background: var(--primary-red);
        color: #fff;
        border-color: var(--primary-red);
        box-shadow: 0 8px 20px rgba(227, 11, 11, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .header-group h1 { font-size: 1.8rem; }
        .city-img-box { height: 220px; }
    }
</style>

<section class="network-section">
    <div class="container">
        <!-- Header Section -->
        <div class="header-group">
            <h1>Our Network Across India</h1>
            <div class="underline"></div>
            <p class="text-muted">Serving you with reliability and care in all major cities.</p>
        </div>

        <div class="row">
            <?php foreach ($cities as $city): ?>
                <div class="col-lg-4 col-md-6 city-card-wrapper">
                    <div class="city-card-unique">
                        <div class="city-img-box">
                            <span class="status-badge"><i class="fa-solid fa-circle-dot mr-1"></i> ACTIVE</span>
                            <?php
                                $imgBase = base_url('assets/images/location/');
                                $imgName = pathinfo($city['image'], PATHINFO_FILENAME);
                            ?>
                            <img src="<?= $imgBase . $imgName ?>.jpg"
                                 alt="<?= $city['name'] ?>"
                                 onerror="
                                    if(this.src.indexOf('.jpg') !== -1) this.src='<?= $imgBase . $imgName ?>.jpeg';
                                    else if(this.src.indexOf('.jpeg') !== -1) this.src='<?= $imgBase . $imgName ?>.png';
                                    else this.src='https://placehold.co/600x800/eeeeee/999999?text=<?= $city['name'] ?>';
                                 ">
                        </div>

                        <!-- Info Part -->
                        <div class="city-info">
                            <h3 class="city-name"><?= $city['name'] ?></h3>
                            <p class="city-text">
                                <?= $city['description'] ?>
                            </p>
                            <a href="<?= site_url(strtolower(str_replace(' ', '-', $city['name']))) ?>" 
                               class="btn-explore">
                                View Details <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


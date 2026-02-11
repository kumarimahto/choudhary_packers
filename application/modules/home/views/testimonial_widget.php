<?php
$reviews = [
    [
        'name' => 'Ravi Kumar',
        'rating' => 5,
        'text' => 'Excellent service! Packing quality was outstanding and delivery was on time. Highly recommended.',
        'color' => '#e31e24'
    ],
    [
        'name' => 'Anjali Sharma',
        'rating' => 5,
        'text' => 'Very professional team. My household items were delivered safely without any damage.',
        'color' => '#0d6efd'
    ],
    [
        'name' => 'Amit Verma',
        'rating' => 4,
        'text' => 'Smooth shifting experience. Staff was polite and well trained.',
        'color' => '#198754'
    ],
    [
        'name' => 'Neha Singh',
        'rating' => 5,
        'text' => 'Best packers and movers in India. Transparent pricing and great support.',
        'color' => '#fd7e14'
    ],
    [
        'name' => 'Suresh Yadav',
        'rating' => 4,
        'text' => 'On-time delivery and excellent coordination. Very satisfied with the service.',
        'color' => '#6f42c1'
    ],
];
?>
<section class="reviews-section">
    <div class="reviews-overlay">
        <div class="container">

            <div class="text-center mb-5 text-white">
                <h2 class="fw-bold">Customer Reviews</h2>
                <p class="opacity-75">What our customers say about Choudhary Packers & Movers</p>
            </div>

            <!-- SCROLL WRAPPER -->
            <div class="reviews-scroll">

                <?php foreach ($reviews as $review): ?>
                    <div class="review-card" style="--review-color: <?= $review['color']; ?>">

                        <div class="review-header">
                            <div class="review-avatar">
                                <?= strtoupper(substr($review['name'], 0, 1)); ?>
                            </div>
                            <div>
                                <h6><?= $review['name']; ?></h6>
                                <div class="review-stars">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="bi <?= $i <= $review['rating'] ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>

                        <p class="review-text">
                            “<?= $review['text']; ?>”
                        </p>

                        <div class="review-source">
                            <i class="bi bi-google"></i> Google Review
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</section>
<style>
    .reviews-section {
    background: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=2000&auto=format&fit=crop')
        center / cover no-repeat fixed;
    position: relative;
}

.reviews-overlay {
    background: rgba(0, 0, 0, 0.65);
    padding: 40px 0;
}

/* Scroll container */
.reviews-scroll {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    scroll-behavior: smooth;
    padding-bottom: 10px;
}

.reviews-scroll::-webkit-scrollbar {
    height: 8px;
}

.reviews-scroll::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.4);
    border-radius: 10px;
}

/* Review Card */
.review-card {
    min-width: 300px;
    max-width: 300px;
    background: #ffffff;
    border-radius: 18px;
    padding: 22px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.35);
    border-top: 5px solid var(--review-color);
    transition: transform 0.3s ease;
}

.review-card:hover {
    transform: translateY(-6px);
}

/* Header */
.review-header {
    display: flex;
    gap: 12px;
    align-items: center;
    margin-bottom: 12px;
}

.review-avatar {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: var(--review-color);
    color: #fff;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
}

.review-header h6 {
    margin: 0;
    font-weight: 700;
    font-size: 0.95rem;
}

.review-stars {
    color: #fbbc05;
    font-size: 0.85rem;
}

/* Text */
.review-text {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.6;
    margin: 12px 0;
}

/* Source */
.review-source {
    font-size: 0.8rem;
    color: #6c757d;
    display: flex;
    align-items: center;
}

</style>
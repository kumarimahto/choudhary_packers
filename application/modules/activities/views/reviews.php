
<style>
    :root {
        --primary-accent: #ff0707; /* Brand Red */
        --dark-bg: #1a1b1c;
        --text-main: #2d3436;
        --star-color: #f1c40f;
        --card-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background-color: #f4f7fa;
        color: var(--text-main);
    }

    /* --- HERO SECTION --- */
    .city-hero {
        background: #2a2b2c;
        border-bottom: 1px solid #3d3e3f;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .breadcrumb-item + .breadcrumb-item::before { 
        content: ">"; 
        color: rgba(255,255,255,0.4) !important; 
        font-size: 14px;
        padding-left: 12px;
        padding-right: 12px;
    }
    
    .breadcrumb-item a {
        color: rgba(255,255,255,0.6) !important;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn-write-exp {
        background: var(--primary-accent);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.85rem;
        transition: 0.3s;
        box-shadow: 0 10px 20px rgba(255, 7, 7, 0.2);
    }

    .btn-write-exp:hover {
        background: #e60000;
        transform: translateY(-2px);
        box-shadow: 0 15px 25px rgba(255, 7, 7, 0.3);
        color: white;
    }

    /* --- ENHANCED REVIEW CARDS --- */
    .review-card {
        background: white;
        border: none;
        border-radius: 20px;
        padding: 24px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: var(--card-shadow);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .review-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    }

    .avatar-ring {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        background: #fdf2f2;
        color: var(--primary-accent);
        font-size: 1.1rem;
    }

    .rating-badge {
        background: #fff9e6;
        color: #f39c12;
        padding: 4px 10px;
        border-radius: 8px;
        font-weight: 800;
        font-size: 0.85rem;
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .verified-badge {
        color: #27ae60;
        font-size: 0.75rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 3px;
    }

    .move-route {
        font-size: 0.8rem;
        color: #64748b;
        background: #f1f5f9;
        padding: 2px 8px;
        border-radius: 4px;
        display: inline-block;
        margin-top: 5px;
    }

    /* --- STAR RATING FORM --- */
    .star-rating-container {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        gap: 8px;
    }

    .star-rating-container input { display: none; }

    .star-rating-container label {
        font-size: 1.8rem;
        color: #e2e8f0;
        cursor: pointer;
        transition: 0.2s;
    }

    .star-rating-container label:hover,
    .star-rating-container label:hover ~ label,
    .star-rating-container input:checked ~ label {
        color: var(--star-color);
    }

    /* --- MODAL ADJUSTMENTS --- */
    .modal-dialog {
        max-width: 480px;
        margin-top: 10rem; 
    }

    .modal-content { border-radius: 16px; border: none; }
    .modal-header { background: #1a1b1c; color: white; padding: 12px 20px; }
    .form-label { font-size: 0.8rem; font-weight: 600; color: #475569; }
    .form-control { border-radius: 8px; font-size: 0.9rem; border: 1px solid #e2e8f0; }

</style>

<!-- HERO SECTION -->
<section class="city-hero">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-danger fw-bold">Reviews & Feedbacks</li>
                    </ol>
                </nav>
                <h1 class="text-white display-5 fw-bold mb-0">Customer Success Stories</h1>
                <p class="text-white-50 mt-2">See what our 10,000+ happy customers are saying about their shifting experience.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <button class="btn btn-write-exp shadow-lg" data-bs-toggle="modal" data-bs-target="#reviewModal">
                    <i class="bi bi-pencil-square me-2"></i> Post A Review
                </button>
            </div>
        </div>
    </div>
</section>

<!-- REVIEWS GRID -->
<section class="py-5">
    <div class="container">
        <div id="review-feed" class="row g-4">
            <!-- Review Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="review-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-ring">AS</div>
                            <div>
                                <h6 class="fw-bold mb-0">Amit Sharma</h6>
                                <div class="verified-badge"><i class="bi bi-patch-check-fill"></i> Verified Mover</div>
                            </div>
                        </div>
                        <div class="rating-badge">5.0 <i class="bi bi-star-fill"></i></div>
                    </div>
                    <div class="move-route mb-3"><i class="bi bi-truck me-1"></i> Delhi <i class="bi bi-arrow-right mx-1"></i> Mumbai</div>
                    <p class="text-secondary small lh-base">"The service was excellent. The packing quality was top-notch and all items arrived without any damage. The staff was very professional and polite."</p>
                    <div class="mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                        <small class="text-muted">2 days ago</small>
                        <i class="bi bi-quote text-light fs-2"></i>
                    </div>
                </div>
            </div>

            <!-- Review Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="review-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-ring" style="background: #e0f2fe; color: #0369a1;">RK</div>
                            <div>
                                <h6 class="fw-bold mb-0">Rajesh Kumar</h6>
                                <div class="verified-badge"><i class="bi bi-patch-check-fill"></i> Verified Mover</div>
                            </div>
                        </div>
                        <div class="rating-badge">4.5 <i class="bi bi-star-fill"></i></div>
                    </div>
                    <div class="move-route mb-3"><i class="bi bi-truck me-1"></i> Bangalore <i class="bi bi-arrow-right mx-1"></i> Pune</div>
                    <p class="text-secondary small lh-base">"Professional team and timely delivery. They took great care during loading and unloading. The pricing was quite reasonable compared to others."</p>
                    <div class="mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                        <small class="text-muted">1 week ago</small>
                        <i class="bi bi-quote text-light fs-2"></i>
                    </div>
                </div>
            </div>

            <!-- Review Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="review-card">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-ring" style="background: #fef2f2; color: #991b1b;">PK</div>
                            <div>
                                <h6 class="fw-bold mb-0">Priya Kapoor</h6>
                                <div class="verified-badge"><i class="bi bi-patch-check-fill"></i> Verified Mover</div>
                            </div>
                        </div>
                        <div class="rating-badge">5.0 <i class="bi bi-star-fill"></i></div>
                    </div>
                    <div class="move-route mb-3"><i class="bi bi-truck me-1"></i> Gurgaon <i class="bi bi-arrow-right mx-1"></i> Kolkata</div>
                    <p class="text-secondary small lh-base">"They completely took the stress out of shifting. The packing was so good that even my fragile glass items were delivered safely. Thank you!"</p>
                    <div class="mt-3 pt-3 border-top d-flex justify-content-between align-items-center">
                        <small class="text-muted">3 days ago</small>
                        <i class="bi bi-quote text-light fs-2"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODAL FORM -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content shadow-lg">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h6 class="modal-title fw-bold m-0">Write Your Feedback</h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="reviewForm">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Full Name</label>
                            <input type="text" id="revName" class="form-control" placeholder="e.g. Rahul Verma" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email Address</label>
                            <input type="email" id="revEmail" class="form-control" placeholder="rahul@example.com" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Moving From</label>
                            <input type="text" id="revFrom" class="form-control" placeholder="e.g. Delhi" required>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Moving To</label>
                            <input type="text" id="revTo" class="form-control" placeholder="e.g. Mumbai" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label d-block">Overall Rating</label>
                            <div class="star-rating-container">
                                <input type="radio" name="rating" value="5" id="s5" required><label for="s5" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" value="4" id="s4"><label for="s4" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" value="3" id="s3"><label for="s3" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" value="2" id="s2"><label for="s2" class="bi bi-star-fill"></label>
                                <input type="radio" name="rating" value="1" id="s1"><label for="s1" class="bi bi-star-fill"></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Share Your Experience</label>
                            <textarea id="revText" class="form-control" rows="3" placeholder="How was your shifting experience?" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light rounded-pill px-4 btn-sm fw-bold" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitBtn" class="btn btn-danger rounded-pill px-5 fw-bold btn-sm">Submit Now</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
document.getElementById('reviewForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // UI elements
    const submitBtn = document.getElementById('submitBtn');
    const modalElement = document.getElementById('reviewModal');
    const modalInstance = bootstrap.Modal.getInstance(modalElement);
    
    // Get form data
    const name = document.getElementById('revName').value;
    const from = document.getElementById('revFrom').value;
    const to = document.getElementById('revTo').value;
    const rating = document.querySelector('input[name="rating"]:checked').value;
    const text = document.getElementById('revText').value;
    const initials = name.split(' ').map(n => n[0]).join('').toUpperCase();

    // Template for new card
    const newReview = `
        <div class="col-md-6 col-lg-4">
            <div class="review-card border-top border-danger border-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar-ring" style="background: #1a1b1c; color: white;">${initials}</div>
                        <div>
                            <h6 class="fw-bold mb-0">${name} <span class="badge bg-danger ms-1" style="font-size: 8px;">Just Now</span></h6>
                            <div class="verified-badge"><i class="bi bi-patch-check-fill"></i> Verified Mover</div>
                        </div>
                    </div>
                    <div class="rating-badge">${rating}.0 <i class="bi bi-star-fill"></i></div>
                </div>
                <div class="move-route mb-3"><i class="bi bi-truck me-1"></i> ${from} <i class="bi bi-arrow-right mx-1"></i> ${to}</div>
                <p class="text-secondary small lh-base">"${text}"</p>
                <div class="mt-3 pt-3 border-top">
                    <small class="text-muted">Today</small>
                </div>
            </div>
        </div>
    `;

    const feed = document.getElementById('review-feed');
    feed.insertAdjacentHTML('afterbegin', newReview);
    
    modalInstance.hide();
    this.reset();

    setTimeout(() => {
        const firstCard = feed.firstElementChild;
        if (firstCard) {
            firstCard.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }, 400);
});
</script>
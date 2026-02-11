<style>
/* Sidebar & form styles centralised here (moved from service pages) */
.sticky-sidebar-wrapper {
    position: -webkit-sticky;
    position: sticky;
    top: 100px;
    z-index: 100;
    height: fit-content;
    align-self: flex-start;
}
.custom-input {
    background: #fdfdfd;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 0.9rem;
    transition: 0.3s;
}
.custom-input:focus {
    background: #fff;
    border-color: #ff0000;
    box-shadow: 0 0 8px rgba(255, 0, 0, 0.1);
    outline: none;
}
.hover-up { transition: all 0.3s ease; }
.hover-up:hover { transform: translateY(-3px); box-shadow: 0 8px 15px rgba(220, 53, 69, 0.15) !important; }
.letter-spacing-1 { letter-spacing: 1px; }

@media (max-width: 991px) {
    .sticky-sidebar-wrapper { position: static; top: auto; }
}
</style>

<div class="sidebar-card p-4 bg-white shadow-sm rounded-4 mb-4 border-top-red" data-aos="fade-left" data-aos-duration="1000">
    <h4 class="fw-bold mb-4 text-dark border-bottom pb-2">Get a <span class="text-danger">Free Quote</span></h4>
    <form action="#" method="post" class="row g-3">
        <div class="col-12">
            <label class="small fw-bold text-secondary mb-1">Full Name</label>
            <input type="text" name="name" class="form-control custom-input" placeholder="Enter your name">
        </div>
        <div class="col-12">
            <label class="small fw-bold text-secondary mb-1">Email Address</label>
            <input type="email" name="email" class="form-control custom-input" placeholder="Enter your email">
        </div>
        <div class="col-12">
            <label class="small fw-bold text-secondary mb-1">Mobile Number</label>
            <input type="text" name="mobile" class="form-control custom-input" placeholder="Enter mobile number">
        </div>
        <div class="col-12">
            <label class="small fw-bold text-secondary mb-1">Source City</label>
            <input type="text" name="from_city" class="form-control custom-input" placeholder="Current location">
        </div>
        <div class="col-12">
            <label class="small fw-bold text-secondary mb-1">Destination City</label>
            <input type="text" name="to_city" class="form-control custom-input" placeholder="Destination location">
        </div>
        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-danger w-100 py-2 fw-bold rounded-3 shadow-sm hover-up">
                GET QUOTE NOW <i class="bi bi-send-fill ms-2"></i>
            </button>
        </div>
    </form>
</div>

<div class="sidebar-card p-4 rounded-4 mb-4 shadow-sm border position-relative overflow-hidden" 
     style="background: linear-gradient(135deg, #ffffff 0%, #fff9f0 100%);"
     data-aos="fade-up" data-aos-delay="200">
    <div class="position-absolute top-0 end-0 p-3 opacity-10">
        <i class="bi bi-headset display-4 text-danger"></i>
    </div>

    <div class="position-relative z-index-1">
        <div class="d-flex align-items-center mb-3">
            <div class="icon-circle bg-danger-soft text-danger me-3" style="width: 45px; height: 45px; background: rgba(220, 53, 69, 0.1);">
                <i class="bi bi-chat-dots-fill"></i>
            </div>
            <h5 class="fw-bold mb-0 text-dark">Have Questions?</h5>
        </div>

        <p class="text-secondary small mb-4">Don't hesitate to reach out. Our moving experts are ready to assist you anytime.</p>

        <div class="query-box p-3 rounded-3 bg-white border border-danger border-opacity-10 mb-3 text-center">
            <span class="d-block small text-muted text-uppercase letter-spacing-1 mb-1">Call for instant help</span>
            <a href="tel:+919770752457" class="h5 fw-bold text-danger text-decoration-none">+91 97707 52457</a>
        </div>

        <a href="<?=site_url('contact')?>" class="btn btn-danger w-100 fw-bold py-2 rounded-3 shadow-sm hover-up">
            CONTACT NOW <i class="bi bi-arrow-right-circle ms-2"></i>
        </a>
    </div>
</div>

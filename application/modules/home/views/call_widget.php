<section class="call-widget-section">
    <div class="call-widget-card">
        <div class="call-widget-left">
            <div class="call-icon">
                <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="call-text">
                <h4>Need Help With Moving?</h4>
                <p>Call our relocation experts for instant assistance & free quote.</p>
            </div>
        </div>

        <div class="call-widget-actions">
            <a href="tel:9876543210" class="btn-call">
                <i class="bi bi-telephone"></i> Call Now
            </a>
            <a href="https://wa.me/919876543210" target="_blank" class="btn-whatsapp">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
        </div>
    </div>
</section>
<style>
    .call-widget-section {
    padding: 60px 15px;
    background: linear-gradient(135deg, #e31e24, #b81218);
}

.call-widget-card {
    max-width: 1100px;
    margin: auto;
    background: #ffffff;
    border-radius: 20px;
    padding: 28px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.25);
}

/* Left side */
.call-widget-left {
    display: flex;
    align-items: center;
    gap: 18px;
}

.call-icon {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    background: rgba(227,30,36,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #e31e24;
    font-size: 1.8rem;
}

.call-text h4 {
    margin: 0;
    font-weight: 800;
    font-size: 1.25rem;
    color: #111;
}

.call-text p {
    margin: 4px 0 0;
    color: #6c757d;
    font-size: 0.95rem;
}

/* Buttons */
.call-widget-actions {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
}

.btn-call,
.btn-whatsapp {
    padding: 14px 22px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 0.9rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.btn-call {
    background: #e31e24;
    color: #ffffff;
}

.btn-call:hover {
    background: #b81218;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(227,30,36,0.3);
}

.btn-whatsapp {
    background: #25d366;
    color: #ffffff;
}

.btn-whatsapp:hover {
    background: #1ebc57;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(37,211,102,0.35);
}

/* Mobile */
@media (max-width: 768px) {
    .call-widget-card {
        flex-direction: column;
        text-align: center;
    }

    .call-widget-left {
        flex-direction: column;
    }

    .call-widget-actions {
        justify-content: center;
        width: 100%;
    }

    .btn-call,
    .btn-whatsapp {
        width: 100%;
        justify-content: center;
    }
}

</style>
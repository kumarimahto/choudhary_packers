<section class="about-services-section">
    <div class="container">
        <div class="row align-items-center ">

            <!-- LEFT: ABOUT CONTENT -->
            <div class="col-lg-6">
                <span class="section-badge">About Us</span>
                <h2 class="section-title">
                    About <span>Choudhary Packers</span>
                </h2>

                <p class="section-text">
                    Choudhary Packers & Movers is an Indian-based packers and movers enterprise,
                    well known for delivering high-quality relocation services with vital care
                    and professionalism. We proudly serve individuals, families, and businesses
                    across India.
                </p>

                <p class="section-text">
                    With years of hands-on experience, we have built strong expertise in packing
                    and moving services. Our trained professionals closely monitor every stage of
                    the relocation process, ensuring complete safety, reliability, and customer
                    satisfaction.
                </p>

                <p class="section-text">
                    Trust, innovation, and strong infrastructure define our brand. There is no
                    close competition when it comes to the quality and reliability of our services
                    across India.
                </p>
            </div>

            <!-- RIGHT: SERVICE CARDS -->
            <div class="col-lg-6">
                <div class="row g-4">

                    <!-- Service 1 -->
                    <div class="col-12">
                        <div class="about-service-card">
                            <div class="about-service-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="about-service-content">
                                <h5>Local Shifting Services</h5>
                                <p>
                                    Choudhary Packers and Movers has professionals with 8+ years of
                                    experience in the packing and moving business, ensuring safe
                                    and timely local relocations.
                                </p>
                                <a href="<?=site_url('local-shifting')?>" class="service-link">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="col-12">
                        <div class="about-service-card">
                            <div class="about-service-icon">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <div class="about-service-content">
                                <h5>Packing and Moving</h5>
                                <p>
                                    Choudhary Packers & Movers provides a wide range of professional
                                    packing and moving services, ensuring complete protection of
                                    your valuable goods.
                                </p>
                                <a href="<?=site_url('packing-and-moving')?>" class="service-link">View Details</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<style>
    .about-services-section {
    padding: 40px 0;
    background: #f8f9fa;
}

/* Section Heading */
.section-badge {
    display: inline-block;
    background: rgba(227, 30, 36, 0.1);
    color: #e31e24;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    padding: 6px 14px;
    border-radius: 50px;
    margin-bottom: 12px;
}

.section-title {
    font-size: 2.1rem;
    font-weight: 800;
    margin-bottom: 18px;
    color: #111;
}

.section-title span {
    color: #e31e24;
}

.section-text {
    font-size: 0.95rem;
    line-height: 1.7;
    color: #555;
    margin-bottom: 14px;
}

/* Service Cards */
.about-service-card {
    display: flex;
    gap: 18px;
    background: #ffffff;
    border-radius: 16px;
    padding: 22px;
    box-shadow: 0 14px 35px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border-left: 5px solid #e31e24;
}

.about-service-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 22px 45px rgba(0, 0, 0, 0.12);
}

/* Icon */
.about-service-icon {
    width: 54px;
    height: 54px;
    min-width: 54px;
    border-radius: 50%;
    background: rgba(227, 30, 36, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    color: #e31e24;
}

/* Content */
.about-service-content h5 {
    font-weight: 700;
    font-size: 1.05rem;
    margin-bottom: 6px;
    color: #111;
}

.about-service-content p {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #6c757d;
    margin-bottom: 8px;
}

/* Link */
.service-link {
    font-size: 0.85rem;
    font-weight: 600;
    color: #e31e24;
    text-decoration: none;
    transition: color 0.2s;
}

.service-link:hover {
    color: #b81218;
    text-decoration: underline;
}

/* Mobile */
@media (max-width: 768px) {
    .section-title {
        font-size: 1.7rem;
    }

    .about-service-card {
        flex-direction: column;
        text-align: left;
    }
}

</style>
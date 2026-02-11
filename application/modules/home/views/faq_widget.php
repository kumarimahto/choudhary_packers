<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 align-items-start">

            <!-- LEFT: FAQ ACCORDION -->
            <div class="col-12 col-lg-8">
                <div class="mb-4">
                    <span class="badge bg-danger mb-2">FAQs</span>
                    <h2 class="fw-bold">Frequently Asked Questions</h2>
                    <p class="text-muted mb-0">
                        Everything you need to know about our packing and moving services.
                    </p>
                </div>

                <div class="accordion accordion-flush" id="faqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item mb-3 border rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq1">
                                Why choose Choudhary Packers and Movers?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                We offer professional packing, trained staff, modern equipment,
                                and complete safety assurance for all types of relocations.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item mb-3 border rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq2">
                                Do you provide insurance for goods?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we provide transit insurance to protect your goods against
                                any unexpected damage during transportation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item mb-3 border rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq3">
                                How much time does the shifting process take?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                The time depends on distance, quantity of goods, and service type.
                                Local shifting is usually completed within the same day.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item mb-3 border rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq4">
                                Do you handle office and commercial shifting?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                Yes, we specialize in office and commercial relocations with
                                minimal downtime and complete confidentiality.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item mb-3 border rounded">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq5">
                                How can I get a moving quote?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                You can request a free quote by calling us, filling out the
                                inquiry form, or contacting us via WhatsApp.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT: CALL / QUESTION CARD -->
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body p-4 text-center">
                        <div class="mb-3">
                            <i class="bi bi-question-circle-fill text-danger fs-1"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Still Have Questions?</h5>
                        <p class="text-muted mb-4">
                            If you didn’t find your answer, feel free to call or message our
                            relocation experts for quick assistance.
                        </p>

                        <a href="<?=$phonehtml?>"
                            class="btn btn-danger w-100 mb-2 fw-semibold">
                            <i class="bi bi-telephone-fill me-2"></i> Call Now
                        </a>

                        <a href="<?=site_url('contacts')?>"
                            class="btn btn-outline-danger w-100 fw-semibold">
                            Ask a Question
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

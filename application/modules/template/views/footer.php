<footer class="footer-wrapper bg-light">

    <!-- MAIN FOOTER -->
    <div class="container">
        <div class="row g-4">

            <!-- BRAND -->
            <div class="col-lg-4 col-md-6">
                <h4 class="fw-bold mb-4">
                    <span style="color:#e30b0b;">CHOUDHARY</span>
                    <span style="color:#ff9c00;">PACKERS & MOVERS</span>
                </h4>
                <p class="text-muted small pe-lg-4 mb-4" style="line-height: 1.6;">
                    A trusted name in professional packing and moving services.
                    We ensure safe handling, zero damage, and timely delivery
                    across India.
                </p>

                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="footer-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-icon"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="footer-icon"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <!-- SERVICES -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-semibold mb-4 text-dark">Services</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="<?= site_url('packing-and-moving') ?>">Packing and Moving</a></li>
                    <li><a href="<?= site_url('transportation') ?>">Transportation</a></li>
                    <li><a href="<?= site_url('local-shifting') ?>">Local Shifting</a></li>
                    <li><a href="<?= site_url('home-relocation') ?>">Home Relocation</a></li>
                    <li><a href="<?= site_url('commercial-shifting') ?>">Commercial Shifting</a></li>
                    <li><a href="<?= site_url('car-carrier') ?>">Car Carrier</a></li>
                    <li><a href="<?= site_url('loading-and-unloading') ?>">Loading &amp; Unloading</a></li>
                    <li><a href="<?= site_url('warehouse-services') ?>">Warehouse Services</a></li>
                    <li><a href="<?= site_url('insurance-services') ?>">Insurance Services</a></li>
                </ul>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-semibold mb-4 text-dark">Quick Links</h6>
                <ul class="list-unstyled footer-links">
                    <li><a href="<?= site_url('about-us') ?>">About Company</a></li>
                    <li><a href="<?= site_url('contacts/contacts') ?>">Contact Us</a></li>
                    <li><a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a></li>
                    <li><a href="<?= site_url('refund-cancellation-policy') ?>">Refund &amp; Cancellation</a></li>
                    <li><a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a></li>
                    <li><a href="<?= site_url('our-branches') ?>">Our Locations</a></li>
                    <li><a href="<?= site_url('contacts/contacts')?>" data-bs-toggle="modal" data-bs-target="#qteModal">Get a quote</a></li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-lg-4 col-md-6">
                <h6 class="fw-semibold mb-4 text-dark">Contact Information</h6>

                <div class="contact-item text-dark">
                    <i class="bi bi-geo-alt-fill"></i>
                   <?=$address?>
                </div>

                <div class="contact-item">
                    <i class="bi bi-telephone-fill"></i>
                    <a href="<?=$phonehtml?>" class="text-decoration-none text-danger">
                       <?=$phone?>
                    </a>
                </div>

                <div class="contact-item">
                    <i class="bi bi-envelope-fill"></i>
                    <a href="<?=$mailhtml?>">
                       <?=$mail?>
                    </a>
                </div>
            </div>

        </div>

        <div class="text-center footer-copyright">
            <p class="small text-muted mb-0">
                © 2026 <strong>Choudhary Packers & Movers</strong>.
                All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<style>
.footer-wrapper {
    background-color: #f8f9fa; 
    color: #333;
    padding-top: 70px; 
    padding-bottom: 40px; 
    border-top: 5px solid #e30b0b; 
}

.footer-wrapper h4 {
    font-size: 1.25rem; 
}

.footer-wrapper p.small {
    font-size: 0.95rem;
}

.footer-links li {
    margin-bottom: 12px; 
}

.footer-links li a {
    color: #555;
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.95rem; 
    display: inline-block;
}

.footer-links li a:hover {
    color: #e30b0b;
    padding-left: 5px; 
}

.footer-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #000;
    font-size: 18px;
    transition: all 0.3s ease;
}

.footer-icon:hover {
    background: #e30b0b;
    color: #fff;
}


.contact-item {
    display: flex;
    align-items: center;
    gap: 15px; /* Icon aur Text ke beech gap */
    margin-bottom: 20px; 
    color: #6c757d;
    font-size: 0.95rem;
}

.contact-item i {
    color: #e30b0b;
    font-size: 18px;
}

.contact-item a {
    color: #333;
    font-weight: bold;
    text-decoration: none; 
    transition: color 0.3s ease;
}

.contact-item a:hover {
    color: #e30b0b;
}

.footer-copyright {
    border-top: 1px solid #ddd;
    padding-top: 25px;
    margin-top: 40px; 
    color: #777;
}

.footer-copyright p.small {
    font-size: 0.85rem; 
}
</style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function () {

        const navOverlay = document.getElementById('navOverlay');
        const openNavBtn = document.getElementById('openNav');
        const openNavBtn2 = document.getElementById('openNav2'); // optional
        const closeNavBtn = document.getElementById('closeNav');
        const mainNav = document.getElementById('mainNav');

        function openNavigation() {
            if (!navOverlay) return;

            navOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';

            const navColumns = document.querySelectorAll('.nav-column');
            navColumns.forEach(col => {
                col.style.animation = 'none';
                col.offsetHeight; // force reflow
                col.style.animation = '';
            });
        }

        function closeNavigation() {
            if (!navOverlay) return;

            navOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        /* OPEN BUTTONS */
        if (openNavBtn) {
            openNavBtn.addEventListener('click', openNavigation);
        }

        if (openNavBtn2) {
            openNavBtn2.addEventListener('click', openNavigation);
        }

        /* CLOSE BUTTON */
        if (closeNavBtn) {
            closeNavBtn.addEventListener('click', closeNavigation);
        }

        /* CLICK OUTSIDE TO CLOSE */
        if (navOverlay) {
            navOverlay.addEventListener('click', function (e) {
                if (e.target === navOverlay) closeNavigation();
            });
        }

        /* ESC KEY CLOSE */
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && navOverlay.classList.contains('active')) {
                closeNavigation();
            }
        });

        /* STICKY NAV EFFECT */
        window.addEventListener('scroll', function () {
            if (!mainNav) return;

            if (window.scrollY > 50) {
                mainNav.classList.add('scrolled');
            } else {
                mainNav.classList.remove('scrolled');
            }
        });

        /* MOBILE CHECK */
        function checkMobileView() {
            const isMobile = window.innerWidth <= 768;
            const mainNavContact = document.querySelector('.main-nav-contact');

            if (mainNavContact) {
                mainNavContact.style.display = isMobile ? 'none' : 'flex';
            }
        }

        checkMobileView();
        window.addEventListener('resize', checkMobileView);

    });
</script>


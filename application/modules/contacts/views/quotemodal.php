
<div class="modal fade" id="qteModal" tabindex="-1" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
            <div class="modal-header bg-danger text-white py-3">
                <h5 class="modal-title fw-bold" id="qteModalLabel">
                    <i class="fas fa-file-invoice-dollar me-2"></i>Get a free quote
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form method="post" id="quotemodal" onsubmit="return false">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-danger border-end-0"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control bg-light border-start-0 ps-0" name="name" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-danger border-end-0"><i class="fas fa-phone"></i></span>
                                <input type="tel" class="form-control bg-light border-start-0 ps-0" name="phone" placeholder="Mobile Number" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-danger border-end-0"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control bg-light border-start-0 ps-0" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-danger border-end-0"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" class="form-control bg-light border-start-0 ps-0" name="mfrom" placeholder="Moving From (City)">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-danger border-end-0"><i class="fas fa-truck-loading"></i></span>
                                <input type="text" class="form-control bg-light border-start-0 ps-0" name="mto" placeholder="Moving To (City)">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <span class="input-group-text bg-light text-danger border-end-0 align-items-start pt-2"><i class="fas fa-comment-dots"></i></span>
                                <textarea name="message" rows="4" class="form-control bg-light border-start-0 ps-0" placeholder="Write Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="resultquotemodal" class="mt-3"></div>
                </form>
            </div>
            <div class="modal-footer border-0 p-3">
                <button id="clearbquotemodal" type="button" class="btn btn-outline-secondary px-4 fw-bold">
                    <i class="fas fa-eraser me-2"></i>Clear
                </button>
                <button id="submitbquotemodal" type="button" class="btn btn-warning px-4 fw-bold shadow-sm">
                    Submit Quote <i class="fas fa-paper-plane ms-2"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    #qteModal .form-control:focus {
        border-color: #ced4da;
        box-shadow: none;
        background-color: #fff !important;
    }
    #qteModal .input-group-text {
        border-color: #ced4da;
    }
</style>

<script type="text/javascript">
    (function($){
        $(function() {
            $('#submitbquotemodal').on('click', function() {
                $('#resultquotemodal').html("<div class='alert alert-success'><i class='fas fa-check-circle me-2'></i>Thank you! Your quote request successfully submitted. We'll respond soon.</div>");
                $('#quotemodal').trigger('reset');
                setTimeout(function(){ $('#resultquotemodal').html(''); $('#qteModal').modal('hide'); }, 1400);
            });
            
            $('#clearbquotemodal').on('click', function() {
                $('#quotemodal').trigger('reset');
                $('#resultquotemodal').html('');
            });
        });
    })(jQuery);
</script>

<script>
    document.getElementById('clearbquotemodal').addEventListener('click', function() {
        const form = document.getElementById('quotemodal');
        form.querySelectorAll('input, textarea').forEach(field => {
            field.value = ''; 
        });
    });
</script>
<style>
    /* --- REFINED FORM CARD --- */
    .quote-card {
        background: var(--glass-bg);
        border-radius: var(--card-radius);
        padding: 0;
        box-shadow: 0 40px 80px rgba(0, 0, 0, 0.5);
        position: relative;
        color: var(--deep-black);
        z-index: 10;
        overflow: hidden;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .quote-card-header {
        background: #000;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    .quote-card-header h4 {
        margin: 0;
        font-weight: 700;
        font-size: 1.3rem;
        letter-spacing: 0.5px;
    }

    .quote-form-body {
        padding: 30px;
    }

    .custom-input-group {
        position: relative;
        margin-bottom: 1.2rem;
    }

    .custom-input-group i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #adb5bd;
        font-size: 1.1rem;
        z-index: 5;
    }

    .custom-input-group .form-control {
        padding-left: 45px;
        height: 55px;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
        background: #fafafa;
        font-size: 0.95rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .custom-input-group .form-control:focus {
        background: #fff;
        border-color: var(--primary-red);
        box-shadow: 0 0 0 4px rgba(227, 30, 36, 0.1);
        outline: none;
    }

    .btn-luxury {
        background: var(--primary-red);
        color: white;
        border: none;
        border-radius: 10px;
        padding: 16px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.95rem;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .btn-luxury:hover {
        background: #c1181d;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(227, 30, 36, 0.2);
    }
</style>

<div class="quote-card">
    <div class="quote-card-header">
        <h4>GET A FREE QUOTE</h4>
    </div>

    <div class="quote-form-body">
        <form>
            <div class="row g-3">
    <div class="col-12 col-md-6">
        <div class="custom-input-group">
            <i class="bi bi-person"></i>
            <input type="text" class="form-control" placeholder="Your Name">
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="custom-input-group">
            <i class="bi bi-telephone"></i>
            <input type="tel" class="form-control" placeholder="Mobile Number">
        </div>
    </div>
</div>


            <div class="custom-input-group">
                <i class="bi bi-geo-alt"></i>
                <input type="text" class="form-control" value="<?=$city?> " placeholder="Moving From (City)">
            </div>

            <div class="custom-input-group">
                <i class="bi bi-geo"></i>
                <input type="text" class="form-control" placeholder="Moving To (City)">
            </div>

            <button type="submit" class="btn btn-luxury mt-2">
                Get Pricing Now
            </button>

            <div class="text-center mt-3">
                <small class="text-muted"><i class="bi bi-shield-check me-1"></i> Your data is 100% secure</small>
            </div>
        </form>
    </div>
</div>
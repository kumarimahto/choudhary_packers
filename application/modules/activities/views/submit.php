<section class="city-hero">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0 bg-transparent align-items-center">
                        <li class="breadcrumb-item d-flex align-items-center">
                            <a href="#" class="text-white-50 text-decoration-none fs-5">Home</a>
                        </li>
                        <li class="breadcrumb-item active text-danger fs-5 fw-bold d-flex align-items-center" aria-current="page">
                            Submit a complaint
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<form action="" method="post" class="p-4 bg-white rounded-4 shadow-sm mx-auto mt-5" style="max-width: 600px;">
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class=mb-3>
         <label for="number" class="form-label fw-bold">Mobile Number</label>
        <input type="tel" class="form-control" id="number" name="number" required>
     </div>
    <div class="mb-3">
        <label for="complaint" class="form-label fw-bold">Complaint</label>
        <textarea class="form-control" id="complaint" name="complaint" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-danger fw-bold px-4">Submit Complaint</button>



<style>

    
  body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background-color: #f8fafc;
        color: var(--text-main);
        overflow-x: hidden;
    }

    .city-hero {
        background: #2a2b2c;
        border-bottom: 1px solid #3d3e3f;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .breadcrumb-item + .breadcrumb-item::before { 
        content: ">"; 
        color: rgba(255,255,255,0.4) !important; 
        font-size: 14px;
        padding-left: 12px;
        padding-right: 12px;
        line-height: 1;
    }
    
    .breadcrumb-item a {
        color: rgba(255,255,255,0.6) !important;
        text-decoration: none;
        transition: 0.3s;
    }

</style>
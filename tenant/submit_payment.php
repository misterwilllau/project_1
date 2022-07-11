<?php include("tenant_includes/header_inc.php"); ?>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <p>William Lau</p>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Tenant Dashboard</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-secondary" href="#">Sign Out</a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-center">
                <a class="p-2 text-muted" href="tenant_announcement.php">Announcement</a>
                <a class="p-2 text-muted" href="submit_payment.php">Submit Payment</a>
                <a class="p-2 text-muted" href="billing_history.php">Billing History</a>
                <a class="p-2 text-muted" href="tenancy_agreement.php">Tenancy Agreement</a>
                <a class="p-2 text-muted" href="complaint.php">Complaint</a>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="file-upload-wrapper">
                        <input type="file" id="input-file-now" class="file-upload" />
                    </div>
                    <br>
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Note to landlord</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Side note for the landlord</small>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                </form>
            </div>
        </div>
        
    </div>

<?php include("tenant_includes/footer_inc.php"); ?>

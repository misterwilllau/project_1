<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <p><?php echo $tenant_fullname ?></p>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Tenant Dashboard</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary" href="process_page/tenant_logout.php">Sign Out</a>
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
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Reminder</h4>
    <p>Your billing is overdue</p>
    <hr>
        <p class="mb-0">After payment, submit receipt <a href="#">here</a></p>
</div>
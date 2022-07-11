<?php session_start();

$tenant_id = $_SESSION['tenant_id'];

// Get the tenant data
include_once("../db_connection.php");
global $dbc;

$tenant_data = mysqli_query($dbc, "SELECT * FROM tenant WHERE tenant_id = '$tenant_id'");

while($row = mysqli_fetch_assoc($tenant_data)) {
    $tenant_id = $row['tenant_id'];
    $tenant_fullname = $row['tenant_fullname'];
}

?>

<?php include("tenant_includes/header_inc.php"); ?>

    <div class="container">
        
        <!-- Navigation -->
        <?php require("tenant_includes/navigation_inc.php") ?>

        <div class="row">
            <div class="col-md-12 mb-5">
                <img src="../assets/img/banner.jpg" class="img-fluid">
                <div class="carousel-caption" style="text-align:left;">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                        IMPORTANT
                    </div>
                    <h1 class="mb-2">
                        Jiraya Apartment has found 1 Covid case, please wear your mask
                    </h1>
                    <div class="fs-12">
                        10 Minutes ago
                    </div>
                </div>     
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-5">
                <img src="../assets/img/banner.jpg" class="img-fluid">
                <div class="carousel-caption" style="text-align:left;">
                    <p class="mb-2">
                        Jiraya Apartment has found 1 Covid case, please wear your mask
                    </p>
                    <div class="fs-12">
                        10 Minutes ago
                    </div>
                </div>     
            </div>
            <div class="col-md-6 mb-5">
                <img src="../assets/img/banner.jpg" class="img-fluid">
                <div class="carousel-caption" style="text-align:left;">
                    <p class="mb-2">
                        Jiraya Apartment has found 1 Covid case, please wear your mask
                    </p>
                    <div class="fs-12">
                        10 Minutes ago
                    </div>
                </div>     
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>   
                            <th>Posted On</th>
                            <th>See Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jiraya Apartment has found 1 Covid case, please wear your mask</td>
                            <td>21/12/2021</td>
                            <td><a href="#" style="color:blue;">See Content</a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>   
                            <th>Posted On</th>
                            <th>See Content</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>
        
    </div>

<?php include("tenant_includes/footer_inc.php"); ?>

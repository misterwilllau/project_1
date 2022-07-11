<?php
session_start();

$landlord_id = $_SESSION['landlord_id'];

// Get the database connection
include_once("../db_connection.php");
global $dbc;

?>

<?php include("landlord_includes/header_inc.php"); ?>
    <?php include("landlord_includes/sidebar_navigation_inc.php"); ?>

    <!-- Content Goes Here -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php include("landlord_includes/topbar_inc.php"); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tenant List</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Total Property -->
                    <div class="col-xl-3 col-md-3 mb-3">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Tenants</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Property -->
                    <div class="col-xl-3 col-md-3 mb-3">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Active</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-check-circle fa-2x text-green" style="color:green;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Property -->
                    <div class="col-xl-3 col-md-3 mb-3">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Pending</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clock fa-2x text-green" style="color:orange;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Property -->
                    <div class="col-xl-3 col-md-3 mb-3">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Overdue</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fab fa-creative-commons-nc fa-2x text-red" style="color:red;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fullname</th>
                                    <th>Property (ID)</th>
                                    <th>Bill</th>     
                                    <th>Status</th>
                                    <th>Rent Until</th>
                                    <th>Edit Tenant</th>
                                    <th>Credential</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Generate all the properties owned by the landlord -->
                                <?php 

                                $get_properties_query = "SELECT tenant.*, property.property_name
                                                         FROM tenant
                                                         INNER JOIN property ON tenant.tenant_property_id = property.property_id
                                                         WHERE tenant.tenant_owner_id = '$landlord_id'";

                                $result = mysqli_query($dbc, $get_properties_query);

                                while($row = mysqli_fetch_assoc($result)) {

                                    $tenant_id              = $row['tenant_id'];
                                    $tenant_fullname        = $row['tenant_fullname'];
                                    $tenant_identity        = $row['tenant_identity'];
                                    $property_name          = $row['property_name'];
                                    $tenant_owner_id        = $row['tenant_owner_id'];
                                    $tenant_contract_length = $row['tenant_contract_length'];
                                    $tenant_contract_start  = $row['tenant_contract_start'];

                                    // Calculation for the data
                                    $date_finish = $tenant_contract_start; 
                                    $date_finish = date('d-m-Y', strtotime($date_finish . ' + ' . $tenant_contract_length . ' years'));                 

                                ?>
                                    <tr>
                                        <td><?php echo $tenant_id ?></td>
                                        <td><?php echo $tenant_fullname ?></td>
                                        <td><?php echo $property_name ?></td>
                                        <td></td>
                                        <td>Active</td>
                                        <td><?php echo $date_finish ?></td>
                                        <td><a href="#" style="color:blue;">Click here to edit</a></td>
                                        <td><a href="sub_pages/tenant_credential.php?tenant_id=<?php echo $tenant_id ?>" style="color:blue;">Click to see</a></td>
                                    </tr>

                                <?php

                                } // end while

                                ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content -->


<?php include("landlord_includes/footer_inc.php"); ?>
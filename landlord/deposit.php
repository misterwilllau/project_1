<?php
session_start();

$landlord_id = $_SESSION['landlord_id'];

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
                    <h1 class="h3 mb-0 text-gray-800">Deposit List</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Total Property -->
                    <div class="col-xl-12 col-md-12 mb-12 mb-5">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Deposit</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300"></i>
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
                                    <th>Tenant Name</th>
                                    <th>Issue Date</th>     
                                    <th>Contract Term</th>
                                    <th>Total Amount</th>
                                    <th>Finish</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <?php

                                    include_once("../db_connection.php");
                                    global $dbc;

                                    // Get all the the deposit & tenant data
                                    $q = "SELECT tenant.tenant_fullname, tenant.tenant_contract_length, tenant.tenant_contract_start, deposit.deposit_id, deposit.deposit_amount
                                          FROM tenant
                                          INNER JOIN deposit ON tenant.tenant_id = deposit.deposit_tenant_id 
                                          WHERE tenant.tenant_owner_id = '$landlord_id'";
                                    $result = mysqli_query($dbc, $q);

                                    while($row = mysqli_fetch_assoc($result)) {
                                        $deposit_id       = $row['deposit_id'];
                                        $tenant_fullname = $row['tenant_fullname'];
                                        $tenant_contract_start = $row['tenant_contract_start'];
                                        $tenant_contract_length = $row['tenant_contract_length'];
                                        $deposit_amount = $row['deposit_amount'];

                                    ?>
                                        <tr>
                                            <td><?php echo $deposit_id ?></td>
                                            <td><?php echo $tenant_fullname ?></td>
                                            <td><?php echo $tenant_contract_start ?></td>
                                            <td><?php echo $tenant_contract_length ?>-Years</td>
                                            <td>RM<?php echo $deposit_amount ?></td>
                                            <td><a href="#" style="color:blue;">Finish</a></td>
                                            <td><a href="#" style="color:red;">Delete</a></td>
                                        </tr>

                                    <?php

                                    } // End while

                                    ?>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tenant Name</th>
                                    <th>Issue Date</th>     
                                    <th>Contract Term</th>
                                    <th>Total Amount</th>
                                    <th>Finish</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
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
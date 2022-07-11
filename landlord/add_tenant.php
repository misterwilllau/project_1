<?php
session_start();

$landlord_id = $_SESSION['landlord_id'];

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
            <div class="container">

                <p>Add Tenant</p>
                <hr>

                <!-- Form goes here -->
                <form action="process_page/add_tenant_process.php" method="post">

                    <!-- Tenant Name -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tenant Name</label>
                            <input type="text" class="form-control" id="inputTenantFullName" name="tenant_fullname">
                            <small id="inputTenantFullName" class="form-text text-muted">Fullname of the tenant</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">NRIC/Passport No.</label>
                            <input type="text" class="form-control" id="inputLocation" name="tenant_identity">
                            <small id="emailHelp" class="form-text text-muted">NRIC of the tenant, if foreginer, input Passport No.</small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Assign to Property</label>
                        <select class="form-control" name="tenant_property_id">
                            <?php

                            $q = "SELECT * FROM property WHERE property_owner_id = '$landlord_id' AND property_occupy_status = 0";
                            $result = mysqli_query($dbc, $q);

                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value=" . $row['property_id'] .">" . $row['property_name'] . "</option>";
                            }


                            ?>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">Assign to available property</small>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="validationTooltipUsername">Contract Length</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="1 / 2 / 3" aria-describedby="validationTooltipUsernamePrepend" name="tenant_contract_length">             
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">Year(s)</span>
                            </div>
                       </div>
                    </div>

                    <div class="form-group">
                        <label for="validationTooltipUsername">Amount of Deposit</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend">RM</span>
                            </div>
                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="200" aria-describedby="validationTooltipUsernamePrepend" name="tenant_deposit">             
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Add Tenant" name="add_tenant_button">

                </form>

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
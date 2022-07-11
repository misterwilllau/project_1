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

                <!-- Content Row -->
                <div class="row">

                    <!-- Total Property -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Property</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-building fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Occupied Property -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Occupied Property</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-building fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Non-Occupied Property -->
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Non-Occupied Property</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-building fa-2x text-gray-300"></i>
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
                                    <!-- <th>ID</th> -->
                                    <th>Location</th>
                                    <th>Property Name</th>     
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <!-- <th>Last Updated</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Generate all the properties owned by the landlord -->
                                <?php 

                                $get_properties_query = "SELECT * FROM property WHERE property_owner_id = '$landlord_id'";
                                $result = mysqli_query($dbc, $get_properties_query);

                                while($row = mysqli_fetch_assoc($result)) {
                                    $property_name = $row['property_name'];
                                    $property_location = $row['property_location'];
                                    $property_address = $row['property_address'];

                                ?>
                                    <tr>
                                        <td><?php echo $property_location ?></td>
                                        <td><?php echo $property_name ?></td>
                                        <td>Vacant</td>
                                        <td><a href="#" style="color:blue;">Click here to edit</a></td>
                                        <td><a href="#" style="color:red;">Delete property</a></td>
                                        <!-- <td>2011/04/25</td> -->
                                    </tr>

                                <?php

                                } // end while

                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th>Location</th>
                                    <th>Property Name</th>     
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <!-- <th>Last Updated</th> -->
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
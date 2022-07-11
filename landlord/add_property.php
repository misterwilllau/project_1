<?php include("landlord_includes/header_inc.php"); ?>
	<?php include("landlord_includes/sidebar_navigation_inc.php"); ?>

	<!-- Content Goes Here -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php include("landlord_includes/topbar_inc.php"); ?>

            <!-- Begin Page Content -->
            <div class="container">

                <p>Add Property</p>
                <hr>

                <!-- Form goes here -->
                <form action="process_page/add_property_process.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Property Internal ID</label>
                        <input type="text" name="property_name" class="form-control" id="inputPropertyName" placeholder="SS02121">
                        <small id="emailHelp" class="form-text text-muted">Code for the Property</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Location</label>
                        <input type="text" name="property_location" class="form-control" id="inputLocation" placeholder="If it's on apartement, write the apartment name (Melawis). If not, write the neighbourhood name (Taman Mutiara Rini)">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                        <textarea class="form-control" name="property_address"></textarea>
                        <small id="emailHelp" class="form-text text-muted">The address of the property</small>
                </div>
                <input type="submit" class="btn btn-primary" value="Add Property" name="add_property_submit">
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
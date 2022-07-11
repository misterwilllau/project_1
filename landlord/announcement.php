<?php include("landlord_includes/header_inc.php"); ?>
	<?php include("landlord_includes/sidebar_navigation_inc.php"); ?>

	<!-- Content Goes Here -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php include("landlord_includes/topbar_inc.php"); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Main Announcement -->
                <div class="row mb-5">
                    
                    <div class="col-md-8">
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

                    <!-- Recent Announcement -->
                    <div class="col-md-4">
                        <div class="row mb-2">
                            <div class="col-md-12">
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
                        <div class="row">
                            <div class="col-md-12">
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
                        
                    </div>

                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>   
                                    <th>Posted On</th>
                                    <th>See Content</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Set as Important</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>Jiraya Apartment has found 1 Covid case, please wear your mask</td>
                                    <td>21/12/2021</td>
                                    <td><a href="#" style="color:blue;">See Content</a></td>
                                    <td><a href="#" style="color:blue;">Click here to edit</a></td>
                                    <td><a href="#" style="color:red;">Remove Announcement</a></td>
                                    <td><a href="#" style="color:red;">Set As Important</a></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>   
                                    <th>Posted On</th>
                                    <th>See Content</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Set as Important</th>
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
<?php
session_start();

include_once("../db_connection.php");
global $dbc;

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
                    <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                   
                </div>

                <div class="row">
                    <div class="col-md-9 col-xs-12">

                        <?php

                        $get_landlord_info_query = "SELECT * FROM landlord WHERE landlord_id = '$landlord_id'";
                        $q_result = mysqli_query($dbc, $get_landlord_info_query);

                        while($row = mysqli_fetch_assoc($q_result)) {

                        ?>

                            <form action="process_page/update_profile_process.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">                         
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="text" name="landlord_firstname" value="<?php echo $row['landlord_firstname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">  
                                        </div>
                                    </div> 
                                    <div class="col-md-6">                         
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last Name</label>
                                            <input type="text" name="landlord_lastname" value="<?php echo $row['landlord_lastname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>     
                                </div>
                                <div class="row">
                                    <div class="col-md-12">                         
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email Address</label>
                                            <input type="email" name="landlord_email" value="<?php echo $row['landlord_email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" disabled>  
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-12">                         
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" name="landlord_username" value="<?php echo $row['landlord_username'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">  
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                    </div> 
                                </div>
                                <input type="submit" name="update_profile_button" class="btn btn-primary" value="Update Profile">
                            </form>

                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="<?php echo 'images/profile_picture/' . $row['landlord_profile_picture'] ?>" alt="Admin" class="img-fluid">
                                            <hr>
                                            <div class="mt-3">
                                                <form action="process_page/update_profile_picture_process.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="landlord_profile_picture">
                                                    </div>
                                                    <input type="submit" class="form-control" value="Change Profile Picture" name="update_profile_pic_button">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php

                        } // End While

                        ?>

                </div>

                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Alibaba Group</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content -->


<?php include("landlord_includes/footer_inc.php"); ?>
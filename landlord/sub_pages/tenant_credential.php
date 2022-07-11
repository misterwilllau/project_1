<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tenant Credential</title>

    <!-- Fonts -->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">

    <!-- CSS Files-->
    <link href="../../assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="../../assets/datatable/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

</head>
<body>
	<div class="container">
	    <header class="blog-header py-3">
	        <div class="row flex-nowrap justify-content-between align-items-center">
	            <div class="col-4 pt-1">
	                <a class="text-primary" href="../tenant.php">Go Back</a>
	            </div>
	        </div>
	    </header>
	    
	    <div class="row mb-2">
	        <div class="col-md-12 mb-5">
                <hr>
                <h3 style="color:black;">LI ZHAO SONG</h3><br>
                <form>
                    <?php

                    include_once("../../db_connection.php");
                    global $dbc;

                    if(isset($_GET['tenant_id'])) {
                        $tenant_id = $_GET['tenant_id'];

                        $q = "SELECT * FROM tenant WHERE tenant_id = '$tenant_id'";
                        $result = mysqli_query($dbc, $q);

                        while($row = mysqli_fetch_assoc($result)) {

                    ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color:black;">Username</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['tenant_identity'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="color:black;">Password</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $row['tenant_identity'] ?>" disabled>
                        </div>

                    <?php
                        } // END WHILE
                    }

                    ?>
                    
                </form>
                 
            </div>
	    </div>
	</div>
</body>
</html>
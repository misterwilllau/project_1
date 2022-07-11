<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Rent Box</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- Favicons -->
        <link href="assets/img/landing_page/favicon.png" rel="icon">
        <link href="assets/img/landing_page/apple-touch-icon.png" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/landing_page/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/landing_page/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/landing_page/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/landing_page/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/landing_page/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/landing_page/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/landing_page/aos/aos.css" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="assets/css/landing_page.css" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.html">Rent Box</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="landlord_register.php">Register as Landlord</a></li>
                        <li><a href="tenant_login.php">Tenant Login</a></li>
                    </ul>
                </nav>
                <!-- .nav-menu -->
                <a href="landlord_login.php" class="get-started-btn scrollto">Landlord Login</a>
            </div>
        </header>
        <!-- End Header -->
        <main id="main">
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact mt-5">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Register as Landlord</h2>
                        <p>Easy way to manage your property as a landlord</p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 mt-12 mt-lg-0">
                            <form action="landing_page_backend/landlord_register_process.php" method="post" class="php-email-form">
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="landlord_firstname" class="form-control" id="name" placeholder="First Name" />
                                 
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="landlord_lastname" id="email" placeholder="Last Name" />
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="landlord_identity" id="subject" placeholder="NRIC NO / Passport No"  />
                                  
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="landlord_email" id="subject" placeholder="Email" />
                             
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="landlord_username" id="subject" placeholder="Username" />
                                   
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="landlord_password" id="subject" placeholder="Password"  />
                                
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="landlord_confirm_password" id="subject" placeholder="Confirm Password" />
       
                                </div>
                                <div class="text-center"><input type="submit" name="landlord_register_submit" value="Register Now"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container d-md-flex py-4">
                <div class="mr-md-auto text-center text-md-left">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Alibaba Group</span></strong>. All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
        <div id="preloader"></div>
        <!-- Vendor JS Files -->
        <script src="assets/vendor/landing_page/jquery/jquery.min.js"></script>
        <script src="assets/vendor/landing_page/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/landing_page/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/landing_page/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/landing_page/counterup/counterup.min.js"></script>
        <script src="assets/vendor/landing_page/venobox/venobox.min.js"></script>
        <script src="assets/vendor/landing_page/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/landing_page/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/landing_page/aos/aos.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/landing_page.js"></script>
    </body>
</html>
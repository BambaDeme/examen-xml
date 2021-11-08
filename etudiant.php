
<?php
    session_start();
    require('connexion.php');
    $id = $_SESSION['id_user'];
    $bdd = connexion();
    $user = $bdd->query("SELECT * FROM users WHERE id = $id");
    $user = $user->fetch();
   
    $examens = $bdd->query("SELECT * FROM examens ");
    

?>
<!DOCTYPE html>
<html lang="fr">

    
<head>
        <meta charset="utf-8" />
        <title>E-xamen - examen en ligne</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <!-- Magnific -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
    </head>

    <body>
        
        
    <?php include("includes/nav_bar.php")?>
        
        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100" style="padding: 100px 70px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Liste des examens </h4>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->
    
        <!-- Start -->
        <section class="section" style="padding: 20px 0px;">
        
            <div class="container">
            
                <div class="row projects-wrapper">

                <?php
                    
                    while($examen = $examens->fetch()){?>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 pb-2 photography">
                        <div class="card border-0 work-container  position-relative d-block overflow-hidden rounded" style="box-shadow:0px 0px 3px lightgrey;">
                            <div class="card-body p-0">
                                
                                    <img src="./images/examen_default1.webp" class="img-fluid" alt="work-image" style="width:80%;align:center;">
                                
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0">
                                        <a href="<?php echo "examen-detail.php?examen=".$examen['id_examen']; ?>" class="text-dark title">
                                            <?php echo $examen['titre'];?>
                                        </a>
                                    </h5>
                                    <h6 class="text-muted tag mb-0">
                                        <?php echo 'Crée le '.$examen['date_creation'];?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        </div><!--end col-->
                <?php
                    }
                ?>

                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by Team 15 DIC1.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Magnific -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/isotope.js"></script>
        <script src="js/portfolio.init.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <script src="../../../unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>

<!-- Mirrored from shreethemes.in/landrick/layouts/page-work-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 20:55:27 GMT -->
</html>
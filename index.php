<?php
    // session_start();
    // if (isset($_SESSION["id_user"]) && !empty($_SESSION["id_user"])) {
    //     header('Location: books.php');
    // }else {
    //     header('Location: login.php');
    // }
?> 


<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>E-examen - DIC2 2021</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Magnific -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="css/owl.theme.default.min.css"/> 
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.php">
                        <img src="images/logo-dark.png" height="24" alt="">
                    </a>
                </div>                 
                <div class="buy-button">
                    <a href="login.php" class="btn btn-primary">Se Connecter</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->
        
        <!-- Hero Start -->
        <section class="bg-half-170 border-bottom agency-wrapper d-table w-100" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7 order-1 order-md-2">
                        <div class="title-heading mt-4 ml-lg-5">
                            <h1 class="heading mb-3">Créative Plateforme <br><span class="text-primary">e-xamen</span></h1>
                            <p class="para-desc text-muted"></p>
                            
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-5 col-md-5 order-2 order-md-1 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <img src="images/illustrator/working_with_computer.svg" class="img-fluid" alt="">
                    </div>
                </div><!--end row-->
            </div><!--end container--> 
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Feature Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-edit-alt h1 text-primary"></i>          
                            </div>

                            <div class="content mt-4">
                                <h5>Ajouter & Modifier</h5>
                                <p class="text-muted mb-0">En tant que enseignant, enregistrer de nouveaux examens, modifiez ceux que vous possédez déjà ou supprimer un livre.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5 mt-sm-0">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-vector-square h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5> Visualiser </h5>
                                <p class="text-muted mb-0">En tant que étudiant,vous pouvez visualiser les examens...</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 col-12 mt-5 mt-sm-0">
                        <div class="features text-center">
                            <div class="image position-relative d-inline-block">
                                <i class="uil uil-file-search-alt h1 text-primary"></i>
                            </div>

                            <div class="content mt-4">
                                <h5>Recherche</h5>
                                <p class="text-muted mb-0">Effectuer une recherche sur votre collection.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            
        </section><!--end section-->
        <!-- Feature End --> 

    
        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-light">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Testi Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Equipe</h4>
                            <!-- <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p> -->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-12 mt-4">
                        <div id="customer-testi" class="owl-carousel owl-theme">
                            <div class="media customer-testi m-2">
                                <img src="images/mesImages/avatar_default.png" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <!-- <p class="text-muted mt-2">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p> -->
                                    <h6 class="text-primary">- Cheikh Ahmadou Bamba DEME <small class="text-muted"></small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/mesImages/avatar_default.png" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    
                                    <h6 class="text-primary">- ISMAILA DANG <small class="text-muted"></small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/mesImages/avatar_default.png" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Mouhammadou Moustapha GAYE <small class="text-muted"></small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/mesImages/avatar_default.png" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Mouhammadou Lamine GNING <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>

                            <div class="media customer-testi m-2">
                                <img src="images/mesImages/avatar_default.png" class="avatar avatar-small mr-3 rounded shadow" alt="">
                                <div class="media-body content p-3 shadow rounded bg-white position-relative">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                    </ul>
                                    <h6 class="text-primary">- Sokhna Maimouna GUEYE <small class="text-muted">Designer</small></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

        </section><!--end section-->
        <!-- Testi End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2020-21 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="" target="_blank" class="text-reset">Team15 DIC1</a>.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        

        <!-- javascript -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script> 
        <script src="js/magnific.init.js"></script> 
        <!-- SLIDER -->
        <script src="js/owl.carousel.min.js "></script>
        <script src="js/owl.init.js "></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>
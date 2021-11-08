<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost:3308;dbname=dic1_projet;charset=utf8','root','');
    $id = $_SESSION['id_user'];
    $user = $bdd->query("SELECT * FROM users WHERE id = $id");
    $user = $user->fetch();
?>
<!DOCTYPE html>
    <html lang="fr">

    
<!-- Mirrored from shreethemes.in/landrick/layouts/account-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 20:54:47 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="shreethemes@gmail.com" />
        <meta name="website" content="http://www.shreethemes.in/" />
        <meta name="Version" content="v2.5.1" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="css/owl.theme.default.min.css"/> 
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->
        
        <?php include("includes/nav_bar.php")?>
        
        <!-- Hero Start -->
        <section class="bg-profile d-table w-100 bg-primary" style="background: url('images/account/bg.png') center center;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-lg-2 col-md-3 text-md-left text-center">
                                        <img src="<?php 
                                        if(!empty($user['photo'])) {
                                            echo $user['photo'];
                                        } else{
                                            echo './images/mesImages/avatar_default.png';
                                        }
                                        ?>" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                    </div><!--end col-->
    
                                    <div class="col-lg-10 col-md-9">
                                        <div class="row align-items-end">
                                            <div class="col-md-7 text-md-left text-center mt-4 mt-sm-0">
                                                <h3 class="title mb-0">
                                                    <?php echo $user['prenom'].' '.$user['nom'];?>
                                                </h3>
                                                <i data-feather="bookmark" class="fea icon-sm icons"></i> <small class="text-muted h6 mr-2"><?php echo $user['occuppation']; ?></small><br>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i> <small class="text-muted h6 mr-2"><?php echo $user['about']; ?></small>
                                                
                                            </div><!--end col-->
                                            
                                        </div><!--end row-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--ed container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Profile Start -->
        <section class="section mt-60">
            <div class="container mt-lg-3">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                        <div class="sidebar sticky-bar p-4 rounded shadow">
                            <div class="widget">
                                <div class="row">

                                    <!-- <div class="col-6 mt-4 pt-2">
                                        <a href="loan_history.php" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-envelope-star"></i></span>
                                            <h6 class="title text-dark h6 my-0">Historique prêts</h6>
                                        </a>
                                    </div> -->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="books.php" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-setting"></i></span>
                                            <h6 class="title text-dark h6 my-0">Liste des livres</h6>
                                        </a>
                                    </div><!--end col-->

                                    <div class="col-6 mt-4 pt-2">
                                        <a href="logout.php" class="accounts rounded d-block shadow text-center py-3">
                                            <span class="pro-icons h3 text-muted"><i class="uil uil-sign-out-alt"></i></span>
                                            <h6 class="title text-dark h6 my-0">Se deconnecter</h6>
                                        </a>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>

                        </div>
                    </div><!--end col-->

                    <div class="col-lg-8 col-12">
                        <div class="card border-0 rounded shadow">
                            <div class="card-body">
                                <h5 class="text-md-left text-center">Détails Personnel :</h5>
                                <form method="POST" action="UserUpdate.php" enctype="multipart/form-data">
                                <div class="mt-3 text-md-left text-center d-sm-flex">
                                    <img src="<?php 
                                        if(!empty($user['photo'])) {
                                            echo $user['photo'];
                                        } else{
                                            echo './images/mesImages/avatar_default.png';
                                        }
                                        ?>" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">
                                    
                                    <div class="mt-md-4 mt-3 mt-sm-0">
                                        <!-- <a href="javascript:void(0)" class="btn btn-primary mt-2">Change Picture</a> -->
                                        <input type="file" class="btn btn-primary mt-2" name="image">
                
                                        <a href="javascript:void(0)" class="btn btn-outline-primary mt-2 ml-2">Delete</a>
                                    </div>
                                </div>

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Prénom</label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input name="prenom" id="first" type="text" class="form-control pl-5" value="<?php echo $user['prenom']; ?>">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Nom</label>
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input name="nom" id="last" type="text" class="form-control pl-5" value="<?php echo $user['nom']; ?>">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Votre Email</label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input name="email" id="email" type="email" class="form-control pl-5" value="<?php echo $user['email']; ?>">
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">
                                                <label>Occupation</label>
                                                <i data-feather="bookmark" class="fea icon-sm icons"></i>
                                                <input name="occuppation" id="occupation" type="text" class="form-control pl-5"  value="<?php echo $user['occuppation']; ?>">
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="form-group position-relative">
                                                <label>Décrivez vous en quelques mots</label>
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea name="description" id="comments" rows="4" class="form-control pl-5" placeholder="Description :" ><?php echo $user['about']; ?></textarea>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Save Changes">
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->

                                
                                <div class="row">
                                    
                                    <div class="col-md-6 mt-4 pt-2"> 
                                        <h5>Change password :</h5>
                                        <?php
                                            if(isset($_GET['erreur']) && $_GET['erreur']==0){
                                                echo '<span class="text-danger">Les mots de pass ne correspondent pas</span>'; ?>
                                                <script>alert("Les mots de pass ne correspondent pas")</script>
                                        <?php
                                            }
                                            if(isset($_GET['success']) && $_GET['success']==1){
                                                echo '<span class="text-success">mot de pass changé avec succés</span>'; ?>
                                                <script>alert("mot de pass changé avec succés")</script>
                                        <?php
                                            }
                                        ?>
                                        <form method="POST" action="passwordUpdate.php">
                                            <div class="row mt-4">
                                                <div class="col-lg-12">
                                                    <div class="form-group position-relative">
                                                        <label>New password :</label>
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="form-control pl-5" placeholder="New password" required="" name="pass">
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-12">
                                                    <div class="form-group position-relative">
                                                        <label>Re-type New password :</label>
                                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                                        <input type="password" class="form-control pl-5" placeholder="Re-type New password" required="" name="confirmPass">
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-12 mt-2 mb-0">
                                                    <button class="btn btn-primary">Save password</button>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Profile Setting End -->

        
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by Team15 DIC1.</p>
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
        <!-- SLIDER -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/owl.init.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <script src="../../../unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>

<!-- Mirrored from shreethemes.in/landrick/layouts/account-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 20:54:47 GMT -->
</html>
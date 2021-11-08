
<?php
    session_start();
    require('connexion.php');
    if (isset($_GET['examen']) && !empty($_GET['examen'])) {
        $id_examen = $_GET['examen'];
        $bdd = connexion();
        $examens = $bdd->query("SELECT * FROM examens WHERE id_examen = $id_examen");

        $id = $_SESSION['id_user'];
        $users = $bdd->query("SELECT * FROM users WHERE id != $id");
        $examen = $examens->fetch();
        
        $fichier_examen = simplexml_load_file($examen['nom_fichier']);
        // echo $fichier_examen->date['mois'];
        $_SESSION['id_examen'] = $_GET['examen'];
    }

?>
<!DOCTYPE html>
    <html lang="fr">

    
<head>
        <meta charset="utf-8" />
        <title>Landrick - Saas & Software Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
    <?php include("includes/nav_bar.php")?>
        
        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100" style="padding:70px 70px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title">  <?php //echo $livre["titre"]?>  </h4>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 user text-muted mr-2"> <span class="text-dark">Module :</span> <?php echo $fichier_examen->module;?></li><br>
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Date :</span> <?php echo $fichier_examen->date['mois'].' / '.$fichier_examen->date['annee'];?> </li><br>
                                <!-- <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Etat: </span><span class="<?php //if($examen['etat']=="disponible"){echo 'text-success';}else{echo 'text-primary';} ?>"> <?php echo $livre['etat'];?> </span></li> -->
                            </ul>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <!-- <li class="breadcrumb-item"><a href="profile.php">Profile</a></li> -->
                                        <li class="breadcrumb-item"><a href="etudiant.php">Liste des examens</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail de l'examen</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->
        
        <!-- Start Work Detail -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <!-- <img src="<?php echo './images/examen_default1.webp';?>" class="img-fluid rounded" alt=""> -->
                    </div>

                    <div class="col-md-10 mt-4 pt-2">
                        <div class="bg-light rounded p-4">
                            <p class="text-muted font-italic mb-0">
                                <?php //print_r($fichier_examen->Questions->Question);?>
                            </p>
                            <?php
                                $i=1;
                                foreach($fichier_examen->Questions->Question as $question){
                                    echo "<h3 class=\"my-4\"  style=\"width: 200px;box-shadow: 3px 5px 3px;\">Question $i</h3>";
                                    $j=1;
                                    foreach($question->partie as $partie){?>
                                       <div style="padding:0px 50px;">
                                           <h5><?php echo "Partie $j" ?></h5>
                                           <p style="padding-left:20px;"><?php echo $partie; ?></p>
                                       </div>

                                <?php
                                    $j++;
                                    }
                                    $i++;
                                }
                            ?>
                        </div>

                        
                        <!-- <div class="row align-items-center">
                            <div class="col-lg-6 mt-4 pt-2">
                                <div class="card work-details rounded bg-light border-0">
                                    <div class="card-body">
                                        <h5 class="card-title border-bottom pb-3 mb-3">Prété à :</h5>
                                        <dl class="row mb-0">
                                            <dt class="col-md-4 col-5">Prenom :</dt>
                                            <dd class="col-md-8 col-7 text-muted"><?php echo $pret['prenom']; ?></dd>

                                            <dt class="col-md-4 col-5">nom :</dt>
                                            <dd class="col-md-8 col-7 text-muted"><?php echo $pret['nom']; ?></dd>

                                            <dt class="col-md-4 col-5">Date du Prêt:</dt>
                                            <dd class="col-md-8 col-7 text-muted"><?php echo $pret['date_pret']; ?></dd>
                                        </dl>  
                                    </div> 
                                    <div class="p-4">
                                        <a href="BookRetour.php?pret=<?php echo $pret['id_pret']; ?>" class="btn btn-primary pull-right" id="">Enregistrer Retour</a>
                                    </div>
                        
                                                        
                                </div>
                            </div>
        
                            <div class="col-lg-6 mt-4 pt-2">
                                <img src="<?php 
                                if(!empty($pret['photo'])){
                                    echo $pret['photo'];
                                }
                                else{
                                    echo './images/mesImages/avatar_default.png';
                                }
                                ?>
                                " class="img-fluid rounded" alt="" style="height:300px;">
                            </div>
                        </div>                                 -->
                                
                                
                                    
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work Detail -->

        
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2019-20 Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
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

<!-- Mirrored from shreethemes.in/landrick/layouts/page-work-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 20:55:49 GMT -->
</html>
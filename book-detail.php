
<?php
    session_start();
    require('connexion.php');
    if (isset($_GET['livre']) && !empty($_GET['livre'])) {
        $id_livre = $_GET['livre'];
        $bdd = connexion();
        $livres = $bdd->query("SELECT * FROM books WHERE id = $id_livre");

        $id = $_SESSION['id_user'];
        $users = $bdd->query("SELECT * FROM users WHERE id != $id");
        $livre = $livres->fetch();

        $_SESSION['id_livre'] = $_GET['livre'];
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
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title">  <?php echo $livre["titre"]?>  </h4>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 user text-muted mr-2"> <span class="text-dark">Auteur :</span> <?php echo $livre["auteur"];?></li><br>
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Date parution:</span> <?php echo $livre['date_parution'];?> </li><br>
                                <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Etat: </span><span class="<?php if($livre['etat']=="disponible"){echo 'text-success';}else{echo 'text-primary';} ?>"> <?php echo $livre['etat'];?> </span></li>
                            </ul>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
                                        <li class="breadcrumb-item"><a href="books.php">Liste des livres</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail du livre</li>
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
                        <img src="<?php 
                                    if(!empty($livre['couverture'])){
                                        echo $livre['couverture']; 
                                    }else{
                                        echo './images/mesImages/book_default.png';
                                    }
                                    ?>" class="img-fluid rounded" alt="">
                    </div>

                    <div class="col-md-10 mt-4 pt-2">
                        <div class="bg-light rounded p-4">
                            <p class="text-muted font-italic mb-0">
                                <?php echo $livre['apercu'];?>
                            </p>
                        </div>

                        <?php
                            if ($livre['etat'] == "prete") {
                                $req = $bdd->query("SELECT users.id,prenom,nom,users.photo,prets.id AS id_pret,prets.id_livre,prets.id_emprunteur,prets.date_pret FROM users,prets WHERE prets.id_livre=$id_livre AND prets.id_emprunteur=users.id");
                                $pret = $req->fetch();
                
                                ?>
                                    <div class="row align-items-center">
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
                                    </div>                                
                                <?php
                            }else {
                                ?>
                                    <div class="col mt-4 pt-2" id="loan_book">
                                        <div class="component-wrapper rounded shadow">
                                            <div class="p-4">
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Logloan_bookForm" class="btn btn-secondary"> prêter ce livre</a>
                                            </div>
                                            <!-- Modal Content Start -->
                                            <div class="modal fade" id="Logloan_bookForm" tabindex="-1" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content rounded shadow border-0">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Prêter ce livre à ? </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form method="POST" action="LoanBook.php">
                                                                <div class="p-4">
                                                                    <div class="form-group mb-0">
                                                                        <select class="form-control custom-select" name="emprunteur">
                                                                            <?php
                                                                                while($user = $users->fetch()){?>
                                                                                    <option value="<?php echo $user['id'];?>" > <?php echo $user['prenom'].' '.$user['nom']; ?> </option>
                                                                            <?php
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <input type="submit" id="submit" name="send" class="submitBnt btn btn-dark" value="Enregistrer">
                                                                        </div><!--end col-->
                                                                    </div>
                                                                </div>                                                      
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                   
                                                        </div>    
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                 <?php
                            }
                            ?>
                                    <!-- Modifier Informations livre -->
                                    <div class="col mt-4 pt-2" id="update_book">
                                        <div class="component-wrapper rounded shadow">
                                            <div class="p-4">
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#Logupdate_bookForm" class="btn btn-primary"> Modifier ce livre</a>
                                                <a href="DeleteBook.php?livre=<?php echo $_GET['livre']; ?>" class="btn btn-danger" id="supprimer"> Supprimer ce livre</a>
                                                <script>
                                                    //function supprimer(){
                                                        document.querySelector('#supprimer').addEventListener('click',function(event){
                                                            if(!confirm('supprimer vraiment ce-livre?')){
                                                                event.preventDefault();

                                                            }
                                                        },false)
                                                    //}
                                                </script>
                                            </div>
                                            <!-- Modal Content Start -->
                                            <div class="modal fade" id="Logupdate_bookForm" tabindex="-1" role="dialog"aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow border-0">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modifier ce livre </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="bg-white p-3 rounded box-shadow">
                                                        <!-- <p class="text-muted mb-0">

                                                        </p> -->
                                                        <form class="rounded shadow p-4" action="UpdateBook.php" method="POST" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group position-relative">
                                                                        <label>Auteur :<span class="text-danger">*</span></label>
                                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                                        <input name="auteur" id="auteur" type="text" class="form-control pl-5" value="<?php echo $livre['auteur']; ?>" required>
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group position-relative">
                                                                        <label>Titre :<span class="text-danger">*</span></label>
                                                                        <input name="titre" id="titre" type="text" class="form-control pl-5" value="<?php echo $livre['titre']; ?>" required>
                                                                    </div> 
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group position-relative">
                                                                        <label>Date de parution :<span class="text-danger">*</span></label>
                                                                        <!-- <i data-feather="phone" class="fea icon-sm icons"></i> -->
                                                                        <input name="date_parution" id="date_parution" type="date" class="form-control pl-5" value="<?php echo $livre['date_parution']; ?>" required>
                                                                    </div> 
                                                                </div><!--end col-->
                                                                <div class="col-md-12">
                                                                    <div class="form-group position-relative">
                                                                        <label>Résumé :</label>
                                                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                                        <textarea name="apercu" id="apercu" rows="4" class="form-control pl-5" ><?php echo $livre['apercu']; ?></textarea>
                                                                    </div>
                                                                </div><!--end col-->                                    
                                                                <div class="col-md-12">
                                                                    <div class="form-group position-relative">
                                                                        <label>image de couverture :</label>
                                                                        <!-- <input type="file" class="form-control-file" id="fileupload"> -->
                                                                        <input type="file" class="btn btn-primary mt-2" name="image">
                                                                    </div>                                                                               
                                                                </div><!--end col-->
                                                                
                                                            </div><!--end row-->
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Enregistrer">
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                        </form><!--end form-->
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
                                                    <!-- <button type="button" class="btn btn-primary">Enregistrer</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>




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
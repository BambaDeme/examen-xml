
<?php
    session_start();
    
    // $id = $_SESSION['id_user'];
    // $bdd = new PDO('mysql:host=localhost:3308;dbname=dic1_projet;charset=utf8','root','bambademe');
    // $user = $bdd->query("SELECT * FROM users WHERE id = $id");
    // $user = $user->fetch();
    // if(isset($_POST['rechercher'])){
    //     if($_POST['recherche']=='auteur'){
    //         $auteur = $_POST['auteur'];
    //         $livres = $bdd->query("SELECT * FROM books WHERE id_proprietaire = $id AND auteur = $auteur");
    //     }
    // }else{
        // $livres = $bdd->query("SELECT * FROM books WHERE id_proprietaire = $id ");
    //}

?>
<!DOCTYPE html>
<html lang="fr">

    
<!-- Mirrored from shreethemes.in/landrick/layouts/page-work-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 20:55:27 GMT -->
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
        <!-- Magnific -->
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
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
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                           
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="profile.php">Profile</a></li>
                                        <li class="breadcrumb-item"><a href="books.php">Liste des livres</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Recherche de livre</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
    
        <!-- Start -->
        <section class="section">
        
            <div class="container">
                <!-- <form action="books.php" method="POST" id="" >
                <label><span class="text-primary"> Rechercher par: </span></label> 
                <select class="" name="recherche" id="recherche" style="margin-left:20px;">
                    <option value="auteur">auteur</option>
                    <option value="titre">titre</option>
                    <option value="date_parution">date de parution</option>
                </select>
                
                <input name="auteur" id="SearchAuthor" type="text" class="" value="" required placeholder="Entrez le nom de l'auteur" style="margin-left:20px;">
                <script>
                    var recherche = document.querySelector('#recherche')
                    recherche.addEventListener('change',function(){
                        
                    })
                </script>
                <input type="submit" name="rechercher" class="btn btn-primary" value="Rechercher" style="margin-left:20px;">
                </form> -->
                <div class="row projects-wrapper">
                            <!-- Modal Start -->
                            <div class="col mt-4 pt-2" id="modals">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4">
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#SearchForm" class="btn btn-primary"> Rechercher Livre</a>
                                        
                                    </div>

                                    <!-- Modal Content Start -->
                                    <div class="modal fade" id="SearchForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content rounded shadow border-0">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter livre </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="bg-white p-3 rounded box-shadow">
                                                        <!-- <p class="text-muted mb-0">

                                                        </p> -->
                                                        <form class="rounded shadow p-4" action="recherche.php" method="POST" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <div class="form-group position-relative">
                                                                        <label>Auteur :<span class="text-danger">*</span></label>
                                                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                                                        <input name="auteur" id="auteur" type="text" class="form-control pl-5" placeholder="Auteur :" required>
                                                                    </div>
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group position-relative">
                                                                        <label>Titre :<span class="text-danger">*</span></label>
                                                                        <input name="titre" id="titre" type="text" class="form-control pl-5" placeholder="Titre :" required>
                                                                    </div> 
                                                                </div><!--end col-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group position-relative">
                                                                        <label>Date de parution :<span class="text-danger">*</span></label>
                                                                        <!-- <i data-feather="phone" class="fea icon-sm icons"></i> -->
                                                                        <input name="date_parution" id="date_parution" type="date" class="form-control pl-5" placeholder="Date parution :" required>
                                                                    </div> 
                                                                </div><!--end col-->
                                                                <div class="col-md-12">
                                                                    <div class="form-group position-relative">
                                                                        <label>Résumé :</label>
                                                                        <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                                        <textarea name="apercu" id="apercu" rows="4" class="form-control pl-5" placeholder="Résumé du livre :"></textarea>
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
                                    <!-- Modal Content End -->
                                </div>
                            </div><!--end col-->
                            <!-- Modal End -->         
                </div>
                <br>
                <div class="row projects-wrapper">

                <?php
                    if(isset($livres)){

                    
                    while($livre = $livres->fetch()){?>
                        <div class="col-lg-3 col-md-6 col-12 mb-4 pb-2 photography">
                        <div class="card border-0 work-container work-grid position-relative d-block overflow-hidden rounded">
                            <div class="card-body p-0">
                                <a class="mfp-image d-inline-block" href="<?php if(!empty($livre['couverture'])){echo $livre['couverture']; 
                                    }else{
                                        echo './images/mesImages/book_default.png';
                                    } ?>" title="">
                                    <img src="<?php 
                                    if(!empty($livre['couverture'])){
                                        echo $livre['couverture']; 
                                    }else{
                                        echo './images/mesImages/book_default.png';
                                    }
                                    ?>" class="img-fluid" alt="work-image" style="height:250px;width:80%;align:center;">
                                </a>
                                <div class="content bg-white p-3">
                                    <h5 class="mb-0">
                                        <a href="<?php echo "book-detail.php?livre=".$livre['id']; ?>" class="text-dark title">
                                            <?php echo $livre['titre'];?>
                                        </a>
                                    </h5>
                                    <h6 class="text-muted tag mb-0">
                                        <?php echo $livre['auteur'];?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        </div><!--end col-->
                <?php
                    }
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
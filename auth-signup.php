
<!DOCTYPE html>
    <html lang="fr">

    
<!-- Mirrored from shreethemes.in/landrick/layouts/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Aug 2020 20:55:55 GMT -->
<head>
        <meta charset="utf-8" />
        <title>E-examen - DIC2 2021</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <!-- Main css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">

    </head>

    <body>
    
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="index.php" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="mr-lg-5">   
                            <img src="images/user/signup.svg" class="img-fluid d-block mx-auto" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="card login_page shadow rounded border-0">
                            <div class="card-body">
                                <h4 class="card-title text-center">Créer un compte</h4>  
                                <form class="login-form mt-4" method="POST" action="signUp.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">                                               
                                                <label>Prenom <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5" placeholder="Prenom" name="prenom" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">                                               
                                                <label>Nom <span class="text-danger">*</span></label>
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control pl-5"  placeholder="Nom" name="nom" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label> Email <span class="text-danger">*</span></label>
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>mot de passe <span class="text-danger">*</span></label>
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control pl-5" name="mot_de_passe" placeholder="mot de passe" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control" aria-label="Default select example" name="type_compte">
                                                    <option selected disabled>type de compte</option>
                                                    <option value="etudiant">Etudiant</option>
                                                    <option value="enseignant">Enseignant</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>profil <span class="text-danger">*</span></label>
                                                <input type="file" class="btn btn-primary mt-2" name="image">
                    
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary btn-block">Créer compte</button>
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Vous avez déjà un compte ?</small> <a href="login.php" class="text-dark font-weight-bold">Se connecter</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <script src="../../../unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>

</html>
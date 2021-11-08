<?php
    session_start();
    require('connexion.php');
    $bdd = connexion();

    $reponse = $bdd->prepare("SELECT * FROM users WHERE email =:email AND mot_de_passe=:pass");
    $reponse->execute([
        'email'=>$_POST['email'],
        'pass'=>$_POST['mot_de_passe']
    ]);
    if($user = $reponse->fetch()){
        $_SESSION['id_user'] = $user['id'];
        // echo '<pre>';
        // print_r($user);
        // echo '<pre>';
        //echo $_SESSION['id_user'];
        if($user['type_user']=="enseignant"){
            header('Location: enseignant.php');
        }else{
            header('Location: etudiant.php');
        }
    }
    else{
        header('Location: login.php?erreur=1');
    }
?>
<?php
    require('connexion.php');
    $bdd = connexion();

    $req = $bdd->prepare("INSERT INTO users(prenom,nom,email,mot_de_passe,type_user) VALUES(:prenom,:nom,:email,:mot_de_passe,:type_compte)");

    /*if(isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) 
    {
        
        $image = $_FILES['image']['name'];
        $copy = copy($_FILES['image']['tmp_name'], './images/mesImages/'.$_FILES['image']['name']);
        $photo = './images/mesImages/'.$image;
        
    }
    else{
        $photo='';
    }*/

    $req->execute([
        'nom'=>htmlspecialchars($_POST['nom']),
        'prenom'=>htmlspecialchars($_POST['prenom']),
        'email'=>htmlspecialchars($_POST['email']),
        'mot_de_passe'=>htmlspecialchars($_POST['mot_de_passe']),
        'type_compte'=>$_POST['type_compte']
    ]);

    header('Location: login.php');
    // print_r($_POST);
?>
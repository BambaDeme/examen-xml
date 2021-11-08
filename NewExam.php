<?php
session_start();
require('connexion.php');
$bdd = connexion();
$photo = '';
// print_r($_POST);
if(isset($_FILES['fichier_examen']['name']) && !empty($_FILES['fichier_examen']['name'])) 
{
    $examen = $_FILES['fichier_examen']['name'];
    $extension = strtolower(pathinfo($examen, PATHINFO_EXTENSION));
    if($extension != 'xml'){
        header('Location: enseignant.php?erreur=1');
    }else{
        $base_name =  pathinfo($examen, PATHINFO_FILENAME);
        //echo $base_name;
        $name = $base_name;
        //echo $name;

        while(file_exists('./examens/'.$name.'.xml')){
            $name = $base_name.=str_shuffle("12345");
        }
        //echo $name;

        $name = $name.='.xml';
        $copy = copy($_FILES['fichier_examen']['tmp_name'], './examens/'.$name);
        $examen = $name;

       

        $chemin_examen = './examens/'.$examen;

        //echo $chemin_examen;

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();

        $dom->Load($chemin_examen);
        if ($dom->validate()) {
            
            $id = $_SESSION['id_user'];
            $req = $bdd->prepare("INSERT INTO examens(titre,nom_fichier,id_enseignant,date_creation) VALUES(:titre,:nom_fichier,$id,NOW())") ;

            $req->execute([
                'nom_fichier' =>$chemin_examen,
                'titre'=>$_POST['titre']
            ]);
            header('Location: enseignant.php?success=1');

        }else{
            if(file_exists($chemin_examen)){unlink($chemin_examen);}
            header('Location: enseignant.php?erreur=2');
            
        }
    }
    
}
else{
    
    $photo = '';
}

    
// header('Location: books.php');

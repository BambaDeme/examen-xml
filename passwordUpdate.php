<?php
session_start();
if(isset($_POST['pass']) && !empty($_POST['pass']) && $_POST['pass'] == $_POST['confirmPass']){

$bdd = new PDO('mysql:host=localhost:3308;dbname=dic1_projet;charset=utf8','root','');

$id = $_SESSION['id_user'];
$req = $bdd->prepare("UPDATE users SET pass=:pass WHERE id=$id");
$req->execute([
    'pass'=>htmlspecialchars($_POST['pass']),
]);
    header('Location: profile.php?success=1');
}
else{
    header('Location: profile.php?erreur=0');
}
?>
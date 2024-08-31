<?php
$bdd = new PDO('mysql:host=localhost;dbname=formulaire;','root','');
if(isset($_POST['btn'])){
    $nom = htmlspecialchars($_POST['no'])
}

?>
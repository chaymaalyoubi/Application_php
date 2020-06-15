<?php 
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
include("php/connexion_file.php");
$obj=$_POST['objet'];
$projet=$_POST['projet'];
$dep=$_POST['dep'];
$o=json_decode($obj);
$nom=$_POST['nom'];
foreach ($o as $ob) {
$req=$bdd->query("update dep_app set dep_rec=".$ob->depr." , dep_an=".$ob->depa." where jour='".$ob->jour."' and projet=".$projet);
}
$r=$bdd->query("update projets_Quali set deplacement=1 where idProjet=".$projet);    
$from = "alaa@businessintelligence.ma";
$to = "chaymaa.lyo44@gmail.com";
$subject = "Validation Projet ".$nom;
$message = "Bonjour Mme souhaila le projet ".$nom." vient d'être lancée   merci de valider le budget !
Lien projet : www.businessintelligence.ma/zineb/prevalid.php?id=".$projet."&act=valid";
$message = utf8_decode($message); 
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
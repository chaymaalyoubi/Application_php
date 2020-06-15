<?php 


include("php/connexion_file.php");



$id=$_GET['id'];


$rei=$bdd->query('delete from projets_Quali where idProjet='.$id);
$rei2=$bdd->query('delete from participation where idPro='.$id);
$rei3=$bdd->query('delete from approche where idprojet='.$id);





?>
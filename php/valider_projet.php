<?php 





include("php/connexion_file.php");


$idid=$_POST['id'];
$nom=$_POST['nom'];


$rt=$bdd->query('update  projets_Quali  set validation=1 ,comm=null where idProjet='.$idid);



 





?>
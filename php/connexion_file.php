<?php 


        try
{
	$bdd= new PDO('mysql:host=xxx;dbname=xxx;charset=utf8','xxx','xxx');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
  



?>
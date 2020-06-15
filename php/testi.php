<?php 
if (!isset($_SESSION['id']))
{
if (!isset($_SESSION['login']))
header('location:accueil.php');

}
?> 
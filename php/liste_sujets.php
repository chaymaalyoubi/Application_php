<?php 
include("php/connexion_file.php");
$req=$bdd->query("select * from sujets");
while ($req2=$req->fetch())
{

?>

<option  class="form-control" value="<?php echo $req2['idSujet'] ?>"> <?php echo $req2['nomSujet'] ?></option>
<?php 

}

?>
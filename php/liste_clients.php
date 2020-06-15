<?php

include("php/connexion_file.php");

$req=$bdd->query("select * from clients");
while ($req2=$req->fetch())
{

?>

<option  class="form-control" value="<?php echo $req2['idClient'] ?>"> <?php echo $req2['nomClient'] ?></option>
<?php 

}

?>
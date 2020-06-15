<?php 

$nbr=$_GET['nbr'];
$id=$_GET['id'];
$val=$_GET['val'];
?>

<td  class="kk ll">
<?php echo $val ?>
</td>

<td class="kk ">
    
 <span onclick="supprimer_support(<?php echo $id?>)" style=" padding:3px;background:#cf3332;cursor:pointer; text-transform: none; font-size: 0.75rem;color:white">Supprimer</span>
    
</td>
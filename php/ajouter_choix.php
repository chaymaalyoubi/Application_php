<?php 
$i=$_GET['i'];
$k=$_GET['k'];
?>
<td class="kk " style="text-align:unset" >Choix <span class="num_choix"><?php echo $k+1 ?></span></td>
<td style="width:25%" class="kk " align=center>   <input style="width:300px" type="text" class="form-control" id="text_choix"  onchange ="change(<?php echo $k+1?>,this,'<?php echo $i?>')" style=""></input>
 </td>
<td  class="kk " ><span onclick="supprimer_choix(<?php echo $k ?>,<?php echo $i?>)" style=" padding:3px;background:#cf3332;cursor:pointer; text-transform: none; font-size: 0.75rem;color:white">Supprimer</span> </td>




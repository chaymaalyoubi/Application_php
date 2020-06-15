<script></script>
<?php
   include("php/connexion_file.php");
   
   $i=$_GET["i"];
   $v=$_GET["v"];
    if ($v=="Focus Group") $vv=1;
    if ($v=="Triad") $vv=2;
     if ($v=="Quad") $vv=3;
    if ($v=="MFG") $vv=4;
     if ($v=="Shop along") $vv=5;
      if ($v=="IHV") $vv=6;
       if ($v=="IDI") $vv=7;
   
   
   
   
   
   
   
   
   ?>
<div style="padding: 0px 10px 10px 10px;;">
   <div  style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;  padding: unset;">
      <table style="width:100%">
         <tr>
            <td>
               <div  class="ccc
                  " style=" font-weight:100; ;padding: 0px 5px;;color:#dc4f5a"> <i style="font-size:0.94em"class="fas fa-users	"></i> <?php echo $v ?> </div>
               <p  style="display:inline"> </p>
               <p style="font-size: 14px;
                  font-weight: 400;
                  color: #9a9a9a;
                  margin-bottom: 0; line-height: 1.5;  ;padding: 0px 5px ;  margin: 0 0 10px;">Veuillez entrer les informations de l'approche </p>
            </td>
            <td align=right valign=top>
               <i  style="color:#dd4547; cursor:pointer" onclick="supprimer_approche('<?php echo $i?>')" class="fa fa-times-circle "></i>
            </td>
         </tr>
      </table>
      <input type="text" style="display:none" id="type" value="<?php echo $vv?>">
      <table style="width:100%; margin-bottom:30px">
         <tr>
            <td style="display:none">
               id  
               <input type="number" id="idoo" class="form-control" value="0" >
            </td>
            <td style="width:<?php if ($vv!=1 and $vv!=4) echo "25%"; ?>">
               Date  
               <input type="date" id="dato" class="form-control" class="ddt" onchange="check_date(this,this.value)">
            </td>
            <td style="width:<?php if ($vv!=1 and $vv!=4) echo "25%";  ?>" >
               Heure 
               <input type="time" id="timo" class="form-control">
            </td>
            <td style="width:<?php if ($vv!=1 and $vv!=4) echo "25%";  ?>">
               Csp
               <select class="form-control" id="selectoo">
                  <option value=1>
                     A+
                  </option>
                  <option value=2>
                     AB
                  </option>
                  <option value=3>
                     BC1
                  </option>
                  <option value=5>
                     C2D
                  </option>
                  <option value=5>
                     Professions libérales
                  </option>
                  <option value=6>
                     Commerçants
                  </option>
               </select>
            </td>
            <?php 
               if ($v=="Focus Group" or $v=="MFG")
               {
               ?>
            <td >
               Nombre Min  
               <input type="number" id="nbrmin" class="form-control">
            </td>
            <td >
               Nombre Max  
               <input type="number" id="nbrmax" class="form-control">
            </td>
            <?php
               }
               ?>
            <td style="width:<?php if ($vv!=1 and $vv!=4) echo "25%"; else echo '15%';?>">
               Lieu
               <input type="text"  class="form-control" id="lieu" >
            </td>
         </tr>
      </table>
      <br>
   </div>
</div>
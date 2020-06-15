<?php 
   $i=$_GET['i'];
   $v=$_GET['v'];
   
   
   ?>
<div style="padding: 0px 10px 10px 10px;;">
   <div  style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;  padding: unset;">
      <input type="text" id="input_type" value="<?php echo $v ?>" style="display:none">
      <table style="width:100%">
         <tr>
            <td>
               <div  class="ccc
                  " style=" font-weight:100; ;padding: 0px 5px;"> 
                  <?php 
                     if ($v=="ouverte") echo 'Question Ouverte';
                     else if ($v=="multiple") echo 'Question à choix Multiple';
                     else  echo 'Question à choix Unique';
                     
                     
                     
                     
                     	?>
               </div>
               <p  style="display:inline"> </p>
               <p style="font-size: 14px;
                  font-weight: 400;
                  color: #9a9a9a;
                  margin-bottom: 0; line-height: 1.5;  ;padding: 0px 5px ;  margin: 0 0 10px;">Veuillez entrer le texte de la question </p>
            </td>
            <td align=right valign=top>
               <i  style="color:#dd4547; cursor:pointer" onclick="supprimer_question(<?php echo $i ?>)" class="fa fa-times-circle "></i>
            </td>
         </tr>
      </table>
      <input type="text" style="display:none" id="type" value="">
      <input type="number" style="display:none" id="idoo" value="0">
      <table style="width:100%; margin-bottom:0px">
         <tr>
            <td style="color: #9a9a9a;">
               Text Question
               <textarea id="text_question" class=" zz"  style="border: 1px solid #ced4da;
                  border-radius: .25rem; width:100%" onchange="texte_question(<?php echo $i ?>,this,'<?php echo $v?>')" ></textarea>
            </td>
         </tr>
      </table>
      <?php 
         if($v!="ouverte")
         {
         ?>
      <table style="width:100%">
         <tr>
            <td valign=top id="budgot" style="width:50%">
               <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   ">
                  <div class="ccc
                     " style=" font-weight: 100;  padding:20px ;;padding: 15px 15px 0px;">Choix Question  </div>
                  <p style="font-size: 14px; padding:20px ;
                     font-weight: 400;
                     color: #9a9a9a;
                     margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Vous pouvez ajouter autant de choix <i id="<?php echo 'choix_'.$i?>" onclick="ajouter_choix(<?php echo $i ?>,'<?php echo $v ?>')" class="fas fa-plus-circle" style="color:green; font-size:0.85 rem; cursor:pointer"></i> </p>
                  <span style="margin:10px;margin-top:30px;color:black" id="ppp">
                  Aucun Choix attribué ! <br>
                  </span>
                  <table id="table_choix" align="center" style="width:100%; display:none" cellpadding="0" cellspacing="0" >
                     <tr class="trr">
                        <th class="yy" style="text-align:unset">Choix </th>
                        <th class="yy" style="text-align:center" > Text Choix </th>
                        <th class="yy" style="text-align:center" > supprimer </th>
                     </tr>
                  </table>
                  <br>
               </div>
            </td>
            <td style="width:50%" valign="top">
               <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   ">
                  <div class="ccc
                     " style=" font-weight: 100;  padding:20px ;;padding: 15px 15px 0px;">Apperçu Question</div>
                  <p style="font-size: 14px; padding:20px ;
                     font-weight: 400;
                     color: #9a9a9a;
                     margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Cette Question apparaitra comme ceci  </p>
                  <span style="margin:10px;margin-top:30px;color:black" id="vvv">
                  Aucun Choix attribué !<br> 
                  </span>
                  <table id="table_appercu" align="center" style="width:100%; display:none" cellpadding="0" cellspacing="0" >
                     <tr class="trr">
                        <th id="question_ap" style="color:black">Question</th>
                     </tr>
                  </table>
                  <br>
               </div>
            </td>
         </tr>
      </table>
      <?php 
         }
         
         ?>
   </div>
</div>
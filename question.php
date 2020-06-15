<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <?php 
      session_start();
      include("php/testi.php");
      include("php/connexion_file.php");
      
      
      ?>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <?php 
         $reqq=$bdd->query("select * from projets_Quali where idProjet=".$_GET['id']);
         $reqq2=$reqq->fetch();
         
         ?>
      <title>Projet <?php echo $reqq2['nomProjet'] ?> - Questions Filtres </title>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <!-- Font Awesome JS -->
      <link rel="stylesheet" href="circle.css">
      <meta name="description" content="Immersion Application Quali">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
      <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/blitzer/jquery-ui.css" />
      <!-- Libs for sample codes must be loaded in "head". -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script>
         i=1;
         
         var csp2=[];
         csp2["1"]=350;
         csp2["2"]=300;
         csp2["3"]=200;
         csp2["4"]=150;
         csp2["5"]=400;
         csp2["6"]=300;
         
         var arr=[];
         
  
         supprime=[];

         
         <?php 
            $dt=date('Y-m-d');
            ?>
         

      </script>
      <script type="text/javascript" src="javascript/functions.js"></script>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <link rel="stylesheet" href="style_fin.css">
      <!-- Font Awesome JS -->
   </head>
   <body>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-up' ></i></button>
      <div class="wrapper">
         <!-- Sidebar  -->
         <nav class="sidebar" id="sidebar" style="min-width: 260px;
            max-width: 260px;background-image: url(sidebar-5.jpg); position:fixed; height:100%;index:0;
            width:260px" >
            <div class="koo" style="  height:100%;  ">
               <div class=""  style="padding: 10px 15px;     padding-bottom: 0px; color: #fff;
                  font-weight: 200;     -webkit-font-smoothing: antialiased;
                  font-family: Roboto,'Helvetica Neue',Arial,sans-serif;" >
                  <h3 style="
                     margin-bottom: 0px;
                     display: block; color: #fff;
                     font-size: 20px;
                     color: #fff;
                     text-align: left;
                     font-weight: 400; 
                     opacity:1;
                     line-height: 30px;">
                     <table style="margin-bottom:0px;
                        ; width:100%;margin-bottom:-17px; border-collapse: separate;">
                        <tr>
                           <td style="border:unset;float:right; padding:unset"><img src="tt.jpg" style="width: 35px;
                              "> </td>
                           <td style="border:unset;text-align:inherit; padding:unset; color:white;font-size: 20px; font-weight: 400;line-height: 30px;" valign="bottom "> Immersion</td>
                        </tr>
                     </table>
                     <span style="font-size:11px; margin-bottom:0px;
                        margin-top:0px;margin-left:90px ;color:#d4c7c7b0  
                        ">L'identité de votre marché</span>
                  </h3>
                  <strong> </strong>
               </div>
               <div id="wrapper">
                  <ul  style="border-top: 1px solid rgba(255,255,255,.2); ; margin-bottom:0px ;border-bottom:unset " class="list-unstyled components " >
                     <li style="padding: 1px 15px; line-height: 30px;
                        font-size: 12px;
                        font-weight: 600;
                        text-transform: uppercase;
                        color: #ffffff;" class="">
                        <a href="/app2/indexo2.php" class="qq" id="cityclick" >
                        <i class=" nn fas fa-home"></i>
                        Home
                        </a>
                     </li>
                  </ul>
                  <div id="citydrop" >
                     <div class="dropbottom">
                        <div class="dropmid">
                           <ul  style="border-top: 1px solid rgba(255,255,255,.2); border-bottom:unset " class="list-unstyled components" >
                              <li style="padding: 1px 15px;line-height: 30px;
                                 font-size: 12px;
                                 font-weight: 600;
                                 text-transform: uppercase;
                                 color: #ffffff;">
                                 <a href="liste_projets.php" class="qq" >
                                 <i class=" nn fas fa-edit" style=""></i>
                                 <span style="">Projet</span>
                                 </a>
                              </li>
                              <li   style="padding: 1px 15px;line-height: 30px;
                                 font-size: 12px;
                                 font-weight: 600;
                                 text-transform: uppercase;
                                 color: #ffffff;
                                 border-radius: 20px;">
                                 <a href="controle.php"   class="qq" >
                                 <i class="nn fas fa-user-plus"></i>
                                 Recrutement
                                 </a>
                              </li>
                              <li style="padding: 1px 15px;line-height: 30px;
                                 font-size: 12px;
                                 font-weight: 600;
                                 text-transform: uppercase;
                                 color: #ffffff;" >
                                 <a href="suivi.php" class="qq" >
                                 <i class="nn fas fa-hourglass-half	"></i>
                                 Suivi projet
                                 </a>
                              </li>
                              <li  style="padding: 1px 15px;line-height: 30px;
                                 font-size: 12px;
                                 font-weight: 600;
                                 text-transform: uppercase;
                                 color: #ffffff;">
                                 <a href="sup.php" class="qq" >
                                 <i class="nn fas fa-users"></i>
                                 GRH
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <ul  style=" border-bottom:unset; margin-top:-40px " class="list-unstyled components" >
                  <li  style="padding: 1px 15px; line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" class="">
                     <a href="liste_projets.php" class="qq"  >
                     <i class="nn fa fa-briefcase"></i>
                     Projets
                     </a>
                  </li>
                  <li  style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;">
                     <a href="<?php echo 'initialisation.php?id='.$_GET['id']?>" onclick="initialisation_projet()" class="qq"  >
                     <i class="nn fas fa-donate" style=""></i>
                     <span style="">Initialisation Projet</span>
                     </a>
                  </li>
                  <li class="active" style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a href="" class="qq" style=" border-radius:5px;background-color:#d56768  " >
                     <i class="nn fas fa-question-circle"></i>
                     Questions filtres
                     </a>
                  </li>
                  <li   style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;
                     border-radius: 20px;">
                     <a id="aa" href="<?php echo 'affectation.php?id='.$_GET['id']?>"   >
                     <i class="nn fas fa-chart-pie"></i>
                     Affectation
                     </a>
                  </li>
                  <li  style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a id="bb" href="<?php echo 'deplacement.php?id='.$_GET['id']?>" class="qq" >
                     <i class="nn fas fa-paper-plane		"></i>
                     Deplacement
                     </a>
                  </li>
                  <li style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a id="bb" href="<?php echo 'validation.php?id='.$_GET['id']?>" class="qq" >
                     <i class="nn fas fa-chart-bar	"></i>
                     Budget
                     </a>
                  </li>
                  <li style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;">
                     <a href="dec.php" class="qq">
                     <i class=" nn fas fa-toggle-on"></i>
                     Déconnexion
                     </a>
                  </li>
               </ul>
               <br> <br> <br> <br>
               <ul  style="border-top: unset; border-bottom:unset " class="list-unstyled components" >
                  <li  style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;">
                     <a href="initialisation_projet.php?id=<?php echo $_GET['id']?>" style="background-color:#d56768; border-radius:5px" >
                     Retour
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- Page Content  -->
         <div id="content" style="  padding:0px ;margin-left:260px;  position: relative;
            z-index: 2;
            float: right;
            width: calc(100% - 260px);">
            <nav class="navbar navbar-expand-lg navbar-light " style="margin-bottom: unset;   height:66px;; background:white;background-color: rgb(247, 247, 248);; border-bottom: 1px solid rgba(0,0,0,.1);z-index: 5; position:fixed; width:100%">
               <div class="container-fluid">
                  <span id="spol" style="    font-weight: 400;
                     margin: 2px 0;
                     font-size: 20px;     color: black;">Projet <?php echo $reqq2['nomProjet'] ?> - Questions Filtres </span>               
                  <table style="margin-right:586px" id="select_question" >
                     <tr>
                        <td style=" padding:3px">
                           <select class="form-control" style="display:inline" id="type">
                              <option align=center value="ouverte">Ouverte</option>
                              <option align=center value="multiple">Choix multiple</option>
                              <option align=center value="unique">Choix unique</option>
                           </select>
                        </td>
                        <td style=" padding:3px">    
                           <input  id="bout" type="button" value="Ajouter" name="Creer" onclick="ajouter_question()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" float:left; width: 150px;  color: #fff; 
                              background-color: #1dc7ea;
                              opacity: 1; border-color: #1dc7ea;">
                        </td>
                     </tr>
                  </table>
               </div>
            </nav>
            <div  id="ajoutt" style="margin-top:60px" >
               <div id="attention" align=center style=" display:none;  margin: 75px 20px 0px 20px;;    border-radius: 4px; background-color: #ffbc67; color: #fff;
                  padding: 10px 15px;
                  font-size: 14px;">Merci de patienter, Operation en cours </div>
               <p align="center" id="h33" style="font-size: 25px;
                  font-weight: 400;
                  font:'Raleway', sans-serif;
                  line-height: 1.5;  ;padding: 150px 15px 0px;  margin: 0 0 10px; display:none">Choisissez une Question pour commencer !</p>
               <div style="padding: 20px 25px 10px 25px;;">
                  <div  style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;  padding: unset;">
                     <div  class="ccc
                        " style=" font-weight:100; ;padding: 10px 10px 0px 10px; "> 
                        1er niveau de filtre
                     </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px ;  margin: 0 0 10px;">Veuillez choisir les questions filtres initiales </p>
                     <br>
                     <table align=center style="width:100%;margin-left:30px">
                        <tr>
                           <td style="width:25%; color:#9a9a9a;font-size: 14px; ">
                              Genre 
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['genre']==1) echo 'checked' ?>  value="genre"> 
                           </td>
                           <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">
                              Csp 
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre"  <?php if ($reqq2['csp']==1) echo 'checked' ?> value="csp"> 
                           </td>
                        </tr>
                        <tr>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Age 
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['age']==1) echo 'checked' ?>  value="age">  
                           </td>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Situation maritale 
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['situation_maritale']==1) echo 'checked' ?>  value="situation_maritale"> 
                           </td>
                        </tr>
                        <tr>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Profession 
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['profession']==1) echo 'checked' ?>  value="profession">  
                           </td>
                           <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">
                              Profession du Conjoint
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;" id="filtre"  <?php if ($reqq2['profession_conjoint']==1) echo 'checked' ?> value="profession_conjoint"> 
                           </td>
                        </tr>
                        <tr>
                           <td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">
                              A des enfants 
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['a_des_enfants']==1) echo 'checked' ?> value="a_des_enfants"> 
                           </td>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Nombre d'enfants
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['nombre_enfants']==1) echo 'checked' ?> value="nombre_enfants"> 
                           </td>
                        </tr>
                        <tr>
                           <td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">
                              Nombre de personne dans le foyer  
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['nombre_foyer']==1) echo 'checked' ?> value="nombre_foyer"> 
                           </td>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Salaire du foyer
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['salaire_foyer']==1) echo 'checked' ?> value="salaire_foyer"> 
                           </td>
                        </tr>
                        <tr>
                           <td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">
                              Quartier de residence  
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['residence']==1) echo 'checked' ?> value="residence"> 
                           </td>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Propriété
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['propriete']==1) echo 'checked' ?> value="propriete">  
                           </td>
                        </tr>
                        <tr>
                           <td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">
                              Scolarisation 
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;""filtre"  <?php if ($reqq2['scolarisation']==1) echo 'checked' ?> value="scolarisation"> 
                           </td>
                           <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">
                              Motorisé 
                           </td>
                           <td style="">
                              <input type="checkbox" id="filtre" style="width:10%;" <?php if ($reqq2['motorisé']==1) echo 'checked' ?> value="motorisé"> 
                           </td>
                        </tr>
                        <tr>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Voyage
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['voayage']==1) echo 'checked' ?> value="voayage">  
                           </td>
                           <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">
                              Aide menagere 
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['aide']==1) echo 'checked' ?> value="aide"> 
                           </td>
                        </tr>
                        <tr>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Shopping
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre"  <?php if ($reqq2['shopping']==1) echo 'checked' ?> value="shopping">  
                           </td>
                           <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">
                              Telecom 
                           </td>
                           <td style="">
                              <input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['telecom']==1) echo 'checked' ?> value="telecom"> 
                           </td>
                        </tr>
                        <tr>
                           <td style="width:15%; color:#9a9a9a;font-size: 14px; ">
                              Voilée
                           </td>
                           <td style="">
                              <input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['voilée']==1) echo 'checked' ?> value="voilée"> 
                           </td>
                        </tr>
                     </table>
                     <br>
                  </div>
               </div>
               <div class="container" id="divo" style=" padding-top: 20px; " >
                  <?php 
                     if ($reqq2['filtre']==1)
                     {
                     $i=0;
                         
                     $tt=$bdd->query("select * from Questions where idP=".$_GET['id']);
                     
                     while ($tt2=$tt->fetch())
                     {
                     $v=$tt2['typeQ'];
                     $question=$tt2['texteQ'];
                     
                     
                     ?>    
                  <div id='<?php echo "question".$i ?>' class="<?php echo 'pipo '.$v?>">
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
                                    <i  style="color:#dd4547; cursor:pointer" onclick="supprimer_question('<?php echo $i ?>','<?php echo $tt2['idQ']?>')" class="fa fa-times-circle "></i>
                                 </td>
                              </tr>
                           </table>
                           <input type="text" style="display:none" id="type" value="">
                           <input type="number" style="display:none" id="idoo" value="<?php echo $tt2['idQ']?>">
                           <table style="width:100%; margin-bottom:0px">
                              <tr>
                                 <td style="color: #9a9a9a;">
                                    Text Question
                                    <textarea id="text_question" class=" zz"  style="border: 1px solid #ced4da;
                                       border-radius: .25rem; width:100%" onchange="texte_question(<?php echo $i ?>,this,'<?php echo $v?>')" ><?php echo $tt2['texteQ']?></textarea>
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
                                          margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Vous pouvez ajouter autant de choix <i id="<?php echo 'choix_'.$i?>" onclick="ajouter_choix(<?php echo $i ?>,'<?php echo $v?>')" class="fas fa-plus-circle" style="color:green; font-size:0.85 rem; cursor:pointer"></i> </p>
                                       <span style="margin:10px;margin-top:30px;color:black;display:none" id="ppp">
                                       Aucun Choix attribué ! <br>
                                       </span>
                                       <table id="table_choix" align="center" style="width:100%;" cellpadding="0" cellspacing="0" >
                                          <tr class="trr">
                                             <th class="yy" style="text-align:unset">Choix </th>
                                             <th class="yy" style="text-align:center" > Text Choix </th>
                                             <th class="yy" style="text-align:center" > supprimer </th>
                                          </tr>
                                          <?php 
                                             $tab=[];
                                             
                                             $jj=1;
                                             
                                             while($jj<11)
                                             {
                                             
                                             $kk=$jj-1;
                                             
                                             if ($tt2['choix'.$jj]!=null)
                                             {
                                                 $tab[]=$tt2['choix'.$jj];
                                             ?>
                                          <tr id="<?php echo 'choix'.$kk?>" class="jjj chch">
                                             <td class="kk " style="text-align:unset">Choix <span class="num_choix"><?php echo $jj ?></span></td>
                                             <td style="width:25%" class="kk " align="center">   <input value='<?php echo $tt2['choix'.$jj] ?>'style="width:300px" type="text" class="form-control" id="text_choix" onchange="texte_choix('<?php echo $jj ?>',this,'<?php echo $i ?>')">
                                             </td>
                                             <td class="kk "><span onclick="supprimer_choix('<?php echo $kk?>','<?php echo $i ?>')" style=" padding:3px;background:#cf3332;cursor:pointer; text-transform: none; font-size: 0.75rem;color:white">Supprimer</span> </td>
                                          </tr>
                                          <?php 
                                             }
                                             
                                             $jj++;    
                                             }
                                             
                                             ?>
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
                                       <span style="margin:10px;margin-top:30px;color:black;display:none" id="vvv">
                                       Aucun Choix attribué !<br> 
                                       </span>
                                       <table id="table_appercu" align="center" style="width:100%" cellpadding="0" cellspacing="0" >
                                          <tr class="trr">
                                             <th id="question_ap" style="color:black"><?php echo $question ?></th>
                                          </tr>
                                          <?php 
                                             $c=0;
                                             foreach($tab as $ts)
                                             {
                                             ?>
                                          <tr id="choixx<?php echo $c?>" style="display: block;">
                                             <td class="choixe"><input type="radio"><span class="spl"> <?php echo $ts ?></span></td>
                                          </tr>
                                          <?php 
                                             }
                                             ?>
                                       </table>
                                       <br>
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
                  </div>
                  <?php
                     $i++;    
                         ?>
                  <script>i=i+1;</script>    
                  <?php
                     }
                     
                     
                         
                         
                         
                         
                         
                         
                     }
                     
                     
                     ?>
               </div>
               <p id="valid" style="float:right;margin-right:40px">
                  <br>
                  <input id="valid_q" style="width:150px ;;background-color: #1dc7ea; 
                     opacity: 1; border-color: #1dc7ea;" type="button" onclick="valider_question()" value="<?php if ($reqq2['filtre']==1) echo 'Modifier'; else echo 'Valider'?>" name="ajouter" id="sidebarCollapse" class="btn btn-info">
               </p>
            </div>
         </div>
         <script></script>
         <!--             <div class="line"></div>
            -->
      </div>
      <script></script>
      <script>
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             document.getElementById("myBtn").style.display = "block";
           } else {
             document.getElementById("myBtn").style.display = "none";
           }
         }
         
         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
         }
         
            $("#citydrop").hide();
         
         $("#cityclick").mouseover(function () {
             $("#citydrop").slideDown('slow');
         });
         
         $("#wrapper").mouseleave(function () {
             $("#citydrop").slideUp('slow');
         });
         
         
         
         
         // When the user scrolls down 20px from the top of the document, show the button
         
         
         
      </script>
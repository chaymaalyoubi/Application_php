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
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <!-- Font Awesome JS -->
      <link rel="stylesheet" href="circle.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name='viewport' content='widt	h=device-width, initial-scale=1'>
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
      <div id="dif" style="display:none">
         <div class="ccc
            " style=" font-weight: 400; font-size:18px;  padding:20px ;;padding: 25px 10px 0px;"> <i class="fas fa-plus-circle" style="color:#ff9500;"></i> Villes  </div>
         <p style="font-size: 14px;
            font-weight: 400;
            color: #9a9a9a;
            margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Ajouter des Villes</p>
         <div align=center id="notif_client" style="color:white;padding: 0px 10px 0px;display:none;border-radius: 4px; margin-top:20px; margin-bottom:20px;    
            padding: 10px 15px;
            font-size: 14px;"></div>
         <table id="information rec" style="  padding:10px ;  border-spacing: 1px; margin-bottom:30px "  >
            <tr>
               <td colspan=2 id="supo" style="width:100%; color:#9a9a9a;font-size: 12px;">
                  Ville
                  <input type="text" style="" id="ville_" placeholder="Ville" class="form-control">
               </td>
            </tr>
            <tr>
               <td  id="supo" style="; color:#9a9a9a;font-size: 12px; width:50%">
                  Tarif Train
                  <input type="number" style="" id="train_" placeholder="Tarif Train" class="form-control">
               </td>
               <td  id="supo" style="; color:#9a9a9a;font-size: 12px;">
                  Traif Voiture
                  <input type="number" style="" id="voiture_" placeholder="Tarif Voiture" class="form-control">
               </td>
            </tr>
            <tr>
               <td></td>
               <td id="supo" style="" valign="bottom">
                  <input  type="button" value="Ajouter " name="ajouter" onclick="ajouterv()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 100px;  color: #fff;float:right;
                     background-color: #1dc7ea;
                     opacity: 1; border-color: #1dc7ea;">
               </td>
            </tr>
         </table>
      </div>
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
                  <a href="<?php echo 'initialisation_projet.php?id='.$_GET['id']?>" onclick="ini()" class="qq"  >
                  <i class="nn fas fa-donate" style=""></i>
                  <span style="">Initialisation Projet</span>
                  </a>
               </li>
               <li style="padding: 1px 15px;line-height: 30px;
                  font-size: 12px;
                  font-weight: 600;
                  text-transform: uppercase;
                  color: #ffffff;" >
                  <a href="<?php echo 'question.php?id='.$_GET['id']?>" class="qq"  >
                  <i class="nn fas fa-question-circle"></i>
                  Questions filtres
                  </a>
               </li>
               <li  class="active"  style="padding: 1px 15px;line-height: 30px;
                  font-size: 12px;
                  font-weight: 600;
                  text-transform: uppercase;
                  color: #ffffff;
                  border-radius: 20px;">
                  <a id="aa" href="<?php echo 'affectation.php?id='.$_GET['id']?>"  style=" border-radius:5px;background-color:#d56768  " >
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
                  <a href="" class="qq">
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
                  <a href="question.php?id=<?php echo $_GET['id']?>" style="background-color:#d56768; border-radius:5px" >
                  Retour
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <?php 
         $reqq=$bdd->query("select * from projets_Quali where idProjet=".$_GET['id']);
         $reqq2=$reqq->fetch();
         
         ?>
      <!-- Page Content  -->
      <div id="content" style="  padding:0px ;margin-left:260px;  position: relative;
         z-index: 2;
         float: right;
         width: calc(100% - 260px);">
         <nav class="navbar navbar-expand-lg navbar-light " style="margin-bottom: unset;   height:66px;; background:white;background-color: rgb(247, 247, 248);; border-bottom: 1px solid rgba(0,0,0,.1);z-index: 5; position:fixed; width:100%">
            <div class="container-fluid">
               <span id="spol" style="    font-weight: 400;
                  margin: 2px 0;
                  font-size: 20px;     color: black;">Projet <?php echo $reqq2['nomProjet'] ?> - Affectation </span>               
               <table style="margin-right:586px" id="select_focus" >
                  <tr>
                     <td style=" padding:3px">
                        <select class="form-control" style="display:inline" id="type">
                           <option align=center value="Focus Group">FOCUS GROUP</option>
                           <option align=center value="Triad">Triad</option>
                           <option align=center value="Quad">Quad</option>
                           <option align=center value="MFG">MFG</option>
                           <option align=center value="Shop along">Shop along</option>
                           <option align=center value="IHV">IHV</option>
                           <option align=center value="IDI">IDI</option>
                        </select>
                     </td>
                     <td style=" padding:3px">    
                        <input  id="bout" type="button" value="Ajouter" name="Creer" onclick="ajouter_approche()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" float:left; width: 150px;  color: #fff; 
                           background-color: #1dc7ea;
                           opacity: 1; border-color: #1dc7ea;">
                     </td>
                  </tr>
               </table>
            </div>
         </nav>
         <div  id="ajoutt" style="margin-top:60px" >
            <p align="center" id="h33" style="font-size: 25px;
               font-weight: 400;
               color: #9a9a9a;
               line-height: 1.5;  ;padding: 150px 15px 0px;  margin: 0 0 10px;">Choisissez un Approche pour commencer l'affectation !</p>
            <div class="container" id="divo" style=" padding-top: 20px;f " >
               <div id="attention" align=center style=" display:none;  margin: 0 2px 10px 2px;;    border-radius: 4px; background-color: green; color: #fff;
                  padding: 10px 15px;
                  font-size: 14px;">Succes - Approches bien enregistrés</div>
               <?php 
                  if ($reqq2['affectation']==1)
                  {
                      ?>
               <script>
                  document.getElementById("h33").style.display="none";
               </script>
               <?php 
                  $i=0;
                      
                  $tt=$bdd->query("select * from approche where idprojet=".$_GET['id']);
                  $i=0;
                  while ($tt2=$tt->fetch())
                  {
                      
                  $v=$tt2['type'];
                   if ($v=="Focus Group") $vv=1;
                   if ($v=="Triad") $vv=2;
                    if ($v=="Quad") $vv=3;
                   if ($v=="MFG") $vv=4;
                    if ($v=="Shop along") $vv=5;
                     if ($v=="IHV") $vv=6;
                      if ($v=="IDI") $vv=7;    
                      
                      ?>
               <div id='<?php echo "focus".$i ?>' class="<?php echo 'pipo '.$v?>">
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
                                 <i  style="color:#dd4547; cursor:pointer" onclick="supprimer_approche('<?php echo $i?>','<?php echo $tt2['idA']?>')" class="fa fa-times-circle "></i>
                              </td>
                           </tr>
                        </table>
                        <input type="text" style="display:none" id="type" value="<?php echo $vv?>">
                        <table style="width:100%; margin-bottom:30px">
                           <tr>
                              <td style="display:none">
                                 id  
                                 <input type="number" id="idoo" class="form-control" value="<?php echo $tt2['idA']?>" >
                              </td>
                              <td style="color:gray;width:<?php if ($vv!=1 and $vv!=4 ) echo "25%"; ?>">
                                 Date  
                                 <input type="date" id="dato" class="form-control" value="<?php echo $tt2['date']?>" class="ddt" onchange="check_date(this,this.value)">
                              </td>
                              <td style="color:gray;width:<?php if ($vv!=1 and $vv!=4) echo "25%";  ?>" >
                                 Heure 
                                 <input type="time" id="timo"  value="<?php echo $tt2['heure']?>" class="form-control">
                              </td>
                              <td style="color:gray;width:<?php if ($vv!=1 and $vv!=4) echo "25%";  ?>">
                                 Csp
                                 <select class="form-control" id="selectoo">
                                    <option value=1  <?php if ($tt2['csp']=="A+") echo 'selected'?>>
                                       A+
                                    </option>
                                    <option value=2 <?php if ($tt2['csp']=="AB") echo 'selected'?>>
                                       AB
                                    </option>
                                    <option value=3 <?php if ($tt2['csp']=="BC1") echo 'selected'?>>
                                       BC1
                                    </option>
                                    <option value=4 <?php if ($tt2['csp']=="C2D") echo 'selected'?>>
                                       C2D
                                    </option>
                                    <option value=5 <?php if ($tt2['csp']=="Professions libérales") echo 'selected'?> >
                                       Professions libérales
                                    </option>
                                    <option value=6 <?php if ($tt2['csp']=="Commerçants") echo 'selected'?>>
                                       Commerçants
                                    </option>
                                 </select>
                              </td>
                              <?php 
                                 if ($v=="Focus Group" or $v=="MFG" )
                                 {
                                 ?>
                              <td style="color:gray;">
                                 Nombre Min  
                                 <input type="number" value="<?php echo $tt2['nbrmin']?>"  id="nbrmin" class="form-control">
                              </td>
                              <td style="color:gray;">
                                 Nombre Max  
                                 <input type="number" id="nbrmax" value="<?php echo $tt2['nbrmax']?>"  class="form-control">
                              </td>
                              <?php
                                 }
                                 ?>
                              <td style="color:gray;width:<?php if ($vv!=1) echo "25%"; else echo '15%';?>">
                                 Lieu <input type="text"  class="form-control" id="lieu" value="<?php echo $tt2['ville'] ?>" >
                              </td>
                           </tr>
                        </table>
                        <br>
                     </div>
                  </div>
               </div>
               <script>i=i+1;</script>    
               <?php
                  $i++;
                  
                  
                  
                  }
                  }
                  
                  ?>
            </div>
            <p id="valid" style="float:right;<?php if ($reqq2['affectation']==0) echo 'display:none'?>;margin-right:40px">
               <br>
               <input style="width:150px ;;background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;" type="button" onclick="valider_approche1()" value="<?php if ($reqq2['affectation']==1) echo 'Modifier'; else echo 'Valider'?>" name="ajouter" id="sidebarCollapse" class="btn btn-info">
            </p>
         </div>
         <div id="budgett" style="width:100%;margin:auto;display:none; position: sticky;;">
            <div class="container"  style="padding:20px;  margin-top:60px" >
               <div id="focuso" style="width:100%">
               </div>
            </div>
            <table style="width:100%">
               <tr>
                  <td valign=top id="budgot">
                  </td>
                  <td valign=top>
                     <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:20px">
                        <div class="ccc
                           " style=" font-weight: 100;  padding:20px ;;padding: 15px 15px 0px;">GRH <i class="fas fa-check-circle" style="color:green; font-size:1rem"></i> </div>
                        <p style="font-size: 14px; padding:20px ;
                           font-weight: 400;
                           color: #9a9a9a;
                           margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Ci joint la liste des personnes qui vont participé au projet</p>
                        <table id="table_grh" align="center" style="width:100%" cellpadding="0" cellspacing="0" >
                           <tr class="trr">
                              <th class="yy" style="text-align:unset">Mission </th>
                              <th class="yy" style="text-align:center" > Nom </th>
                           </tr>
                           <tr class="trr">
                              <?php $oo=0; ?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset" >Projet Leader</td>
                              <td id="pl" class="kk <?php if ($oo%2==0) echo 'jjj'?>" ></td>
                           </tr>
                           <tr class="trr">
                              <?php $oo++?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset" >Recruteuse</td>
                              <td id="recc" class="kk <?php if ($oo%2==0) echo 'jjj'?>" >Malika </td>
                           </tr>
                        </table>
                        <br>
                     </div>
                  </td>
               </tr>
            </table>
            <p id="validd2" style=";display:none; margin:20px">
               <br>
               <input id="input_valid2" style="width:150px ; height:40px; float:right;  background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;" type="button" onclick="valider_approche2()" value="VALIDER" name="ajouter" id="sidebarCollapse" class="btn btn-info">
               <input style="width:150px ; height:40px; margin-left:1px ; background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;" type="button" onclick="back()" value="RETOUR" name="ajouter" id="sidebarCollapse" class="btn btn-info">
            </p>
         </div>
         <script>
            function topFunction2() {
              
              aa=document.getElementById("dif").style.display;
              if (aa=="block")
              document.getElementById("dif").style.display="none";
              else 
              document.getElementById("dif").style.display="block";
              
              
            }
            
            
            
            
            
         </script>
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
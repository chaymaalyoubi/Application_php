<?php 
   session_start();
   include("php/testi.php");
   include("php/connexion_file.php");
   $b=[];
   $req=$bdd->query("select * from equipe_quali");
   while ($req2=$req->fetch())
   {
   
   
   $a=new stdClass();
   
   $a->id=$req2['idE'];
   $a->nom=$req2['nomE']." ".$req2['prenomE'];
   $b[]=$a;
   
   }
   
   ?>
<script> var vv=<?php echo json_encode($b) ?></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <?php 
      //include("connexion.php");
      
      
      ?>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Projets en cours</title>
      <!-- Bootstrap CSS CDN -->
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="circle.css">
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/blitzer/jquery-ui.css" />
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
      <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <!-- Font Awesome JS -->
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/blitzer/jquery-ui.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
      <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> <!-- load jquery via CDN -->
      <!-- load our javascript file -->
      <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/blitzer/jquery-ui.css" />
      <!-- Libs for sample codes must be loaded in "head". -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      <script src="jquery.ui.autocomplete.scroll.min.js"></script>
      <meta name="description" content="Immersion Application Quali">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script>
         var titi=['rrr'];
         var titi2=[];
         
         var jj=2;

         
      </script>
      <script type="text/javascript" src="javascript/functions.js"></script>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <link rel="stylesheet" href="style_fin.css">
      <!-- Font Awesome JS -->
   </head>
   <body style="background: #f7f7f8;">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-up' ></i></button>
      <div id="dif" style="display:none">
         <div class="ccc
            " style=" font-weight: 400; font-size:18px;  padding:20px ;;padding: 25px 10px 0px;"> <i class="fas fa-plus-circle" style="color:#ff9500;"></i> Clients  </div>
         <p style="font-size: 14px;
            font-weight: 400;
            color: #9a9a9a;
            margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Ajouter des Clients</p>
         <div align=center id="notif_client" style="color:white;padding: 0px 10px 0px;display:none;border-radius: 4px; margin-top:20px; margin-bottom:20px;    
            padding: 10px 15px;
            font-size: 14px;"></div>
         <table id="information rec" style="  padding:10px ;  border-spacing: 1px; margin-bottom:30px "  >
            <tr>
               <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                  Client 
                  <input type="text" style="width:150px" id="client_" placeholder="client" class="form-control">
               </td>
               <td id="supo" style="" valign="bottom">
                  <input  type="button" value="Ajouter " name="ajouter" onclick="ajouterc()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 100px;  color: #fff;
                     background-color: #1dc7ea;
                     opacity: 1; border-color: #1dc7ea;">
               </td>
            </tr>
         </table>
         <div class="ccc
            " style=" font-weight: 400; font-size:18px; border-top: 1px solid rgba(0,0,0,.15); padding:20px ;;padding: 25px 10px 0px;"> <i class="fas fa-plus-circle" style="color:#ff9500;"></i> Sujets </div>
         <p style="font-size: 14px;
            font-weight: 400;
            color: #9a9a9a;
            margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Ajouter des Sujets</p>
         <div align=center id="notif_sujet" style="color:white;padding: 0px 10px 0px;display:none;border-radius: 4px; margin-top:20px; margin-bottom:20px;    
            padding: 10px 15px;
            font-size: 14px;"></div>
         <table id="information rec" style="  padding:10px ;  border-spacing: 1px; "  >
            <tr>
               <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                  Sujet 
                  <input type="text"  id="sujet_" style="width:150px" placeholder="sujet" class="form-control">
               </td>
               <td id="supo" style="" valign="bottom">
                  <input  type="button" value="Ajouter " name="ajouter" onclick="ajouters()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 100px;  color: #fff;
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
                              <li   style="padding: 1px 15px;line-height: 30px;
                                 font-size: 12px;
                                 font-weight: 600;
                                 text-transform: uppercase;
                                 color: #ffffff;
                                 border-radius: 20px;">
                                 <a href="money.php"   class="qq" >
                                 <i class="nn fas fa-hand-holding-usd"></i>
                                 Money
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
                  <li class="active" style="padding: 1px 15px; line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" class="">
                     <a href="" class="qq"  style=" border-radius:5px;background-color:#d56768  " >
                     <i class="nn fa fa-briefcase"></i>
                     Projets
                     </a>
                  </li>
                  <li style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;">
                     <a href="initialisation_projet.php?id=0" class="qq" >
                     <i class="nn fas fa-donate" style=""></i>
                     <span style="">Initialisation Projet</span>
                     </a>
                  </li>
                  <li  style="cursor:none; padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a  class="qq" >
                     <i class="nn fas fa-question-circle"></i>
                     Questions filtres
                     </a>
                  </li>
                  <li  style="cursor:none;padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;
                     border-radius: 20px;">
                     <a  >
                     <i class="nn fas fa-chart-pie"></i>
                     Affectation
                     </a>
                  </li>
                  <li style="cursor:none;padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a  class="qq" >
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
                     <a href="/app2/indexo2.php" style="background-color:#d56768; border-radius:5px" >
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
            <nav class="navbar navbar-expand-lg navbar-light " style="margin-bottom: unset;   height:66px;; background:white;background-color: rgb(247, 247, 248);; border-bottom: 1px solid rgba(0,0,0,.1);z-index: 5;">
               <div class="container-fluid">
                  <span style="    font-weight: 400;
                     margin: 2px 0;
                     font-size: 20px;     color: black;">Initialisation Projet</span>               
                  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-align-justify"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" style="margin:20px;color: #9a9a9a;">
                           Admin
                        </li>
                        <li style="margin:20px;color: #9a9a9a;">Log out</li 
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- Page Content  -->
            <!-- Page Content  -->
            <table style="width:100%">
            <tr>
               <td colspan=2>
                  <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:15px 5px 0px 15px; ; ;">
                     <div class="ccc
                        " style=" font-weight: 100;  padding:15px 20px 0px 10px;;;"> Liste Projets </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">L'avancement de la création des projets</p>
                     <div id="attention" align=center style=" display:none; margin-top:20px; margin-bottom:20px;    border-radius: 4px; background-color: #ffbc67; color: #fff;
                        padding: 10px 15px;
                        font-size: 14px;"> Attention - Quelque champs sont requis !</div>
                     <span id="kele2" style="color:gray;display:none;padding: 0px 10px 0px;margin-bottom:40px">Aucun Projet Crée, Cliquez sur <strong><a href="initialisation_projet.php?id=0">Initialisation Projet</a></strong> pour créer votre premier Projet !  <br>  </span>
                     <table id="kele" cellpadding="0" cellspacing="0" style="width:100%">
                        <tr style="background: white; color:gray">
                           <th class="yy" style=";width:20%">
                              Projet
                           </th>
                           <th class="yy">
                              Initialisation
                           </th>
                           <th class="yy">
                              Questions filtres
                           </th>
                           <th class="yy">
                              Affectation
                           </th>
                           <th class="yy">
                              Deplacement
                           </th>
                           <th class="yy">
                              Statut
                           </th>
                           <th class="yy">
                              Supprimer
                           </th>
                        </tr>
                        <?php
                           $oo=0;
                           
                           $reqq=$bdd->query("select * from projets_Quali order by idProjet desc");
                           while($tt=$reqq->fetch())
                           
                           
                           {
                           ?>
                        <tr id="<?php echo 'tr'.$tt['idProjet']?>" class="trop kk <?php if ($oo%2==0) echo 'jjj'?>">
                           <td class="kk " style="">
                              <?php echo $tt['nomProjet'] ?>
                           </td>
                           <td class="kk" >
                              <?php 
                                 if ($tt['initialisation']==1)
                                 {
                                     
                                     ?>
                              <i class="fa fa-check-circle" onclick="change_page('<?php echo $tt['idProjet']?>',1)" style="color:green;cursor:pointer"></i>
                              <?php
                                 }
                                 else {
                                     
                                     ?>
                              <i class="fa fa-times-circle" onclick="hh('<?php echo $tt['idProjet']?>',1)" style="color:red;cursor:pointer"></i>
                              <?php
                                 }
                                 ?>
                           </td>
                           <td class="kk ">
                              <?php 
                                 if ($tt['filtre']==1)
                                 {
                                     
                                     ?>
                              <i class="fa fa-check-circle" style="color:green;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',2)"></i>
                              <?php
                                 }
                                 else {
                                     
                                     ?>
                              <i class="fa fa-times-circle" style="color:red;cursor:pointer"onclick="hh('<?php echo $tt['idProjet']?>',2)"></i>
                              <?php
                                 }
                                 ?>
                           </td>
                           <td class="kk ">
                              <?php 
                                 if ($tt['affectation']==1)
                                 {
                                     
                                     ?>
                              <i class="fa fa-check-circle" style="color:green;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',3)"></i>
                              <?php
                                 }
                                 else {
                                     
                                     ?>
                              <i class="fa fa-times-circle" style="color:red;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',3)"></i>
                              <?php
                                 }
                                 ?>
                           </td>
                           <td class="kk ">
                              <?php 
                                 if ($tt['deplacement']==1)
                                 {
                                     
                                     ?>
                              <i class="fa fa-check-circle" style="color:green;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',4)"></i>
                              <?php
                                 }
                                 else {
                                     
                                     ?>
                              <i class="fa fa-times-circle" style="color:red;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',4)"></i>
                              <?php
                                 }
                                 ?>
                           </td>
                           <td class="kk ">
                              <?php 
                                 if ($tt['validation']==0)
                                 {
                                     
                                     ?>
                              <span style="color:#9a9a9a;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',5)">En attente</span>
                              <?php
                                 }
                                 else if ($tt['validation']==1) {
                                     
                                     ?>
                              <span style="color:green;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',5)">Validé</span>
                              <?php
                                 }
                                 
                                 else 
                                 {
                                 
                                 ?>
                              <span style="color:red;cursor:pointer" onclick="hh('<?php echo $tt['idProjet']?>',5)">Refusé</span>
                              <?php
                                 }
                                    ?>
                           </td>
                           <td  class="kk ">
                              <span class="spi" onclick="supprimer_projet('<?php echo $tt['idProjet'] ?>','<?php echo $tt['nomProjet'] ?>')"style=" padding:3px;background:#cf4141;;cursor:pointer; text-transform: none; font-size: 0.75rem;color:white">Supprimer</span>
                           </td>
                        </tr>
                        <?php
                           $oo++;
                           
                           }?>
                     </table>
                     <?php
                        if ($oo==0)
                        {
                            
                            ?>
                     <script>document.getElementById("kele").style.display="none";
                        document.getElementById("kele2").style.display="block";
                     </script>
                     <?php
                        }
                        
                        ?>
                  </div>
               </td>
            </tr>
            <tr>
               <td></td>
               <td  align=center >
                  <input  id="bout" type="button" value="Creer " name="Creer" onclick="valid()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:right;display:none;
                     background-color: #1dc7ea;
                     opacity: 1; border-color: #1dc7ea;">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
               </td>
            </tr>
         </div>
      </div>
      <!--             <div class="line"></div>
         -->
      </div>
      </div>
      </div>
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
         
         
         
         
         
      </script>
      <script>
         $("#citydrop").hide();
         
         $("#cityclick").mouseover(function () {
          $("#citydrop").slideDown('slow');
         });
         
         $("#wrapper").mouseleave(function () {
          $("#citydrop").slideUp('slow');
         });
         // document.getElementById("sidebarCollapse2").scrollIntoView();
         
         
         // When the user scrolls down 20px from the top of the document, show the button
         
         
         
      </script>
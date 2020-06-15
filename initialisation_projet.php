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
<script> 
   var succes=0;
   var vv=<?php echo json_encode($b) ?>
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <?php 
      //include("connexion.php");
      
      
      ?>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Initialisation projet</title>
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
         var kkc=0;
         
         var titi=[];
         var titi2=[];
         
         var jj=2;

      </script>
      <script type="text/javascript" src="javascript/functions.js"></script>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <!-- Font Awesome JS -->
   </head>
   <body style="background: #f7f7f8;">
      <button onclick="topFunction2()" id="myBtnn" title="Ajout Sujets & Clients" style="display:block"><i class='fas fa-cog' style="font-size: 2em;" ></i></button>
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
                  <input  type="button" value="Ajouter " name="ajouter" onclick="ajouter_client()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 100px;  color: #fff;
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
                  <input  type="button" value="Ajouter " name="ajouter" onclick="ajouter_sujet()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 100px;  color: #fff;
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
                                 <a href="liste_projet.php" class="qq" >
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
                  <li style="padding: 1px 15px; line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" class="">
                     <a href="liste_projets.php" class="qq"  >
                     <i class="nn fa fa-briefcase"></i>
                     Projets
                     </a>
                  </li>
                  <li class="active" style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;">
                     <a href="initialisation_projet.php?id=0" class="qq" style=" border-radius:5px;background-color:#d56768  "  >
                     <i class="nn fas fa-donate" style=""></i>
                     <span style="">Initialisation Projet</span>
                     </a>
                  </li>
                  <li  onclick="etape_projet(1)" style="cursor:pointer;padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a   class="qq" >
                     <i class="nn fas fa-question-circle"></i>
                     Questions filtres
                     </a>
                  </li>
                  <li onclick="etape_projet(2)" style="cursor:pointer;padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;
                     border-radius: 20px;">
                     <a   >
                     <i class="nn fas fa-chart-pie"></i>
                     Affectation
                     </a>
                  </li>
                  <li onclick="etape_projet(4)" style="cursor:pointer;padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a id="bb"  class="qq" >
                     <i class="nn fas fa-paper-plane		"></i>
                     Deplacement
                     </a>
                  </li>
                  <li onclick="etape_projet(3)"  style="cursor:pointer;padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;" >
                     <a id="bb" class="qq" >                        <i class="nn fas fa-chart-bar	"></i>
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
               <br> 
               <ul  style="border-top: unset; border-bottom:unset " class="list-unstyled components" >
                  <li  style="padding: 1px 15px;line-height: 30px;
                     font-size: 12px;
                     font-weight: 600;
                     text-transform: uppercase;
                     color: #ffffff;">
                     <a href="liste_projets.php" style="background-color:#d56768; border-radius:5px" >
                     Retour
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <?php 
            $nom_projet="";
            
            if ($_GET['id']!=0)
            {
            $po=$bdd->query("SELECT * FROM `projets_Quali` where idProjet=".$_GET['id']);
            $po2=$po->fetch();
            
             $nom_projet="- ".$po2['nomProjet'];
            
            }
            
            ?>
         <!-- Page Content  -->
         <div id="content" style="  padding:0px ;margin-left:260px;  position: relative;
            z-index: 2;
            float: right;
            width: calc(100% - 260px);">
            <nav class="navbar navbar-expand-lg navbar-light " style="margin-bottom: unset;   height:66px;; background:white;background-color: rgb(247, 247, 248);; border-bottom: 1px solid rgba(0,0,0,.1);z-index: 5;">
               <div class="container-fluid">
                  <span style="    font-weight: 400;
                     margin: 2px 0;
                     font-size: 20px;     color: black;">Initialisation Projet <?php echo $nom_projet ?></span>               
                  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-align-justify"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="nav navbar-nav ml-auto">
                        <li style="margin:20px;color: #9a9a9a;cursor:pointer" onclick="nouveau_projet()">Nouveau Projet</li 
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- Page Content  -->
            <!-- Page Content  -->
            <table style="width:100%">
            <tr>
               <td colspan=2>
                  <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:15px 5px 0px 15px; ; padding:5px 10px 10px 10px;">
                     <div class="ccc
                        " style=" font-weight: 100;  padding:15px 20px 0px 10px;;;"> Informations Projet </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Veuillez remplir les informations du projet</p>
                     <div id="attention" align=center style=" display:none; margin-top:20px; margin-bottom:20px;    border-radius: 4px; background-color: #ffbc67; color: #fff;
                        padding: 10px 15px;
                        font-size: 14px;"> Attention - Quelque champs sont requis !</div>
                     <table style="  border-spacing : 10px; padding:10px ;  border-spacing: 1px; padding-bottom:30px; width:100%"  >
                        <tr>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Intitulé Projet* <input type="text" id="nom" value="<?php if ($_GET['id']!=0)
                                 echo $po2['nomProjet']?>"   style="   ;
                                 ;"  class="form-control" >
                           </td>
                           <td  id="supo"  style=" color:#9a9a9a;font-size: 12px; ">
                              Numero Bon de commande*
                              <input   type="text" id="bon" style="   ;
                                 " value="<?php if ($_GET['id']!=0)
                                    echo $po2['bonCo']?>"  class="form-control" >
                           </td>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;; ">
                              Code Projet* <input value="<?php if ($_GET['id']!=0)
                                 echo $po2['code']?>"  type="text" id="code"    style="   ;
                                 "  class="form-control" >
                           </td>
                        </tr>
                        <tr>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px; ">
                              Client*
                              <?php 
                                 if ($_GET['id']!=0)
                                 {
                                 ?>
                              <select  class="form-control" type="text" name="resume" id="client_liste" style="height:40px;" >
                                 <?php 
                                    $req=$bdd->query("select * from clients");
                                    while ($req2=$req->fetch())
                                    {
                                    
                                    ?>
                                 <option  class="form-control" value="<?php echo $req2['idClient'] ?>" <?php if ($po2['client']==$req2['idClient']) echo 'selected'?>> <?php echo $req2['nomClient'] ?></option>
                                 <?php 
                                    }
                                    
                                    ?>
                              </select>
                              <?php    
                                 }
                                  
                                  else {
                                 
                                 ?>
                              <select  class="form-control" type="text" name="resume" id="client_liste" style="height:40px;" >
                                 <?php 
                                    $req=$bdd->query("select * from clients");
                                    while ($req2=$req->fetch())
                                    {
                                    
                                    ?>
                                 <option  class="form-control" value="<?php echo $req2['idClient'] ?>"> <?php echo $req2['nomClient'] ?></option>
                                 <?php 
                                    }
                                    
                                    ?>
                              </select>
                              <?php 
                                 }
                                 
                                 ?>
                           </td>
                           <td  id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Sujet Projet*
                              <?php 
                                 if ($_GET['id']!=0)
                                 {
                                 ?>
                              <select  class="form-control" type="text" name="resume" id="sujet_liste" style="height:40px; margin:0px" >
                                 <?php 
                                    $req=$bdd->query("select * from sujets");
                                    while ($req2=$req->fetch())
                                    {
                                    
                                    ?>
                                 <option  class="form-control" value="<?php echo $req2['idSujet'] ?>" <?php if ($po2['sujet']==$req2['idSujet']) echo 'selected'?> > <?php echo $req2['nomSujet'] ?></option>
                                 <?php 
                                    }
                                    
                                    ?>
                              </select>
                              <?php    
                                 }
                                 
                                 else {
                                     
                                     
                                 ?>
                              <select  class="form-control" type="text" name="resume" id="sujet_liste" style="height:40px; margin:0px" >
                                 <?php 
                                    $req=$bdd->query("select * from sujets");
                                    while ($req2=$req->fetch())
                                    {
                                    
                                    ?>
                                 <option  class="form-control" value="<?php echo $req2['idSujet'] ?>"> <?php echo $req2['nomSujet'] ?></option>
                                 <?php 
                                    }
                                    
                                    ?>
                              </select>
                              <?php
                                 }
                                 
                                 
                                 ?>
                           </td>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;; ">
                              Projet Leader* 
                              <?php 
                                 if ($_GET['id']!=0)
                                 {
                                 ?>
                              <select  class="form-control" id="pl" style=" ;  max-height:100px ">
                                 <?php 
                                    foreach ($b as $table )
                                    {
                                    
                                    ?>
                                 <option value="<?php echo $table->id ?>" <?php if($po2['projetLeader']==$table->id) echo 'selected' ?>> <?php echo $table->nom ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                              <?php
                                 }
                                 
                                 else 
                                 {
                                 ?>
                              <select  class="form-control" id="pl" style=" ;  max-height:100px ">
                                 <?php 
                                    foreach ($b as $table )
                                    {
                                    
                                    ?>
                                 <option value="<?php echo $table->id ?>"> <?php echo $table->nom ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                              <?php
                                 }
                                 
                                 ?>
                           </td>
                        </tr>
                     </table>
                     <table style="width:100%">
                        <tr>
                           <td  id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Date Debut Terrain* 
                              <input  id="dated" type="date" value="<?php if ($_GET['id']!=0)
                                 echo $po2['datedeb']?>"  style="   ;
                                 "  class="form-control" >
                           </td>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Date Fin Terrain*
                              <input  id="datef" value="<?php if ($_GET['id']!=0)
                                 echo $po2['datef']?>" type="date" style="    ;
                                 " class="form-control" >
                           </td>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Date Livraison Top Lines
                              <input id="datelp" value="<?php if ($_GET['id']!=0)
                                 echo $po2['datet']?>" type="date"   style="   ;
                                 "  class="form-control" >
                           </td>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Date Livraison Rapport
                              <input id="datelr" value="<?php if ($_GET['id']!=0)
                                 echo $po2['dater']?>" type="date" style="    ;
                                 "  class="form-control" >
                           </td>
                        </tr>
                     </table>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">* sont des champs requis</p>
                  </div>
               </td>
            </tr>
            <tr>
               <td style="width:50%"  valign=top>
                  <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:0px 0px 15px 15px ; padding: 0px 0px 127px 0px ">
                     <div class="ccc
                        " style=" font-weight: 100;  padding:20px ;;padding: 15px 10px 0px;">  Supports </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Vous pouvez ajouter des supports au projet</p>
                     <table id="information rec" style="  padding:10px ;  border-spacing: 1px; "  >
                        <tr>
                           <td id="supo" style="; color:#9a9a9a;font-size: 12px;">
                              Support*
                              <select id="select_support" style="width:200px" class="form-control">
                                 <?php 
                                    foreach ($b as $table )
                                    {
                                    
                                    ?>
                                 <option value="<?php echo $table->id ?>"> <?php echo $table->nom ?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </td>
                           <td id="supo" style="" valign="bottom">
                              <input  type="button" value="Ajouter " name="ajouter" onclick="ajouter_support()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 120px;  color: #fff;
                                 background-color: #1dc7ea;
                                 opacity: 1; border-color: #1dc7ea;">
                           </td>
                        </tr>
                     </table>
                     <div class="ccc
                        " style=" font-weight: 100; ;padding: 20px 10px 0px;">  Liste des Supports </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Vous trouverez ci-joint la liste des supports que vous avez choisi</p>
                     <?php
                        $tr=0;
                        
                        if ($_GET['id']==0)
                        {
                        ?>
                     <span style="margin:10px;margin-top:30px" id="vvv">
                     Aucun Support Choisi !
                     </span>
                     <?php $oo=0;?>
                     <table cellpadding="0" cellspacing="0" style="width:100%; display:none" id="table1" >
                        <tr class="trr">
                           <th  class="yy" >
                              Support
                           </th>
                           <th  class="yy" >
                              Supprimer
                           </th>
                        </tr>
                     </table>
                     <?php 
                        }
                        else 
                        {
                            $oo=0;
                            $jj=1;
                            $tr=0;
                        ?>
                     <span style="margin:10px;margin-top:0px;display:none" id="vvv">
                     Aucun Support Choisi !
                     </span>
                     <table cellpadding="0" cellspacing="0" style="width:100%" id="table1" >
                        <tr class="trr">
                           <th  class="yy" >
                              Support
                           </th>
                           <th  class="yy" >
                              Supprimer
                           </th>
                        </tr>
                        <?php 
                           $oo=0;
                           while ($jj<6)
                           {
                           if ($po2['sup'.$jj]!=null)
                           {
                               $tr=1;
                               
                               $yy=$bdd->query("select * from equipe_quali where idE=".$po2['sup'.$jj]);
                               $yy2=$yy->fetch();
                           ?>
                        <script>
                           titi.push('<?php echo $po2['sup'.$jj] ?>');
                           
                        </script>
                        <tr id="cc_1_<?php echo $po2['sup'.$jj]?>" class="trr tr1 <?php if ($oo%2==0) echo 'jjj'?> ">
                           <td class="kk ">
                              <?php echo $yy2['nomE']." ".$yy2['prenomE']?>
                           </td>
                           <td class="kk ">
                              <span onclick="supprimer_support('<?php echo $po2['sup'.$jj] ?>')" style=" padding:3px;background:#cf3332;cursor:pointer; text-transform: none; font-size: 0.75rem;color:white">Supprimer</span>
                           </td>
                        </tr>
                        <?php    
                           $oo++;   
                            
                           }
                            $jj++; 
                           
                           }
                           ?>
                     </table>
                     <?php  
                        }
                        
                        if ($tr==0)
                        {
                            ?>
                     <script>
                        {document.getElementById("table1").style.display="none";
                        document.getElementById("vvv").style.display="block";
                        }    
                            
                            
                     </script>
                     <?php
                        }
                        ?>
                  </div>
               </td>
               <td style="width:50%" valign=top >
                  <div   
                     style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:0px 5px 0px 0px ; padding: 0px 0px 127px 0px "
                     >
                     <div class="ccc
                        " style=" font-weight: 100;  padding:20px ;;padding: 15px 10px 0px;">  Recruteuses </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Vous pouvez ajouter des recruteuses au projet</p>
                     <table id="information rec" style="  padding:10px ;  border-spacing: 1px; "  >
                        <tr>
                           <td id="reco" style="; color:#9a9a9a;font-size: 12px;" valign=top>
                              Recruteuse*
                              <select id="select_rec" style="width:200px" class="form-control">
                                 <?php $req=$bdd->query("select * from recruteuses ");
                                    while ($pp=$req->fetch()) 
                                    {
                                    
                                    ?>
                                 <option value="<?php echo $pp['idRec'] ?>"> <?php echo $pp['nomRec']." ".$pp['prenomRec']?></option>
                                 <?php
                                    }
                                    ?>
                              </select>
                           </td>
                           <td id="supo" style="" valign="bottom">
                              <input  type="button" value="Ajouter " name="ajouter" onclick="ajouter_recruteuse()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE=" width: 120px;  color: #fff;
                                 background-color: #1dc7ea;
                                 opacity: 1; border-color: #1dc7ea;">
                           </td>
                        </tr>
                     </table>
                     <div class="ccc
                        " style=" font-weight: 100; ;padding: 20px 10px 0px;">  Liste des recruteuses </div>
                     <p style="font-size: 14px;
                        font-weight: 400;
                        color: #9a9a9a;
                        margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Vous trouverez ci-joint la liste des recruteuses que vous avez choisi</p>
                     <?php 
                        $tr=0;
                        
                        if ($_GET['id']==0)
                        {
                        
                        
                        ?>
                     <span style="margin:10px;margin-top:30px" id="vvv2">
                     Aucune recruteuse Choisie !
                     </span>
                     <?php $oo=0;?>
                     <table cellpadding="0" cellspacing="0" style="width:100%; display:none" id="table2" >
                        <tr class="trr">
                           <th  class="yy" >
                              Recruteuse
                           </th>
                           <th  class="yy" >
                              Supprimer
                           </th>
                        </tr>
                     </table>
                     <?php 
                        }
                        else 
                        {
                            
                        $oo=0;
                        $jj=1;
                        $tr=0;
                            
                        ?>
                     <span style="margin:10px;margin-top:30px;display:none" id="vvv2">
                     Aucune recruteuse Choisie !
                     </span>
                     <table cellpadding="0" cellspacing="0" style="width:100%; " id="table2" >
                        <tr class="trr">
                           <th  class="yy" >
                              Recruteuse
                           </th>
                           <th  class="yy" >
                              Supprimer
                           </th>
                        </tr>
                        <?php 
                           $oo=0;
                           while ($jj<9)
                           {
                           if ($po2['recru'.$jj]!=null)
                           {
                               $tr=1;
                               
                               $yy=$bdd->query("select * from recruteuses where idRec=".$po2['recru'.$jj]);
                               $yy2=$yy->fetch();
                           ?>
                        <script>
                           titi2.push('<?php echo $po2['recru'.$jj] ?>');
                           
                        </script>
                        <tr id="cc_2_<?php echo $po2['recru'.$jj]?>" class="trr tr2 <?php if ($oo%2==0) echo 'jjj'?> ">
                           <td class="kk ">
                              <?php echo $yy2['nomRec']." ".$yy2['prenomRec']?>
                           </td>
                           <td class="kk ">
                              <span onclick="supprimer_recruteuse('<?php echo $po2['recru'.$jj] ?>')" style=" padding:3px;background:#cf3332;cursor:pointer; text-transform: none; font-size: 0.75rem;color:white">Supprimer</span>
                           </td>
                        </tr>
                        <?php    
                           $oo++;   
                           
                           }
                           $jj++; 
                           
                           }
                           
                           
                           
                           
                           ?>
                     </table>
                     <?php    
                        }
                        
                        if ($tr==0)
                        {
                            ?>
                     <script>
                        {document.getElementById("table2").style.display="none";
                        document.getElementById("vvv2").style.display="block";
                        }    
                            
                            
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
                  <input  id="bout" type="button" value="<?php if ($_GET['id']==0) echo 'Creer'; else echo 'Modifier'?>" name="Creer" onclick="valider_creation_projet()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:right;
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
         
         
         
         function topFunction2() {
           
           aa=document.getElementById("dif").style.display;
           if (aa=="block")
           document.getElementById("dif").style.display="none";
           else 
           document.getElementById("dif").style.display="block";
           
           
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
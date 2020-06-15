<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <?php 
      session_start();
      include("php/testi.php");
      include("php/connexion_file.php");      
      
              
      $reqq=$bdd->query("select * from projets_Quali where idProjet=".$_GET['id']);
      $reqq2=$reqq->fetch();
              
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
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
      <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
      <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/blitzer/jquery-ui.css" />
      <!-- Libs for sample codes must be loaded in "head". -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script type="text/javascript" src="javascript/functions.js"></script>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="style7.css">
      <link rel="stylesheet" href="style_fin.css">
      <!-- Font Awesome JS -->
   </head>
   <body>
      <div id="dif" style="display:none;overflow-y: scroll;overflow-x: none">
      </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-up' ></i></button>
      <button onclick="topFunction2()" id="myBtnn" title="Ajout trajets" style="display:block"><i class='fas fa-cog' style="font-size: 2em;" ></i></button>
      <div id="dif" style="display:none">
         <div class="ccc
            " style=" font-weight: 400; font-size:18px;  padding:20px ;;padding: 25px 10px 0px;"> <i class="fas fa-plus-circle" style="color:#ff9500;"></i> Trajets  </div>
         <p style="font-size: 14px;
            font-weight: 400;
            color: #9a9a9a;
            margin-bottom: 0; line-height: 1.5;  ;padding: 0px 10px 0px;  margin: 0 0 10px;">Ajouter des trajets</p>
         <div align=center id="notif_client" style="color:white;padding: 0px 10px 0px;display:none;border-radius: 4px; margin-top:20px; margin-bottom:20px;    
            padding: 10px 15px;
            font-size: 14px;"></div>
         <table id="information rec" style="  padding:10px ;  border-spacing: 1px; margin-bottom:30px "  >
            <tr>
               <td id="supo" style="width:50%; color:#9a9a9a;font-size: 12px;">
                  From
                  <input type="text" style="" id="ville_1" placeholder="Casablanca" class="form-control">
               </td>
               <td id="supo" style="width:50%; color:#9a9a9a;font-size: 12px;">
                  To
                  <input type="text" style="" id="ville_2" placeholder="Marrakech" class="form-control">
               </td>
            </tr>
         </table>
         <table style="  padding:10px ;  border-spacing: 1px; margin-bottom:30px "  >
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
                  <a href="<?php echo 'initialisation_projets.php?id='.$_GET['id']?>" onclick="ini()" class="qq"  >
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
               <li    style="padding: 1px 15px;line-height: 30px;
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
               <li class="active" style="padding: 1px 15px;line-height: 30px;
                  font-size: 12px;
                  font-weight: 600;
                  text-transform: uppercase;
                  color: #ffffff;" >
                  <a id="bb" href="" class="qq" style=" border-radius:5px;background-color:#d56768  ">
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
            <br> 
            <ul  style="border-top: unset; border-bottom:unset " class="list-unstyled components" >
               <li  style="padding: 1px 15px;line-height: 30px;
                  font-size: 12px;
                  font-weight: 600;
                  text-transform: uppercase;
                  color: #ffffff;">
                  <a href="affect.php?id=<?php echo $_GET['id']?>" style="background-color:#d56768; border-radius:5px" >
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
               <table style="width:100%">
                  <tr>
                     <td style="width:60%">
                        <span id="spol" style="    font-weight: 400;
                           margin: 2px 0;
                           font-size: 20px;     color: black;">Projet <?php echo $reqq2['nomProjet'] ?> - Budget </span>               
                     </td>
                     <td style=" ;font-size: 16px; padding:40px ;
                        font-weight: 400;" valign=top>
                        <span style="color:#9a9a9a"> Statut : </span>
                        <p id="statut" style="display:inline"> 
                           <?php 
                              if ($reqq2['validation']==1)
                              	{
                              ?>
                           <span style="color:green">Validé <i class="fas fa-check-circle" style="color:green; font-size:1rem"></i></span>
                           <?php 
                              }
                              else if ($reqq2['validation']==0)
                              {
                              ?>
                           <span style="color:#9a9a9a">En attente</span>
                           <?php 
                              }
                              if ($reqq2['validation']==2)
                              {
                              ?>
                           <span style="color:red">Refusé </span>
                           <?php 
                              }
                              
                              ?>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
         </nav>
         <div id="budgett" style="width:100%;margin:auto;display:block; position: sticky;;">
            <div class="container"  style="padding:20px;  margin-top:60px" >
               <div id="attention" align=center style=" display:none;  margin: 0 2px 10px 2px;;    border-radius: 4px; background-color: #ffbc67; color: #fff;
                  padding: 10px 15px;
                  font-size: 14px;">Merci de patienter, Operation en cours </div>
               <?php 
                  if ( $reqq2['deplacement']==0)
                  {
                  ?>
               <p align="center" id="h33" style="font-size: 25px;
                  font-weight: 400; ;
                  color: #9a9a9a;
                  line-height: 1.5;  ;padding: 150px 15px 0px;  margin: 0 0 10px;"> Vous n'avez pas encore finit tous les étapes de la creéation du projet !  </p>
               <?php
                  }
                  else {
                  ?>    
               <?php
                  if($reqq2['validation']==2)
                  {
                      
                  ?>
               <div id="reff" align=center style=" display:block;  margin: 0 2px 10px 2px;;    border-radius: 4px; background-color: red; color: #fff;
                  padding: 10px 15px;
                  font-size: 14px;"> Projet refusé - <?php echo  $reqq2['comm'] ?> </div>
               <?php 
                  }
                  ?>
               <div id="focuso" style="width:100%">
                  <div style="padding: 0px 5px 0px 5px;">
                     <div  style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;  padding: unset;"id="<?php echo 'divo'?>">
                        <table style="width:100%">
                           <tr>
                              <td style="width:70%">
                                 <div class="ccc
                                    " style=" font-weight:100; ;padding: 15px 15px 15px;"> Liste des des approches du projet <i class="fas fa-check-circle" style="color: green; font-size:1rem"></i>  </div>
                              </td>
                              <td style="margin-right:10px;font-size:18px;cursor:pointer;color:blue;float:right">
                                 <span onclick="filtrer(2)" id="spanjour"><i class="fas fa-sort" style="color:orange"></i> Jour</span>
                              </td>
                           </tr>
                        </table>
                        <table cellpadding="0" cellspacing="0" style="width:100%; margin-bottom:30px">
                           <tr style="background: white; color:gray">
                              <th class="yy">
                                 Approche
                              </th>
                              <th class="yy"> 
                                 Date
                              </th>
                              <th class="yy"> 
                                 Heure
                              </th>
                              <th class="yy"> 
                                 Ville
                              </th>
                              <th class="yy"> 
                                 Csp
                              </th>
                              <th class="yy"> 
                                 Max
                              </th>
                              <th class="yy"> 
                                 Min
                              </th>
                              <th class="yy"> 
                                 Incentive
                              </th>
                              <th class="yy"> 
                                 Recrutement
                              </th>
                           </tr>
                           <?php
                              $nbrr=0;
                              $oo=0;
                              $inc=0;
                              $rec=0;
                              $req=$bdd->query("select * from approche where idprojet=".$_GET['id']);
                              while ($req2=$req->fetch()){
                              
                              ?>
                           <tr class="kk <?php if ($oo%2==0) echo 'jjj'?>" >
                              <td class="kk">
                                 <?php echo $req2["type"] ?>
                              </td>
                              <td class="kk" style="white-space:nowrap;" >
                                 <?php echo $req2['date'] ?>
                              </td>
                              <td class="kk" >
                                 <?php echo date('h:i', strtotime($req2['heure']));
                                    ?>
                              </td>
                              <td class="kk">
                                 <?php echo $req2['ville'] ?>
                              </td>
                              <td class="kk" >
                                 <?php echo $req2['csp'] ?>
                              </td>
                              <td class="kk">
                                 <?php echo $req2['nbrmin'] ?>
                              </td>
                              <td class="kk">
                                 <?php echo $req2['nbrmax'] ?>
                              </td>
                              <td class="kk">
                                 <?php echo $req2['incentive'];$inc=$inc+$req2['incentive'] ?>
                              </td>
                              <td class="kk">
                                 <?php echo $req2['recrutement'];$rec=$rec+$req2['recrutement'] ?>
                              </td>
                           </tr>
                           <?php
                              $nbrr++;
                              $oo++;
                              }
                              
                              ?>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <table style="width:100%" align=center>
               <tr>
                  <td valign=top id="budgot">
                     <div style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:20px">
                        <div class="ccc
                           " style=" font-weight: 100;  padding:20px ;;padding: 15px 15px 0px;"> Budget estimé <i class="fas fa-check-circle" style="color:green; font-size:1rem"></i></div>
                        <p style="font-size: 14px; padding:20px ;
                           font-weight: 400;
                           color: #9a9a9a;
                           margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Vous trouvez ci joint le budget du projet bien detaillé</p>
                        <table style="  width:100% " cellpadding="0" cellspacing="0"    >
                           <tr class="trr">
                              <th class="yy" style="text-align:unset" >Frais</th>
                              <th class="yy" style="text-align:center" > Budget </th>
                           </tr>
                           <tr class="trr">
                              <?php $oo=0;
                                 $log=142*$nbrr;?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset"  >
                                 Incentive
                              </td>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>">
                                 <span  ><?php echo  number_format($inc, 0, ',', ' ') ?> MAD</span>
                              </td>
                           </tr>
                           <tr class="trr">
                              <?php $oo++; ?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset"  >
                                 Recrutement
                              </td>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>">
                                 <span  ><?php echo  number_format($rec, 0, ',', ' ')  ?> MAD</span>
                              </td>
                           </tr>
                           <tr class="trr">
                              <?php $oo++; ?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset"  >
                                 Logistique
                              </td>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>">
                                 <span  ><?php echo  number_format($log, 0, ',', ' ')  ?> MAD</span>
                              </td>
                           </tr>
                           <?php 
                              $req=$bdd->query("select sum(dep_an)as dn, sum(dep_rec)as dr from dep_app where projet=".$_GET['id']);
                              $req2=$req->fetch();
                              ?>
                           <tr class="trr">
                              <?php $oo++; ?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset"  >
                                 Deplacement Analyste
                              </td>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>">
                                 <span ><?php echo  number_format($req2['dn'], 0, ',', ' ')  ?> MAD</span>
                              </td>
                           </tr>
                           <tr class="trr">
                              <?php $oo++; ?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset"  >
                                 Déplacement Recruteuse 
                              </td>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>">
                                 <span  ><?php echo  number_format($req2['dr'], 0, ',', ' ')  ?> MAD</span>
                              </td>
                           </tr>
                           <tr class="trr">
                              <?php $oo++; ?>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>" style="text-align:unset"  >
                                 Total
                              </td>
                              <td class="kk <?php if ($oo%2==0) echo 'jjj'?>">
                                 <span><?php echo   number_format( $inc+$log+$recr+$req2['dr']+$req2['dn'], 0, ',', ' ') ?> MAD</span>
                              </td>
                           </tr>
                        </table>
                        <br>
                     </div>
                  </td>
               </tr>
            </table>
            <?php 
               if ($reqq2['validation']==2 and $_SESSION['login']=="souhaila")
               { 
                  ?>
            <div id="div_com" style="display:block ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:15px 25px 60px 25px ; padding: 0px 10px 0px 0px ; overflow-y: none;overflow-x: none; ">
               <div class="ccc
                  " style=" font-weight: 100;  padding:20px ;;padding: 15px 15px 0px;"> <i class="fa fa-chevron-down" id="" style="font-size:0.8em; color:orange; ; ; cursor:pointer" onclick="annuler_refus()" ></i> Refus projet </div>
               <p style="font-size: 14px; padding:20px ;
                  font-weight: 400;
                  color: #9a9a9a;
                  margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Pourquoi refusez-vous ce projet ? </p>
               <table style="width:100%; ">
                  <tr>
                     <td colspan=2>
                        <textarea class="form-control" id="como" name="como" style="margin:auto;" ><?php echo $reqq2['comm']?></textarea>
                     </td>
                  </tr>
                  <tr>
                     <td style="float:left">
                        <input   type="button" value="Annuler" name="Creer" onclick="spi2()"  class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:left;  
                           background-color: #1dc7ea;
                           opacity: 1; border-color: #1dc7ea;">
                     </td>
                     <td style="float:right">
                        <input   type="button" value="Refuser" name="Creer" onclick="refuser_projet()" id="ref2" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:left; margin-left:20px; 
                           background-color: #1dc7ea;
                           opacity: 1; border-color: #1dc7ea;">
                     </td>
                  </tr>
               </table>
            </div>
            <p id="p_com" style="margin-bottom:60px;display:none">
               <br>
               <input  id="bout" type="button" value="Refuser" name="Creer" onclick="refuser1(1)"  id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:right; margin-right:20px; 
                  background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;">
               <input  id="bout" type="button" value="Valider" name="Creer" onclick="valider_projet()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:left; margin-left:20px; 
                  background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;">
               <br>
            </p>
            <?php 
               }
               ?>
            <?php 
               if ($reqq2['validation']==0 and $_SESSION['login']=="souhaila")
               {
               
               ?>
            <div id="div_com" style="display:none ; background:white; border : 1px solid #dddddd;  border-radius:5px;   margin:15px 25px 60px 25px ; padding: 0px 10px 0px 0px ; overflow-y: none;overflow-x: none; ">
               <div class="ccc
                  " style=" font-weight: 100;  padding:20px ;;padding: 15px 15px 0px;"> <i class="fa fa-chevron-down" id="" style="font-size:0.8em; color:orange; ; ; cursor:pointer" onclick="spi2()" ></i> Refus projet </div>
               <p style="font-size: 14px; padding:20px ;
                  font-weight: 400;
                  color: #9a9a9a;
                  margin-bottom: 0; line-height: 1.5;  ;padding: 0px 15px 0px;  margin: 0 0 10px;">Pourquoi refusez-vous ce projet ? </p>
               <table style="width:100%; ">
                  <tr>
                     <td colspan=2>
                        <textarea class="form-control" id="como" name="como" style="margin:auto;" ><?php echo $req2['comm']?></textarea>
                     </td>
                  </tr>
                  <tr>
                     <td style="float:left">
                        <input   type="button" value="Annuler" name="Creer" onclick="spi2()"  class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:left;  
                           background-color: #1dc7ea;
                           opacity: 1; border-color: #1dc7ea;">
                     </td>
                     <td style="float:right">
                        <input   type="button" value="Refuser" name="Creer" onclick="refuser_projet()" id="ref2" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:left; margin-left:20px; 
                           background-color: #1dc7ea;
                           opacity: 1; border-color: #1dc7ea;">
                     </td>
                  </tr>
               </table>
            </div>
            <p id="p_com" style="margin-bottom:60px">
               <br>
               <input  id="bout" type="button" value="Refuser" name="Creer" onclick="refuser1(1)"  id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:right; margin-right:20px; 
                  background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;">
               <input  id="bout" type="button" value="Valider" name="Creer" onclick="valider_projet()" id="form-submit" class="btn  btn-contact tm-btn-primary" STYLE="; width: 120px;  color: #fff; float:left; margin-left:20px; 
                  background-color: #1dc7ea;
                  opacity: 1; border-color: #1dc7ea;">
               <br>
            </p>
            <?php 
               }
               ?>
            <br>
            <?php
               }
               ?>
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
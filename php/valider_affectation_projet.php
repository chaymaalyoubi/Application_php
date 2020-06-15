<?php
   include("php/connexion_file.php");
   
   $cssp=[];
   $cssp[1]="A+";
   $cssp[2]="AB";
   $cssp[3]="BC1";
   $cssp[4]="C2D";
   $cssp[5]="Professions libérales";
   $cssp[6]="Commerçants";
   
   
   
   $typo=[];
   $typo[1]="Focus Group";
   $typo[2]="Triad";
   $typo[3]="Quad";
   $typo[4]="MFG";
   $typo[5]="Shop along";
   $typo[6]="IHV";
   $typo[7]="IDI";
   
   
   
   
   $obj=$_POST['objet'];
   $sup=$_POST['sup'];
   
   
   
   $idid=$_POST['idid'];
   
   $rt=$bdd->query('update  projets_Quali  set affectation=1 where idProjet='.$idid);
   
   $dat_anc=[];
   $dat_nv=[];
   $fd=$bdd->query("select * from dep_app where projet=".$idid);
   while ($fd2=$fd->fetch())
   {
   $dat_anc[]=$fd2['jour'];    
   }
   
   //$rr=$bdd->query("delete  from approche where idprojet=".$idid);
   $ccc=$idid;
   
   //echo $obj;
   
   $o=json_decode($obj);
   $sup=json_decode($sup);
   
   $ti=[];
   
   foreach ($o as $ob) {
   
   $dat_nv[]=$ob->date;    
   
   
   if($ob->idancien==0)
   {
   
   
   $req=$bdd->prepare("insert into approche(type,ville,date,heure,csp,nbrmax,nbrmin,idprojet,incentive,recrutement) values(:a,:z,:e,:r,:t,:y,:u,:n,:ii,:rr)");
   
   $req2=$req->execute(array(
   
   "a"=>$typo[$ob->type],
   "z"=>$ob->lieu,
   "e"=>$ob->date,
   "r"=>$ob->time,
   "t"=>$cssp[$ob->csp],
   "y"=>$ob->nbrmax,
   "u"=>$ob->nbrmin,
   "n"=>$ccc,
   "ii"=>$ob->incentive,
   "rr"=>$ob->recru,
   
   	));
   
   
   
   
       $ti[]=$bdd->lastInsertId();
   
   
   
   }
   
   
   else {
       
     //  $ti[]=$ob->idancien;
   
       
       
       $req=$bdd->prepare("update approche set type=:a ,ville=:z,date=:e,heure=:r,csp=:t,nbrmax=:y,nbrmin=:u,idprojet=:n, incentive=:ii,recrutement=:rr where idA=".$ob->idancien);
   
   $req2=$req->execute(array(
   
   "a"=>$typo[$ob->type],
   "z"=>$ob->lieu,
   "e"=>$ob->date,
   "r"=>$ob->time,
   "t"=>$cssp[$ob->csp],
   "y"=>$ob->nbrmax,
   "u"=>$ob->nbrmin,
   "n"=>$ccc,
   "ii"=>$ob->incentive,
   "rr"=>$ob->recru,
   
   	));
       
       
   }
   
   }
   
   
   foreach($sup as $sf)
   {
       
   
   $rr3=$bdd->query("delete  from approche where idA=".$sf);
   $rr4=$bdd->query("delete  from participation where idFocus=".$sf);
   
   }
   
   $sup_dat = array_diff($dat_anc, $dat_nv);
   $aj_dat=array_diff($dat_nv, $dat_anc);
   
   foreach($sup_dat as $sf)
   {
       
   $rr3=$bdd->query("delete from dep_app where projet=".$idid." and jour='".$sf."'");
   }
   
   foreach($aj_dat as $sf)
   {
       
   $rr3=$bdd->query(" insert into dep_app(jour,projet) values('".$sf."',".$idid.")");
   }
   
   
   
   
   $data['tableau']=$ti;
   
   echo json_encode($data);
   
   
   
   ?>
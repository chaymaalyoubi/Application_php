<?php 
   include("php/connexion_file.php");
   $obj=$_POST['suports'];
   
   //echo $obj;
   
   $o=json_decode($obj);
   
   $obj2=$_POST['recs'];
   
   //echo $obj;
   
   $o2=json_decode($obj2);
   
   $ii=$_POST['ii'];
   $bon=$_POST['bon'];
   $nom=$_POST['nom'];
   $sujet=$_POST['sujet'];
   $code=$_POST['code'];
   $client=$_POST['client'];
   $recs=$_POST['rec'];
   $pl=$_POST['pl'];
   $dated=$_POST['dated'];
   $datef=$_POST['datef'];
   $datelp=$_POST['datelp'];
   $datelr=$_POST['datelr'];
   
   
   
   $fft=$bdd->query("select count(*) as cc from projets_Quali where code='".$code."'");
   
   $fft2=$fft->fetch();
   if ($fft2['cc']!=0) 
   
   {
       
   if ($ii==0)    
   $data['succes']=1;
   
   else 
   {
   $req=$bdd->prepare("update projets_Quali set bonCo=:a ,nomProjet=:z,sujet=:e,client=:r,projetLeader=:t,datedeb=:y,datef=:u,datet=:i,dater=:o,code=:p,recru1=null,recru2=null,recru3=null,recru4=null,recru5=null,recru6=null,recru9=null,recru7=null,recru8=null,sup1=null,sup2=null,sup3=null,sup4=null,sup5=null,initialisation=1 where idProjet=:m");
   
   
   $req2=$req->execute(array(
   
   "a"=>$bon,
   "z"=>$nom,
   "e"=>$sujet,
   "r"=>$client,
   "t"=>$pl,
   "y"=>$dated,
   "u"=>$datef,
   "i"=>$datelp,
   "o"=>$datelr,
   "p"=>$code,
   "m"=>$ii));
   
   
   
   $jj=1;
   foreach ($o as $table)
   
   {
   
   
   $res=$bdd->query("update projets_Quali set sup".$jj."=".$table." where idProjet='".$ii."'");
   
   
   $jj++;
   }
   
   
   
   
   $jj=1;
   foreach ($o2 as $table)
   
   {
   
   
   $res=$bdd->query("update projets_Quali set recru".$jj."=".$table." where idProjet='".$ii."'");
   
   
   $jj++;
   }
   
   
   $data['succes']=3;
   
   
       
   }
   
   }
   
   else {
   
   $req=$bdd->prepare("insert into projets_Quali (bonCo,nomProjet,sujet,client,projetLeader,datedeb,datef,datet,dater,code,initialisation) values(:a,:z,:e,:r,:y,:u,:i,:o,:p,:n,1)");
   $req2=$req->execute(array(
   
   "a"=>$bon,
   "z"=>$nom,
   "e"=>$sujet,
   "r"=>$client,
   "y"=>$pl,
   "u"=>$dated,
   "i"=>$datef,
   "o"=>$datelp,
   "p"=>$datelr,
   "n"=>$code
   
   ));
   
   
   $data['id']=$bdd->lastInsertId();
   
   $jj=1;
   foreach ($o as $table)
   
   {
   
   
   $res=$bdd->query("update projets_Quali set sup".$jj."=".$table." where code='".$code."'");
   
   
   $jj++;
   }
   
   
   
   
   $jj=1;
   foreach ($o2 as $table)
   
   {
   
   
   $res=$bdd->query("update projets_Quali set recru".$jj."=".$table." where code='".$code."'");
   
   
   $jj++;
   }
   
   
   
   
   $data['succes']=2;
   
   
   }
   
   echo json_encode($data);
   
   ?>
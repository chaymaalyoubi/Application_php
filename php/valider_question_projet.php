<?php 
   include("php/connexion_file.php");
   
   $data['i']=1;
   $question=$_POST["question"];
   $question=json_decode($question);
   
   $selected=$_POST["selected"];
   $selected=json_decode($selected);
   $sup=$_POST['sup'];
   $sup=json_decode($sup);
   
   
   $tab=[];
   
   $idid=$_POST['idid'];
   
   
   $rt=$bdd->query('update  projets_Quali  set filtre=1 where idProjet='.$idid);
   
   //$reg=$bdd->query("delete from Questions where idP=".$idid);
   
   $id_p=$idid;
   
   
   foreach ($question as $q)
   {
   
   if ($q->{'typee'}=="ouverte")
   {
       
       
   if($q->{'idancien'}==0)    
   
   {$req=$bdd->query("insert into Questions(texteQ,typeQ,idP) values('".$q->{'text'}."','ouverte',".$id_p.")");
   
   $id=$bdd->lastInsertId();
   $tab[]=$id;
       
   }
   else 
   $req=$bdd->query("update Questions set texteQ='".$q->{'text'}."',typeQ='ouverte',idP=".$id_p." where idQ=".$q->{'idancien'});
   
   
   
   }
   
   else 
   	{
   	    if($q->{'idancien'}==0) 
   	    {
   	    
   	    $req=$bdd->query("insert into Questions(texteQ,typeQ,idP,nbr_choix) values('".$q->{'text'}."','".$q->{'typee'}."',".$id_p.",".count($q->{'choix'}).")");
   $id=$bdd->lastInsertId();
   $tab[]=$id;
   	        
   
   	    }
   	    
   	    else {
   	        
   	        
   	        $req=$bdd->query("update Questions set texteQ='".$q->{'text'}."',typeQ='".$q->{'typee'}."',idP=".$id_p.",nbr_choix=".count($q->{'choix'})." where idQ=".$q->{'idancien'});
   	        $id=$q->{'idancien'};
   	        
   	    }
   $pp=1;
   foreach($q->{'choix'} as $choip)
   		{
   
   $reqd2=$bdd->query("update Questions set choix".$pp."='".$choip."' where idQ=".$id);
   $pp++;
   
   
   		}
   
   
   	}
   
   
   }
   
   
   $rds=$bdd->query("update projets_Quali set `profession`=0, `situation_maritale`=0, `nombre_enfants`=0, `salaire_foyer`=0, `voilée`=0, `propriete`=0, `voyage`=0, `shopping`=0, `profession_conjoint`=0, `a_des_enfants`=0, `nombre_foyer`=0, `residence`=0, `scolarisation`=0, `motorisé`=0, `aide`=0, `telecom`=0 where idProjet=".$idid);    
   
   
   
   
   foreach ($selected as $sele)
   {
       
       
   $rd=$bdd->query("update projets_Quali set `".$sele."`=1 where idProjet=".$idid);    
       
   }
   
   
   foreach($sup as $sf)
   {
       
   
   $rr3=$bdd->query("delete  from Questions where idQ=".$sf);
   $rr4=$bdd->query("delete  from Reponses where idQ=".$sf);
   
   }
   
   
   $data['tableau']=$tab;
   
    echo json_encode($data);
   
   
   
   ?>
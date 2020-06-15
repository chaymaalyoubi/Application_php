
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>



<?php 
session_start();
include("testi.php");
include("connexion_file.php");      



?>


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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


function valider_question() {

document.getElementById("valid_q").disabled=true;
document.getElementById("attention").style.display="block";


$("#attention").fadeOut();
$("#attention").html("Merci de patienter, Operation en cours").fadeIn();



que=[];

qq=document.querySelectorAll("div.pipo");
for (ii=0;ii<qq.length;ii++ )
{
	question={};
type=qq[ii].querySelector('#input_type').value;
idancien=qq[ii].querySelector('#idoo').value;

if (type=="ouverte")
{
	question.typee=type;
	question.idancien=idancien;
	question.text=qq[ii].querySelector('#text_question').value;
	que.push(question);    
}
else 
	{
choixx=[];
question.typee=type;
question.idancien=idancien;
question.text=qq[ii].querySelector('#text_question').value;
ch=qq[ii].querySelectorAll("span.spl");

if (ch.length==0)
{
    
alert ('Erreur - Aucun choix pour la question " '+question.text+' " !');
$("#attention").fadeOut();
$("#attention").html("Erreur - Verifiez vos choix pour les questions a choix mutilpes et uniques").fadeIn();
document.getElementById("valid_q").disabled=false;

return;
    
}

for (jj=0;jj<ch.length;jj++ )
{
	choixx.push(ch[jj].innerHTML);
}

question.choix=choixx;
	que.push(question);    


	}


}


console.log(que);
que2=JSON.stringify(que);
code=sessionStorage.getItem('coco');
idid="<?php echo $_GET['id']?>";



var selected = [];

$("input:checkbox[id=filtre]:checked").each(function() {
       selected.push($(this).val());
  });

//alert(JSON.stringify(selected));
selected=JSON.stringify(selected);

$.ajax({
    url:"qu.php",
    method:"POST",
    data:{question:que2,idid:idid,selected:selected,sup:JSON.stringify(supprime)},
    dataType:"JSON",
    success:function(data)
    {
      //  alert('ttt');
document.getElementById("valid_q").disabled=false;



cy=0;   
gh=document.querySelectorAll("#idoo");
for (u=0;u<gh.length;u++)
{
   
if (gh[u].value==0)
{
  gh[u].value=parseInt(data.tableau[cy]);
cy=cy+1;
}
}



document.getElementById("attention").style.display="block";
document.getElementById("attention").style.backgroundColor="#a1e82c";
 $("#attention").fadeOut();
	     $("#attention").html("Succes - Questions bien enregistrées").fadeIn();
	     
	     setTimeout(function(){}, 3500);
	     
	     cc='<?php echo $_GET['id']?>';
	     scroll(0,0)
	     a=confirm ("voulez vous passer à la phase de l'affectation ? ");
	     if (a==true)
        location.href="affect.php?id="+cc;



    }
   });




}













function texte_question(str,str2,str3){

if (str3!="ouverte")
{

question=document.getElementById("question"+str);

question.querySelector("#vvv").style.display="none";
question.querySelector("#table_appercu").style.display="table";
question.querySelector("#question_ap").innerHTML=str2.value;
}


}



function texte_choix (str, str1,str2){
str=parseInt(str);
ss=str-1;

cho=str1.value;
vv=document.getElementById("question"+str2);
table=vv.querySelector("#table_appercu");

tr=table.querySelector("#choixx"+ss);

tr.style.display="block";
tr.querySelector("span.spl").innerHTML=" "+cho;



}



function supprimer_choix(str,str2) {

question=document.getElementById("question"+str2);
question.querySelector("#choix"+str).remove();
question.querySelector("#choixx"+str).remove();

chch=question.querySelectorAll("tr.chch");
if (chch.length==0)
{
question.querySelector("#ppp").style.display="initial";
question.querySelector("#table_choix").style.display="none";

}

span=question.querySelectorAll("span.num_choix");
tr=question.querySelectorAll("tr.chch");

for (ii=0;ii<span.length;ii++ )
{

span[ii].innerHTML=ii+1;
if(ii%2==0)
	tr[ii].className="jjj chch";
else 
	tr[ii].className="chch";

}





}


function ajouter_choix(str,str1) {

rego=document.getElementById("choix_"+str);
rego.removeAttribute("onclick");



question=document.getElementById("question"+str);


chch=question.querySelectorAll("tr.chch");
k=chch.length;


question=document.getElementById("question"+str);

question.querySelector("#ppp").style.display="none";
question.querySelector("#table_choix").style.display="table";

table=question.querySelector("#table_choix");

var tr=document.createElement("tr");
tr.id="choix"+k;
if(k%2==0)
	tr.className="jjj chch";
else tr.className="chch";
table.appendChild(tr);




xmlhttp = new XMLHttpRequest();

    
        xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
                question.querySelector("#choix"+k).innerHTML = this.responseText;
                //scroll(0, 0);
				

appercu=question.querySelector("#table_appercu");
tr=document.createElement("tr");
tr.id="choixx"+k;
appercu.appendChild(tr);
td1=document.createElement("td");
td1.className="choixe";
tr.appendChild(td1);
input=document.createElement("input");

if(str1=="unique")
{input.type="radio";
input.name="rad"+str;
input.value="b";
}
else 
input.type="checkbox";

td1.appendChild(input);
span=document.createElement("span");
span.className="spl";
td1.appendChild(span);
tr.style.display="none";



rego.setAttribute("onclick","ajouter_choix("+str+",'"+str1+"')");





						
            }
        }
        xmlhttp.open("GET","focus3.php?i="+str+"&k="+k,true);
        xmlhttp.send();








}


function suprimer_choix(str,str2) {

question=document.getElementById("question"+str2);
question.querySelector("#choix"+str).remove();
question.querySelector("#choixx"+str).remove();

chch=question.querySelectorAll("tr.chch");
if (chch.length==0)
{
question.querySelector("#ppp").style.display="initial";
question.querySelector("#table_choix").style.display="none";

}

span=question.querySelectorAll("span.num_choix");
tr=question.querySelectorAll("tr.chch");

for (ii=0;ii<span.length;ii++ )
{

span[ii].innerHTML=ii+1;
if(ii%2==0)
	tr[ii].className="jjj chch";
else 
	tr[ii].className="chch";

}





}





function supprimer_question(str,str1){

if(str1!=0)
supprime.push(str1);



document.getElementById("question"+str).remove();
var k=document.querySelectorAll("span.nbr");
c=1
for (var j=0;j<k.length;j++)
{ 
	//alert (k[j].innerHTML);
	k[j].innerHTML=c;
	c=c+1;
	
	}


//i=i-1;

var q=document.querySelectorAll("div.pipo");
/*if (q.length==0)
{

document.getElementById("valid").style.display="none";
document.getElementById("h33").style.display="block";


}*/





}
function ajouter_question() {


var disp=document.getElementById("ajoutt").style.display;

if (disp=="none")
{
document.getElementById("ajoutt").style.display="block";
document.getElementById("budgett").style.display="none";

}



v=document.getElementById("type").value;
document.getElementById("h33").style.display="none";

div=document.getElementById("divo");
var pp=document.createElement("div");
pp.id="question"+i;
pp.className="pipo "+v;
div.appendChild(pp);


xmlhttp = new XMLHttpRequest();

    
        xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
                document.getElementById("question"+i).innerHTML = this.responseText;
                //scroll(0, 0);
				i=i+1;
				document.getElementById("valid").style.display="inline";
scroll(div.scrollHeight,div.scrollHeight);




		
            }
        }
        xmlhttp.open("GET","focuss2.php?i="+i+"&v="+v,true);
        xmlhttp.send();




}

<?php 

$dt=date('Y-m-d');
?>











</script>

<style>

.choixe{

padding:20px;
color:black;
}

.ml{
    
    text-align:center;
}

.thh{

border:1px solid black;
text-align:center

}

.kik{   
    margin: auto;
    padding: 2px 4px;
    border: 1px solid #555;
    background-color: #4d82d28c;
    border-radius: 4px;
	color:rgb(0,0,0);
}




.p{ box-shadow:0 0 0 0.2rem rgba(0,123,255,.25)}

.tro{
border-top: 1px solid #e1f1ff;
    font-size: 12px;
    line-height: 1.5;
    padding: 15px 0;
}


.bb{float:right; cursor: pointer; color:#cc3467}

.bebo{
text-transform:none
}
.home{
    background: url(images/shutterstock_360095273.jpg) no-repeat 100% 100%;
    background-size: cover;
}
.tdo{
color: #016FF9;
    font-weight: 600;
    letter-spacing: 1px;

}

.kiki{ border:1px black solid}
.kik{   
    margin: auto;
    padding: 2px 4px;
    border: 1px solid #555;
    background-color: #4d82d28c;
    border-radius: 4px;
	color:rgb(0,0,0);
}
@media screen and (max-width: 1199px)
p {
    margin: 0 0 10px;
}
.iyo { position: unset;}
.eqq{ color:unset}
.kij{ color:#016FF9 }
.bb{float:right; cursor: pointer; color:#cc3467}

html {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.background {
  padding: 0 25px 25px;
  position: relative;
  width: 100%;
}

.background::after {
  content: '';
  background: #60a9ff;
  background: -moz-linear-gradient(top, #60a9ff 0%, #4394f4 100%);
  background: -webkit-linear-gradient(top, #60a9ff 0%,#4394f4 100%);
  background: linear-gradient(to bottom, #60a9ff 0%,#4394f4 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60a9ff', endColorstr='#4394f4',GradientType=0 );
  height: 350px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 0;
}


#sidebar ul li a:hover {
    color: white;
    background: #d56768;
	border-radius:5px
}


.qq :hover {

color:white;
background:#d56768

}

.jjj {
background:#f7f7f8;

}

.cl :hover {
background:#f7f7f8;
    
    
}
.ccc {
color: #333;
    -webkit-font-smoothing: antialiased;
    font-weight: 300;    
	font-size: 22px;
    line-height: 30px;

}

.zz :focus{
	box-shadow: unset;
	
border: 1px solid #aaa;

}


.yy{border-bottom-width: 1px;
    font-size: 12px;
		text-align:center;

    text-transform: uppercase;
    color: gray;
    font-weight: 400;
    padding-bottom: 5px;
	padding: 12px 8px;
    vertical-align: middle; line-height: 1.42857143;
 
    }


.kk {
line-height: 1.42857143;
    border-top: 1px solid #ddd;
	text-align:center;
padding: 12px 8px;
    vertical-align: middle; line-height: 1.42857143;
    }

.nn{

font-size: 20px;
    float: left;
    margin-right: 15px;
    line-height: 30px;
    width: 30px;
    text-align: center;
    color: #fff;

}

.koo{
background: linear-gradient(to bottom,#fb404bc2 0,#bb0502e0 100%)
}
table { border-collapse: separate; }


tr:last-child td:first-child { border-bottom-left-radius: 5px; }
tr:last-child td:last-child { border-bottom-right-radius: 5px; }



td,th {      padding:7px; }

#container {
    background: #666;
    margin: auto;
    width: 900px;
    height: 700px;
    padding-top: 30px;
    font-family: helvetica, arial, sans-serif;
    }
 
.jj {
     background: #e3e3e3;
     background: -moz-linear-gradient(top, #e3e3e3, #c8c8c8);
     background: -webkit-gradient(linear, left top, left bottom, from(#e3e3e3), to(#c8c8c8));
     padding: 10px 20px;
     margin-left: -20px;
     margin-top: 0;
     position: relative;
     width: 50%;
 
    -moz-box-shadow: 1px 1px 3px #292929;
    -webkit-box-shadow: 1px 1px 3px #292929;
       box-shadow: 1px 1px 3px #292929;
 
    color: #454545;
    text-shadow: 0 1px 0 white;
}
 
.arrow {
     width: 0; height: 0;
     line-height: 0;
     border-left: 20px solid transparent;
     border-top: 10px solid #c8c8c8;
     top: 104%;
     left: 0;
     position: absolute;
}





#myBtnn {
  position: fixed;
  bottom: 50%;
  right: 0px;
  text-align:center;
  z-index: 98;
  border: none;
  outline: none;
  background-color:#33333361;
  color: white;
  cursor: pointer;
  padding: 5px;
  font-size: 14px;
  line-height: 1.42857143;
color: #fff;
padding: 10px;
border-radius: 6px 0 0px 6px;

  width:65px;
  height:45px
  
}




#dif {
  display: none;
  position: fixed;
  bottom: 25%;
  right: 66px;
  z-index: 98;
  border: none;
  outline: none;
  background-color:white;
  color: white;
  padding: 5px;
  font-size: 14px;
  line-height: 1.42857143;
color: #fff;
padding: 10px;
border:1px solid rgba(0,0,0,.15);

box-shadow: 0 6px 12px rgba(0,0,0,.175);


top:50px;

  height:550px;
  
  width: 310px;
    border-radius: 10px;
    padding: 0 10px;
  
  
}







#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 15px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #cf4141;
  color: white;
  cursor: pointer;
  padding: 5px;
  border-radius: 50%;
  width:40px;
  height:40px
  
}

#myBtn:hover {
  background-color: #555;
}







@media (min-width: 900px) {
  .background {
    padding: 0 0 25px;
  }
}

.container {
  margin: 0 auto;
  padding: 50px 0 0;
  max-width: 960px;
  width: 100%;
}

.panel {
  background-color: #fafafa;
  border-radius: 10px;
  padding: 0px 25px;
  position: relative;
  width: 100%;
  z-index: 10;
}

.pricing-table {
  box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
  display: flex;
  flex-direction: column;
}

@media (min-width: 900px) {
  .pricing-table {
    flex-direction: row;
  }
}

.pricing-table * {
  text-transform: uppercase;
}

.pricing-plan {
  border-bottom: 1px solid #e1f1ff;
  padding: 0px;
}

.pricing-plan:last-child {
  border-bottom: none;
}

@media (min-width: 900px) {
  .pricing-plan {
    border-bottom: none;
    border-right: 1px solid #e1f1ff;
    flex-basis: 100%;
    padding: unset;
  }

  .pricing-plan:last-child {
    border-right: none;
  }
}

.pricing-img {
  margin-bottom: 25px;
  max-width: 100%;
}

.pricing-header {
  color: #888;
  font-weight: 600;
  letter-spacing: 1px;
}

.pricing-features {
  color: #016FF9;
  font-weight: 600;
  letter-spacing: 1px;
  margin: 50px 0 25px;
}

.pricing-features-item {
  border-top: 1px solid #e1f1ff;
  font-size: 12px;
  line-height: 1.5;
  padding: 15px 0;
}

.pricing-features-item:last-child {
  border-bottom: 1px solid #e1f1ff;
}

.pricing-price {
  color: #016FF9;
  display: block;
  font-size: 32px;
  font-weight: 700;
}

.pricing-button {
  border: 1px solid #9dd1ff;
  border-radius: 10px;
  color: #348EFE;
  display: inline-block;
  margin: 25px 0;
  padding: 15px 35px;
  text-decoration: none;
  transition: all 150ms ease-in-out;
}

.pricing-button:hover,
.pricing-button:focus {
  background-color: #e1f1ff;
}

.pricing-button.is-featured {
  background-color: #48aaff;
  color: #fff;
}

.pricing-button.is-featured:hover,
.pricing-button.is-featured:active {
  background-color: #269aff;
}


.ul {
    
    
     list-style-type:none;
}
</style>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style7.css">

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
                    <a href="homo.php" class="qq" >
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
                    <a href="homo.php" class="qq"  >
                        <i class="nn fa fa-briefcase"></i>
                        Projets
                    </a>
                
                </li>
                
                
                <li  style="padding: 1px 15px;line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    color: #ffffff;">
                    
                    <a href="<?php echo 'test2.php?id='.$_GET['id']?>" onclick="initialisation_projet()" class="qq"  >
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
                    <a id="aa" href="<?php echo 'affect.php?id='.$_GET['id']?>"   >
                        <i class="nn fas fa-chart-pie"></i>
                        Affectation
                    </a>
            
                </li>
                
                
                <li  style="padding: 1px 15px;line-height: 30px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    color: #ffffff;" >
                    <a id="bb" href="<?php echo 'budgett2.php?id='.$_GET['id']?>" class="qq" >
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
                    <a href="test2.php?id=<?php echo $_GET['id']?>" style="background-color:#d56768; border-radius:5px" >
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
                                </select></td>
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
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['genre']==1) echo 'checked' ?>  value="genre"> </td>

 <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">

Csp </td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre"  <?php if ($reqq2['csp']==1) echo 'checked' ?> value="csp"> 
</td>

        
</tr>
<tr>

<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Age 
</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['age']==1) echo 'checked' ?>  value="age">  </td>
<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Situation maritale 
</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['situation_maritale']==1) echo 'checked' ?>  value="situation_maritale"> </td>
</tr>



<tr>
<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Profession 
</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['profession']==1) echo 'checked' ?>  value="profession">  </td>

 <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">

Profession du Conjoint
</td>
<td style="">
<input type="checkbox" style="width:10%;" id="filtre"  <?php if ($reqq2['profession_conjoint']==1) echo 'checked' ?> value="profession_conjoint"> 
</td>

        
</tr>


<tr>

<td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">

A des enfants </td>
<td style="">
<input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['a_des_enfants']==1) echo 'checked' ?> value="a_des_enfants"> 
</td>
<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Nombre d'enfants</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['nombre_enfants']==1) echo 'checked' ?> value="nombre_enfants"> 
</td>

</tr>

<tr>
<td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">

Nombre de personne dans le foyer  </td>
<td style="">
<input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['nombre_foyer']==1) echo 'checked' ?> value="nombre_foyer"> 
</td>

<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Salaire du foyer</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['salaire_foyer']==1) echo 'checked' ?> value="salaire_foyer"> 
</td>



</tr>


<tr>


<td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">

Quartier de residence  </td>
<td style="">
<input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['residence']==1) echo 'checked' ?> value="residence"> 
</td>


<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Propriété</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['propriete']==1) echo 'checked' ?> value="propriete">  </td>


</tr>


<tr>

 <td   style="width:15%;; color:#9a9a9a;font-size: 14px; ">

Scolarisation </td>
<td style="">
<input type="checkbox" style="width:10%;""filtre"  <?php if ($reqq2['scolarisation']==1) echo 'checked' ?> value="scolarisation"> 
</td>

 <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">

Motorisé </td>
<td style="">
<input type="checkbox" id="filtre" style="width:10%;" <?php if ($reqq2['motorisé']==1) echo 'checked' ?> value="motorisé"> 
</td>

</tr>


<tr>
        

<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Voyage</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre" <?php if ($reqq2['voayage']==1) echo 'checked' ?> value="voayage">  </td>

 <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">

Aide menagere </td>
<td style="">
<input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['aide']==1) echo 'checked' ?> value="aide"> 
</td>

        
</tr>


<tr>
        

<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Shopping</td>
<td style="">
<input style="width:10%;" type="checkbox" id="filtre"  <?php if ($reqq2['shopping']==1) echo 'checked' ?> value="shopping">  </td>

 <td   style="width:20%;; color:#9a9a9a;font-size: 14px; ">

Telecom </td>
<td style="">
<input type="checkbox" style="width:10%;" id="filtre" <?php if ($reqq2['telecom']==1) echo 'checked' ?> value="telecom"> 
</td>

        
</tr>

<tr>
        

<td style="width:15%; color:#9a9a9a;font-size: 14px; ">
Voilée</td>
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
    
    
    	</div> <p  style="display:inline"> </p>
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
<tr id="choixx<?php echo $c?>" style="display: block;"><td class="choixe"><input type="radio"><span class="spl"> <?php echo $ts ?></span></td></tr> 

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



<script>

function initialisation_projet()
{
        idid=sessionStorage.getItem('idid');

    location.href="test2.php?id="+idid;
    
    
}
function dep(str1,str2) {

if (str1=="h")

{
	
	document.getElementById("table2__"+str2).style.display="block";
}
else { 
	document.getElementById("table2__"+str2).style.display="none";

}

}


</script>



<!--             <div class="line"></div>
 -->
</div>











<script>

function support ()
{
var ccc=sessionStorage.getItem("ccc");
table=document.getElementById("table_grh");
kk=1;
cc2=JSON.parse(ccc);
for (ii=0;ii<cc2.length;ii++)
{
tr=document.createElement("tr");

if (ii%2==0)
tr.className="jjj";

td1=document.createElement("td");
td1.innerHTML="Support "+kk;
td2=document.createElement("td");
td2.className="ml";
td2.innerHTML=cc2[ii];

table.appendChild(tr);
tr.appendChild(td1);
tr.appendChild(td2);



kk=kk+1;
    
}





    
}






</script>



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
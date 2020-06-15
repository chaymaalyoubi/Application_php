function supprimer_projet(str, str2) {


	var r = confirm("Vous etes sur le point de supprimer le projet " + str2);
	if (r == true) {


		xmlhttp = new XMLHttpRequest();

		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {

				document.getElementById("tr" + str).remove();

				ii = document.querySelectorAll('tr.trop');


				for (j = 0; j < ii.length; j++) {

					if (j % 2 == 0)
						ii[j].className = "trop kk jjj";

					else
						ii[j].className = "trop kk";

				}


				if (ii.length == 0) {


					document.getElementById("kele").style.display = "none";
					document.getElementById("kele2").style.display = "block";

				}


			}
		};
		xmlhttp.open("GET", "php/supprimer_projet.php?id=" + str, true);
		xmlhttp.send();


	}


}


function change_page(str, str2) {

	if (str2 == 1)
		location.href = "initialition_projet.php?id=" + str;
	else if (str2 == 2)
		location.href = "question.php?id=" + str;
	else if (str2 == 3)
		location.href = "affectation.php?id=" + str;
	else if (str2 == 4)
		location.href = "deplacement.php?id=" + str;
	else if (str2 == 5)
		location.href = "validation.php?id=" + str;


}


function topFunction2() {

	aa = document.getElementById("dif").style.display;
	if (aa == "block")
		document.getElementById("dif").style.display = "none";
	else
		document.getElementById("dif").style.display = "block";


}


function update_sujet() {


	xmlhttp = new XMLHttpRequest();


	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("sujet_liste").innerHTML = this.responseText;
			scroll(0, 0);


		}
	}
	xmlhttp.open("GET", "php/liste_sujet.php", true);
	xmlhttp.send();


}


function nouveau_projet() {

	location.href = "initialisation_projet.php?id=0";
}


function etape_projet(str) {
	ii = '<?php echo $_GET['
	id ']?>';
	iii = sessionStorage.getItem('idid');

	if (str == 1) {
		if (succes == 1)
			location.href = "question.php?id=" + iii;

		else if (ii != 0) {
			location.href = "question.php?id=" + ii;
		} else
			alert("Creez d'abord le projet !");


	}


	if (str == 2) {
		if (succes == 1)
			location.href = "affectation.php?id=" + iii;

		else if (ii != 0) {
			location.href = "affectation.php?id=" + ii;
		} else
			alert("Creez d'abord le projet !");


	}


	if (str == 3) {
		if (succes == 1)
			location.href = "validation.php?id=" + iii;

		else if (ii != 0) {
			location.href = "validation.php?id=" + ii;
		} else
			alert("Creez d'abord le projet !");


	}


	if (str == 4) {
		if (succes == 1)
			location.href = "deplacement.php?id=" + iii;

		else if (ii != 0) {
			location.href = "deplacement.php?id=" + ii;
		} else
			alert("Creez d'abord le projet !");


	}


}


function ajouter_client() {


	client = document.getElementById("client_").value;

	if (client != "" && client != " ") {

		$.ajax({

			type: "POST",
			url: "php/ajouter_client.php",
			data: {
				client: client
			},
			success: function (ss) {

				//alert(ss);
				if (ss == "aa") {
					document.getElementById("notif_client").style.display = "block";
					document.getElementById("notif_client").style.backgroundColor = "#a1e82c";
					$("#notif_client").fadeOut();
					$("#notif_client").html(client + " a bien été ajouté aux clients ").fadeIn();
					update_client();

					document.getElementById("client_").value = "";

				}


				if (ss == "bb") {
					document.getElementById("notif_client").style.display = "block";
					document.getElementById("notif_client").style.backgroundColor = "#ffbc67";
					$("#notif_client").fadeOut();
					$("#notif_client").html("Ce Client figure dèja dans votre liste ").fadeIn();
					update_client();
				}


			}
		});

	} else

	{
		document.getElementById("notif_client").style.display = "block";

		document.getElementById("notif_client").style.backgroundColor = "#ffbc67";


		$("#notif_client").fadeOut();
		$("#notif_client").html("Entrez un nom valide").fadeIn();

	}


}


function ajouter_sujet() {


	sujet = document.getElementById("sujet_").value;

	if (sujet != "" && sujet != " ") {

		$.ajax({

			type: "POST",
			url: "php/ajouter_sujet.php",
			data: {
				sujet: sujet
			},
			success: function (ss) {

				//alert(ss);
				if (ss == "aa") {
					document.getElementById("notif_sujet").style.display = "block";
					document.getElementById("notif_sujet").style.backgroundColor = "#a1e82c";

					$("#notif_sujet").fadeOut();
					$("#notif_sujet").html(sujet + " a bien été ajouté aux sujets").fadeIn();
					document.getElementById("sujet_").value = "";
					update_sujet();
				}


				if (ss == "bb") {
					document.getElementById("notif_sujet").style.display = "block";
					document.getElementById("notif_sujet").style.backgroundColor = "#ffbc67";

					$("#notif_sujet").fadeOut();
					$("#notif_sujet").html("Ce Sujet figure dèja dans votre liste").fadeIn();
					update_sujet();
				}


			}
		});

	} else

	{
		document.getElementById("notif_sujet").style.display = "block";
		document.getElementById("notif_sujet").style.backgroundColor = "#ffbc67";

		$("#notif_sujet").fadeOut();
		$("#notif_sujet").html("Entrez un nom valide").fadeIn();

	}


}


function update_client() {


	xmlhttp = new XMLHttpRequest();


	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("client_liste").innerHTML = this.responseText;
			scroll(0, 0);


		}
	}
	xmlhttp.open("GET", "php/liste_clients.php", true);
	xmlhttp.send();


}

function ajouter_support() {


	select = document.getElementById("select_support");

	val = select.options[select.selectedIndex].innerHTML;
	//alert(val);


	ii = document.querySelectorAll('tr.tr1');

	for (j = 0; j < ii.length; j++) {

		if (ii[j].id == "cc_1_" + select.value) {
			alert("Vous avez deja choisi " + val + " comme support!");
			return;
		}

	}


	dis = document.getElementById("table1").style.display;

	if (dis == "none") {
		document.getElementById("table1").style.display = "table";
		document.getElementById("vvv").style.display = "none";
	}


	nbr = ii.length;


	a = document.getElementById("table1");
	var pp = document.createElement("tr");
	a.appendChild(pp);
	pp.id = "cc_1_" + select.value;
	if (nbr % 2 == 0)
		pp.className = "trr tr1 jjj";
	else
		pp.className = "trr tr1 ";


	xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			//  alert("eee");
			document.getElementById("cc_1_" + select.value).innerHTML = this.responseText;
			titi.push(select.value);


		}
	};
	xmlhttp.open("GET", "php/ajouter_support.php?id=" + select.value + "&nbr=" + nbr + "&val=" + val, true);
	xmlhttp.send();


}


function ajouter_recruteuse() {


	select = document.getElementById("select_rec");

	val = select.options[select.selectedIndex].innerHTML;
	//alert(val);


	ii = document.querySelectorAll('tr.tr2');

	for (j = 0; j < ii.length; j++) {

		if (ii[j].id == "cc_2_" + select.value) {
			alert("Vous avez deja choisi " + val + " comme recruteuse!");
			return;
		}

	}


	dis = document.getElementById("table2").style.display;

	if (dis == "none") {
		document.getElementById("table2").style.display = "table";
		document.getElementById("vvv2").style.display = "none";
	}


	nbr = ii.length;


	a = document.getElementById("table2");
	var pp = document.createElement("tr");
	a.appendChild(pp);
	pp.id = "cc_2_" + select.value;
	if (nbr % 2 == 0)
		pp.className = "trr tr2 jjj";
	else
		pp.className = "trr tr2 ";


	xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			//  alert("eee");
			document.getElementById("cc_2_" + select.value).innerHTML = this.responseText;
			titi2.push(select.value);


		}
	};
	xmlhttp.open("GET", "php/ajouter_recruteuse.php?id=" + select.value + "&nbr=" + nbr + "&val=" + val, true);
	xmlhttp.send();


}


function supprimer_support(str) {

	document.getElementById("cc_1_" + str).remove();


	for (var i = 0; i < titi.length; i++) {

		if (titi[i] == str) {
			titi.splice(i, 1);
		}
	}


	ii = document.querySelectorAll('tr.tr1');
	nbr = ii.length;

	if (nbr == 0)

	{
		document.getElementById("table1").style.display = "none";
		document.getElementById("vvv").style.display = "block";
	} else {

		for (j = 0; j < nbr; j++) {

			if (j % 2 == 0)
				ii[j].className = "trr tr1 jjj";

			else
				ii[j].className = "trr tr1";

		}

	}


	console.log(titi);


}


function supprimer_recruteuse(str) {


	document.getElementById("cc_2_" + str).remove();


	for (var i = 0; i < titi2.length; i++) {

		if (titi2[i] == str) {
			titi2.splice(i, 1);
		}
	}


	ii = document.querySelectorAll('tr.tr2');
	nbr = ii.length;

	if (nbr == 0)

	{
		document.getElementById("table2").style.display = "none";
		document.getElementById("vvv2").style.display = "block";
	} else {

		for (j = 0; j < nbr; j++) {

			if (j % 2 == 0)
				ii[j].className = "trr tr2 jjj";

			else
				ii[j].className = "trr tr2";

		}

	}


	console.log(titi2);


}


function valider_creation_projet() {


	document.getElementById("bout").disabled = true;


	if (titi2.length == 0) {
		alert("Attention - Vous devez choisir au moins une recruteuse pour projet !");
		document.getElementById("bout").disabled = false;

		return;


	}
	var tabs = JSON.stringify(titi)
	var tabr = JSON.stringify(titi2)

	var bon = document.getElementById("bon").value;
	var client = document.getElementById("client_liste").value;
	var nom = document.getElementById("nom").value;
	var sujet = document.getElementById("sujet_liste").value;
	var code = document.getElementById("code").value;
	var pl = document.getElementById("pl").value;
	var dated = document.getElementById("dated").value;
	var datef = document.getElementById("datef").value;
	var datelp = document.getElementById("datelp").value;
	var datelr = document.getElementById("datelr").value;


	if (dated > datef) {

		alert("Les dates ne sonts pas Compatibles ! ");
		document.getElementById("bout").disabled = false;
		return;
	}


	if (bon == "" || client == "" || nom == "" || sujet == "" || code == "" || pl == "" || dated == "" || datef == "")

	{
		document.getElementById("attention").style.display = "block";
		document.getElementById("attention").style.backgroundColor = "#ffbc67";

		$("#attention").fadeOut();
		$("#attention").html("Attention - Quelque Champs sont requis !").fadeIn();
		scroll(0, 0);

		document.getElementById("bout").disabled = false;


		return;
	} else {

		sessionStorage.setItem('coco', code);


		ii = '<?php echo $_GET['
		id ']?>';
		if (succes == 1)
			ii = sessionStorage.getItem('idid');


		///////////////////


		$.ajax({
			url: "php/valider_creation_projet.php",
			method: "POST",
			data: {
				bon: bon,
				client: client,
				nom: nom,
				sujet: sujet,
				code: code,
				pl: pl,
				dated: dated,
				datef: datef,
				datelp: datelp,
				datelr: datelr,
				suports: tabs,
				recs: tabr,
				ii: ii
			},
			dataType: "JSON",
			success: function (data) {
				alert("rrrr"); {
					//alert(this.responseText);

					if (data.succes == 1) {
						document.getElementById("attention").style.display = "block";
						document.getElementById("attention").style.backgroundColor = "#ffbc67";

						$("#attention").fadeOut();
						$("#attention").html("Ce projet est deja créé !").fadeIn();
						scroll(0, 0);


					}


					if (data.succes == 3) {
						document.getElementById("attention").style.display = "block";
						document.getElementById("attention").style.backgroundColor = "#a1e82c";

						$("#attention").fadeOut();
						$("#attention").html("Succes - Projet " + nom + " bien modifié !").fadeIn();
						scroll(0, 0);
						succes = 1;


					}


					if (data.succes == 2) {


						document.getElementById("attention").style.display = "block";
						document.getElementById("attention").style.backgroundColor = "#a1e82c";
						$("#attention").fadeOut();
						$("#attention").html("Succes - Projet " + nom + " bien créé !").fadeIn();

						succes = 1;

						kkc = data.id;


						// alert("Projet bien crée");

						setTimeout(function () {


						}, 2500);


						se1 = document.getElementById("pl");
						pl = se1.options[se1.selectedIndex].innerHTML;


						sessionStorage.setItem('pl', pl);

						ccc = [];
						oo = document.querySelectorAll("td.ll");
						for (jj = 0; jj < oo.length; jj++)
							ccc.push(oo[jj].innerHTML);

						sessionStorage.setItem('ccc', JSON.stringify(ccc));

						//alert(data.id);
						sessionStorage.setItem('idid', data.id);


						//alert(data.succes);

						scroll(0, 0);
						setTimeout(function () {


						}, 1500);
						//location.href="question.php";


						document.getElementById("bout").value = "Modifier";

						iii = sessionStorage.getItem('idid');

						a = confirm("Voulez-vous passez a la phase des questions filtres?");
						if (a == true)
							location.href = "question.php?id=" + iii;


					}
					document.getElementById("bout").disabled = false;


				}


			}
		});


		////////////////


	}


}


function valider_approche2() {
	document.body.scrollTop = 0;
	document.getElementById("attention").style.display = "block";

	document.getElementById("input_valid2").disabled = "true";

	coco = sessionStorage.getItem('coco');
	idid = '<?php echo $_GET['
	id ']?>';

	$.ajax({
		url: "php/valider_affectation_projet.php",
		method: "POST",
		data: {
			objet: JSON.stringify(arr),
			idid: idid,
			sup: JSON.stringify(supprime)
		},
		dataType: "JSON",
		success: function (data) {


			cy = 0;
			gh = document.querySelectorAll("#idoo");
			for (u = 0; u < gh.length; u++) {

				if (gh[u].value == 0) {
					gh[u].value = parseInt(data.tableau[cy]);
					cy = cy + 1;
				}
			}


			document.getElementById("input_valid2").disabled = "false";
			document.getElementById("attention").style.backgroundColor = "#a1e82c";
			$("#attention").fadeOut();
			$("#attention").html("Succes - Approches bien enregistrés").fadeIn();

			setTimeout(function () {}, 2500);


			a = confirm('voulez vous passez à la phase du budget deplacement?');
			if (a == true)
				location.href = "deplacement.php?id=" + idid;


		}
	});


}


function valider_approche1() {

	arr = [];

	var q = document.querySelectorAll("div.pipo");

	total = 0
	var incentive = 0;
	var recru = 0;
	//var log=0;
	//var depa=0;
	//var depr=0;
	//var tarifa=0;
	//var tarifr=0;

	for (j = 0; j < q.length; j++) {


		total = 0
		incentive = 0;
		recru = 0;
		/* log=0;
		 depa=0;
		 depr=0;
		 tarifa=0;
		 tarifr=0;    */

		tot = 0
		var focus = {};
		var type = q[j].querySelector("#type").value;

		var idancien = q[j].querySelector("#idoo").value;
		focus.idancien = idancien;


		focus.type = type;
		//alert (focus);
		//alert(type);
		var date = q[j].querySelector("#dato").value;
		focus.date = date;
		if (date == '') {
			alert('Attention - tous les champs sont requis !');
			return;
		}

		var time = q[j].querySelector("#timo").value;
		focus.time = time;
		if (time == '') {
			alert('Attention - tous les champs sont requis !');
			return;
		}
		var csp = q[j].querySelector("#selectoo").value;
		focus.csp = csp;

		if (type == 1 || type == 4) {
			var nbrmax = q[j].querySelector("#nbrmax").value;
			var nbrmin = q[j].querySelector("#nbrmin").value;
			focus.nbrmax = nbrmax;
			focus.nbrmin = nbrmin;

		}


		var lieu = q[j].querySelector("#lieu").value;
		focus.lieu = lieu;

		if (type == 1 || type == 4) {
			nbrmax = parseInt(nbrmax);
			tot = nbrmax * csp2[csp];
		}

		if (type == 2) {
			nbrmax = 3;
			nbrmin = 3;
			tot = 3 * csp2[csp];
		}


		if (type == 3) {
			nbrmax = 4;
			nbrmin = 4;
			tot = 4 * csp2[csp];
		}


		if (type == 7)

		{
			nbrmax = 1;
			nbrmin = 1;
			tot = csp2[csp];
		}

		incentive = tot;


		///


		if (lieu == "casa" && csp != 5 && (type == 1 || type == 4)) {
			recru = (parseInt(nbrmax) * 100);

		} else if (lieu == "casa" && csp != 5 && type == 2) {
			recru = (parseInt(3) * 100);

		} else if (lieu == "casa" && csp != 5 && type == 3) {
			recru = (parseInt(4) * 100);
		} else if (lieu == "casa" && csp != 5 && type == 7) {
			recru = 100
		} else if (lieu == "casa" && csp == 5) {
			recru = (parseInt(nbrmax) * 120);
		} else if (lieu != "casa") {
			recru = (parseInt(nbrmax) * 120);
		}

		focus.nbrmax = nbrmax;
		focus.nbrmin = nbrmin;
		focus.incentive = incentive;
		focus.recru = recru;
		console.log(focus);
		arr.push(focus);

	}

	console.log(arr);
	//sessionStorage.setItem('arr', JSON.stringify(arr));
	valider_approche2();


}

function supprimer_approche(str, str1) {

	if (str1 != 0)
		supprime.push(str1);


	document.getElementById("focus" + str).remove();
	var k = document.querySelectorAll("span.nbr");
	c = 1
	for (var j = 0; j < k.length; j++) {
		//alert (k[j].innerHTML);
		k[j].innerHTML = c;
		c = c + 1;

	}


	i = i - 1;

	var q = document.querySelectorAll("div.pipo");
	if (q.length == 0) {

		document.getElementById("valid").style.display = "none";
		document.getElementById("h33").style.display = "block";
	}

}

function ajouter_approche() {


	var disp = document.getElementById("ajoutt").style.display;

	if (disp == "none") {
		document.getElementById("ajoutt").style.display = "block";
		document.getElementById("budgett").style.display = "none";

	}


	v = document.getElementById("type").value;
	document.getElementById("h33").style.display = "none";

	div = document.getElementById("divo");
	var pp = document.createElement("div");
	pp.id = "focus" + i;
	pp.className = "pipo";
	div.appendChild(pp);


	xmlhttp = new XMLHttpRequest();


	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("focus" + i).innerHTML = this.responseText;
			//scroll(0, 0);
			i = i + 1;
			document.getElementById("valid").style.display = "inline";
			//alert(div.scrollHeight);
			scroll(div.scrollHeight, div.scrollHeight);


		}
	}
	xmlhttp.open("GET", "php/ajouter_approche.php?i=" + i + "&v=" + v, true);
	xmlhttp.send();


}


function check_date(str, str2) {

	var dd = "<?php echo $dt ?>";

	if (str2 < dd) {
		alert("Attention La date que vous avez entré est depassée");
		str.value = "";
	}

}


function valider_question() {

	document.getElementById("valid_q").disabled = true;
	document.getElementById("attention").style.display = "block";


	$("#attention").fadeOut();
	$("#attention").html("Merci de patienter, Operation en cours").fadeIn();


	que = [];

	qq = document.querySelectorAll("div.pipo");
	for (ii = 0; ii < qq.length; ii++) {
		question = {};
		type = qq[ii].querySelector('#input_type').value;
		idancien = qq[ii].querySelector('#idoo').value;

		if (type == "ouverte") {
			question.typee = type;
			question.idancien = idancien;
			question.text = qq[ii].querySelector('#text_question').value;
			que.push(question);
		} else {
			choixx = [];
			question.typee = type;
			question.idancien = idancien;
			question.text = qq[ii].querySelector('#text_question').value;
			ch = qq[ii].querySelectorAll("span.spl");

			if (ch.length == 0) {

				alert('Erreur - Aucun choix pour la question " ' + question.text + ' " !');
				$("#attention").fadeOut();
				$("#attention").html("Erreur - Verifiez vos choix pour les questions a choix mutilpes et uniques").fadeIn();
				document.getElementById("valid_q").disabled = false;

				return;

			}

			for (jj = 0; jj < ch.length; jj++) {
				choixx.push(ch[jj].innerHTML);
			}

			question.choix = choixx;
			que.push(question);


		}


	}


	console.log(que);
	que2 = JSON.stringify(que);
	code = sessionStorage.getItem('coco');
	idid = "<?php echo $_GET['id']?>";


	var selected = [];

	$("input:checkbox[id=filtre]:checked").each(function () {
		selected.push($(this).val());
	});

	//alert(JSON.stringify(selected));
	selected = JSON.stringify(selected);

	$.ajax({
		url: "php/valider_question_projet.php",
		method: "POST",
		data: {
			question: que2,
			idid: idid,
			selected: selected,
			sup: JSON.stringify(supprime)
		},
		dataType: "JSON",
		success: function (data) {
			//  alert('ttt');
			document.getElementById("valid_q").disabled = false;


			cy = 0;
			gh = document.querySelectorAll("#idoo");
			for (u = 0; u < gh.length; u++) {

				if (gh[u].value == 0) {
					gh[u].value = parseInt(data.tableau[cy]);
					cy = cy + 1;
				}
			}


			document.getElementById("attention").style.display = "block";
			document.getElementById("attention").style.backgroundColor = "#a1e82c";
			$("#attention").fadeOut();
			$("#attention").html("Succes - Questions bien enregistrées").fadeIn();

			setTimeout(function () {}, 3500);

			cc = '<?php echo $_GET['
			id ']?>';
			scroll(0, 0)
			a = confirm("voulez vous passer à la phase de l'affectation ? ");
			if (a == true)
				location.href = "affectation.php?id=" + cc;


		}
	});


}


function texte_question(str, str2, str3) {

	if (str3 != "ouverte") {

		question = document.getElementById("question" + str);

		question.querySelector("#vvv").style.display = "none";
		question.querySelector("#table_appercu").style.display = "table";
		question.querySelector("#question_ap").innerHTML = str2.value;
	}


}


function texte_choix(str, str1, str2) {
	str = parseInt(str);
	ss = str - 1;

	cho = str1.value;
	vv = document.getElementById("question" + str2);
	table = vv.querySelector("#table_appercu");

	tr = table.querySelector("#choixx" + ss);

	tr.style.display = "block";
	tr.querySelector("span.spl").innerHTML = " " + cho;


}


function supprimer_choix(str, str2) {

	question = document.getElementById("question" + str2);
	question.querySelector("#choix" + str).remove();
	question.querySelector("#choixx" + str).remove();

	chch = question.querySelectorAll("tr.chch");
	if (chch.length == 0) {
		question.querySelector("#ppp").style.display = "initial";
		question.querySelector("#table_choix").style.display = "none";

	}

	span = question.querySelectorAll("span.num_choix");
	tr = question.querySelectorAll("tr.chch");

	for (ii = 0; ii < span.length; ii++) {

		span[ii].innerHTML = ii + 1;
		if (ii % 2 == 0)
			tr[ii].className = "jjj chch";
		else
			tr[ii].className = "chch";

	}


}


function ajouter_choix(str, str1) {

	rego = document.getElementById("choix_" + str);
	rego.removeAttribute("onclick");


	question = document.getElementById("question" + str);


	chch = question.querySelectorAll("tr.chch");
	k = chch.length;


	question = document.getElementById("question" + str);

	question.querySelector("#ppp").style.display = "none";
	question.querySelector("#table_choix").style.display = "table";

	table = question.querySelector("#table_choix");

	var tr = document.createElement("tr");
	tr.id = "choix" + k;
	if (k % 2 == 0)
		tr.className = "jjj chch";
	else tr.className = "chch";
	table.appendChild(tr);


	xmlhttp = new XMLHttpRequest();


	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			question.querySelector("#choix" + k).innerHTML = this.responseText;
			//scroll(0, 0);


			appercu = question.querySelector("#table_appercu");
			tr = document.createElement("tr");
			tr.id = "choixx" + k;
			appercu.appendChild(tr);
			td1 = document.createElement("td");
			td1.className = "choixe";
			tr.appendChild(td1);
			input = document.createElement("input");

			if (str1 == "unique") {
				input.type = "radio";
				input.name = "rad" + str;
				input.value = "b";
			} else
				input.type = "checkbox";

			td1.appendChild(input);
			span = document.createElement("span");
			span.className = "spl";
			td1.appendChild(span);
			tr.style.display = "none";


			rego.setAttribute("onclick", "ajouter_choix(" + str + ",'" + str1 + "')");


		}
	}
	xmlhttp.open("GET", "php/ajouter_choix.php?i=" + str + "&k=" + k, true);
	xmlhttp.send();


}


function suprimer_choix(str, str2) {

	question = document.getElementById("question" + str2);
	question.querySelector("#choix" + str).remove();
	question.querySelector("#choixx" + str).remove();

	chch = question.querySelectorAll("tr.chch");
	if (chch.length == 0) {
		question.querySelector("#ppp").style.display = "initial";
		question.querySelector("#table_choix").style.display = "none";

	}

	span = question.querySelectorAll("span.num_choix");
	tr = question.querySelectorAll("tr.chch");

	for (ii = 0; ii < span.length; ii++) {

		span[ii].innerHTML = ii + 1;
		if (ii % 2 == 0)
			tr[ii].className = "jjj chch";
		else
			tr[ii].className = "chch";

	}


}


function supprimer_question(str, str1) {

	if (str1 != 0)
		supprime.push(str1);


	document.getElementById("question" + str).remove();
	var k = document.querySelectorAll("span.nbr");
	c = 1
	for (var j = 0; j < k.length; j++) {
		//alert (k[j].innerHTML);
		k[j].innerHTML = c;
		c = c + 1;

	}


	//i=i-1;

	var q = document.querySelectorAll("div.pipo");
	/*if (q.length==0)
	{

	document.getElementById("valid").style.display="none";
	document.getElementById("h33").style.display="block";


	}*/


}

function ajouter_question() {


	var disp = document.getElementById("ajoutt").style.display;

	if (disp == "none") {
		document.getElementById("ajoutt").style.display = "block";
		document.getElementById("budgett").style.display = "none";

	}


	v = document.getElementById("type").value;
	document.getElementById("h33").style.display = "none";

	div = document.getElementById("divo");
	var pp = document.createElement("div");
	pp.id = "question" + i;
	pp.className = "pipo " + v;
	div.appendChild(pp);


	xmlhttp = new XMLHttpRequest();


	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("question" + i).innerHTML = this.responseText;
			//scroll(0, 0);
			i = i + 1;
			document.getElementById("valid").style.display = "inline";
			scroll(div.scrollHeight, div.scrollHeight);


		}
	}
	xmlhttp.open("GET", "php/ajouter_question.php?i=" + i + "&v=" + v, true);
	xmlhttp.send();


}


function valider_budget(str) {

	document.getElementById("attention").style.display = "block";
	document.getElementById("attention").style.backgroundColor = "orange";
	$("#attention").html("Opération en cours...").fadeIn("slow");

	projet = '<?php echo $_GET['
	id ']?>';

	nom_p = document.getElementById("nom_pp").innerHTML;
	arr = [];
	var q = document.querySelectorAll("div.pipo");
	for (j = 0; j < q.length; j++) {
		res = {};
		jour = q[j].querySelector("#jjo").innerHTML;
		res.jour = jour;
		depa = q[j].querySelector("#dep_an").value;
		res.depa = depa;
		if (depa == "") {
			alert("Attention, Tous les champs sont requis");
			document.getElementById("attention").style.display = "none";
			return;
		}
		depr = q[j].querySelector("#dep_rec").value;
		if (depr == "") {
			alert("Attention, Tous les champs sont requis");
			document.getElementById("attention").style.display = "none";
			return;
		}
		res.depr = depr;

		arr.push(res);
	}
	console.log(arr);

	var json = "objet=" + JSON.stringify(arr) + "&projet=" + projet + "&dep=" + str + "&nom=" + nom_p;


	xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("attention").style.backgroundColor = "#a1e82c";


			var q = document.querySelectorAll("ul.ulp");
			for (j = 0; j < q.length; j++) {
				q[j].style.display = "none";
			}

			if (document.getElementById('valid')) {
				val = document.getElementById('valid').style.display;
				if (val == "block"); {
					document.getElementById('valid').style.display = "none";
					document.getElementById('modif').style.display = "block";
				}
				$("#attention").fadeOut();
				$("#attention").html("Félication - Votre projet a bien été créé ! ").fadeIn();

			} else {
				$("#attention").fadeOut();
				$("#attention").html("Succes - Budget deplacement bien modifié ! ").fadeIn();

			}
			scroll(0, 0);


			//setTimeout(function(){}, 2500); 

			// location.href="suivi.php";
		}
	};

	xmlhttp.open("POST", "php/enregistrer_deplacement.php");
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send(json);


}


function valider_projet() {

	var nom = '<?php echo $reqq2['
	nomProjet '] ?>';
	var id = "<?php echo $_GET['id']?>";
	document.getElementById("attention").style.display = "block";
	scroll(0, 0);
	document.getElementById("attention").style.backgroundColor = "orange";
	$("#attention").fadeOut();
	$("#attention").html("Opération en cours ...").fadeIn();

	$.ajax({

		type: "POST",
		url: "php/valider_projet.php",
		data: {
			id: id,
			nom: nom
		},
		success: function () {
			if (document.getElementById("reff"))
				document.getElementById("reff").style.display = "none";


			document.getElementById("attention").style.backgroundColor = "#a1e82c";
			$("#attention").fadeOut();
			$("#attention").html("Succes - Projet " + nom + " validé").fadeIn();

			document.getElementById("statut").innerHTML = '<span style="color:green">Validé <i class="fas fa-check-circle" style="color:green; font-size:1rem"></i></span>';


		}
	});


}


function filtrer(str) {
	projet = "<?php echo $_GET['id']?>";

	xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {

			document.getElementById("focuso").innerHTML = this.responseText;


			scroll(0, 0);

		}
	};
	xmlhttp.open("get", "php/liste_approches.php?id=" + projet + "&num=" + str);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send();
}


function refuser_projet() {

	com = document.getElementById("como").value;
	if (com == "") {
		alert("Merci de spécifier les raison de refus ");
		return;
	}

	nom = "<?php echo $reqq2['nomProjet']  ?>";
	document.getElementById("attention").style.display = "block";
	scroll(0, 0);
	document.getElementById("attention").style.backgroundColor = "orange";
	$("#attention").fadeOut();
	$("#attention").html("Opération en cours ...").fadeIn();

	id = "<?php echo $_GET['id']?>";

	$.ajax({

		type: "POST",
		url: "php/refuser_projet.php",
		data: {
			id: id,
			com: com
		},
		success: function () {


			document.getElementById("attention").style.backgroundColor = "red";
			$("#attention").fadeOut();
			$("#attention").html("Succes - Projet " + nom + " refusé").fadeIn();
			document.getElementById("statut").innerHTML = '<span style="color:red">Refusé </span>';


		}
	});


}

function annuler_refus() {
	document.getElementById("div_com").style.display = "none";
	document.getElementById("p_com").style.display = "block";
	document.getElementById("reff").style.display = "none";

}


function refuser1(str) {

	document.getElementById("div_com").style.display = "block";
	document.getElementById("p_com").style.display = "none";
	if (str == 1)
		document.getElementById("ref2").scrollIntoView();

}
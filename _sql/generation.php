<?php
require "../_include/inc_config.php";

$nbclient=50;
$nbchargeclient=50;
$nbproduit=6;

//Insertion des clients
	//$tvId=1000;
	//$tvPW=2000;
	$sql="insert into client values (null,:nom,:prenom,:tel,:mail,:teamViewerID,:teamViewerPW,:rdv,:objet,:chargeclient,:produit)";
	$statement = $link->prepare($sql);
	
	for($i=1;$i<=$nbclient;$i++) {
		$cc=mt_rand(1,50);
		$produit=mt_rand(1,6);
		$statement->bindValue(":nom","",PDO::PARAM_STR);
		$statement->bindValue(":prenom","",PDO::PARAM_STR);
		$statement->bindValue(":tel","",PDO::PARAM_INT);
		$statement->bindValue(":mail","",PDO::PARAM_STR);
		$statement->bindValue(":teamViewerID","",PDO::PARAM_INT);
		$statement->bindValue(":teamViewerPW","",PDO::PARAM_INT);
		$statement->bindValue(":rdv","",PDO::PARAM_STR);
		$statement->bindValue(":objet","",PDO::PARAM_STR);
		$statement->bindValue(":chargeclient","$cc",PDO::PARAM_INT);
		$statement->bindValue(":produit","$produit",PDO::PARAM_INT);
		$statement->execute();
		//$tvId++;
		//$tvPW--;
	}

//Insertion des chargés clients

	$sql="insert into chargeclient values (null,:nom,:prenom,:idposte,:telint,:portable,:mail,:mdp,:profil)";
	$statement = $link->prepare($sql);
	$cc_m=01;
	
	for($i=1;$i<=$nbchargeclient;$i++) {
		$ti=mt_rand(10000000,19999999);
		$por=mt_rand(6000000,6999999);
		$zero='0';
		$porta=$zero.$por;
		$ip=100;
		if($i==0)
			$rofil="admin";
		else
			$profil="gestion";
		$statement->bindValue(":nom","nom $i",PDO::PARAM_STR);
		$statement->bindValue(":prenom","prénom $i",PDO::PARAM_STR);
		$statement->bindValue(":idposte","$ip",PDO::PARAM_INT);
		$statement->bindValue(":telint","$ti",PDO::PARAM_INT);
		$statement->bindValue(":portable","$porta",PDO::PARAM_INT);
		$statement->bindValue(":mail","nuzzo.marcel$cc_m@aliceadsl.fr",PDO::PARAM_STR);
		$statement->bindValue(":mdp","mdp $i",PDO::PARAM_STR);
		$statement->bindValue(":profil","$profil",PDO::PARAM_STR);
		$statement->execute();
		$cc_m++;
		$ip++;
	}
	
//insertion des produits

	$tab=["loupe",
	"lampe loupe",
	"zoomtext",
	"jaws",
	"plage braille",
	"montre parlante"];
	$ref=100;
	$prix=100;
	$qte=mt_rand(1,20);
	$sql="insert into produit values (null,:nom,:ref,:prix,:qte)";
	$statement = $link->prepare($sql);
	for($i=0;$i<$nbproduit;$i++) {
		$statement->bindValue(":nom","$tab[$i]",PDO::PARAM_STR);
		$statement->bindValue(":ref"," $ref",PDO::PARAM_STR);
		$statement->bindValue(":prix","$prix",PDO::PARAM_INT);
		$statement->bindValue(":qte","$qte",PDO::PARAM_INT);
		$statement->execute();
		$ref++;
		$prix+=$prix;
	}
	
?>
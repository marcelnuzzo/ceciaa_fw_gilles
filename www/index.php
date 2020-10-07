<?php
require "../_include/inc_config.php";
//paremetre $_GET m=module et a=action
if(isset($_SESSION["profil"])) 
	$controleur=(isset($_GET["m"]) ) ? $_GET["m"] : "accueil";
else
	$controleur=(isset($_GET["m"]) ) ? $_GET["m"] : "_default";
$action=(isset($_GET["a"]) ) ? $_GET["a"] : "index";

$module = "Ctr_" . $controleur;
new $module($action);
?>

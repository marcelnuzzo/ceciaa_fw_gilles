<?php

class Ctr_chargeclient extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("chargeclient", $action);
        $this->table="chargeclient";
        $this->classTable = "Chargeclient";
        $this->cle = "cha_id";
        $a = "a_$action";
        $this->$a();
    }
	
	function a_index() {
		$result=Chargeclient::selectAll("chargeclient");
		require $this->gabarit;
	}
	
	function a_editCc() {
		$rechercheCc = (isset($_POST["rechercheCc"])) ? $_POST["rechercheCc"] : "";
		$result = Chargeclient::liste($rechercheCc);
		require $this->gabarit;
	}
	
	function a_indexCc() {
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Chargeclient($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$_POST["cha_mdp"]=password_hash($_POST["cha_mdp"], PASSWORD_DEFAULT);
			$u=new Chargeclient();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		else {
		?>
		<a href="accueil.php">accueil</a>
		<?php 
		}
		header("location:index.php?m=chargeclient");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Chargeclient::supprimer("chargeclient","cha_id",$_GET["id"]);
		}
		header("location:index.php?m=chargeclient");
	}
}

?>
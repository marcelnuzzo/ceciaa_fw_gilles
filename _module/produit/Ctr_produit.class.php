<?php

class Ctr_produit extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("produit", $action);
        $this->table="produit";
        $this->classTable = "Produit";
        $this->cle = "pro_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Produit::selectAll("produit");
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Produit($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Produit();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=produit");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Produit::supprimer("produit","pro_id",$_GET["id"]);
		}
		header("location:index.php?m=produit");
	}
}

?>
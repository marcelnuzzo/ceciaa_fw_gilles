<?php

class Ctr_client extends Ctr_controleur {

    public function __construct($action) {
        parent::__construct("client", $action);
        $this->table="client";
        $this->classTable = "Client";
        $this->cle = "cli_id";
        $a = "a_$action";
        $this->$a();
    }

	function a_index() {
		$result=Client::liste();
		require $this->gabarit;
	}
	
	function a_editCli() {
		$rechercheCli = (isset($_POST["rechercheCli"])) ? $_POST["rechercheCli"] : "";
		$result = Client::listeCli($rechercheCli);
		require $this->gabarit;
	}
	
	function a_indexCli() {
		require $this->gabarit;
	}
	
	//$_GET["id"] : id de l'enregistrement
	function a_edit() {
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		$u=new Client($id);
		extract($u->data);	
		require $this->gabarit;
	}

	//$_POST : enregistrement à sauver
	function a_save() {
		if (isset($_POST["btSubmit"])) {
			$u=new Client();
			$u->chargerDepuisTableau($_POST);
			$u->sauver();
		}
		
		header("location:index.php?m=client");
	}

	//param GET id 
	function a_del() {
		if (isset($_GET["id"])) {
			Client::supprimer("client","cli_id",$_GET["id"]);
		}
		header("location:index.php?m=client");
	}
}

?>
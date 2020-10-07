<?php
class Client extends Entity {
	public function __construct($id=0) {
		parent::__construct("client", "cli_id",$id);
	}
	
	static public function listeCli($rechercheCli) {
		$sql = "SELECT * FROM client,chargeclient,produit WHERE cli_cc=cha_id and cli_produit=pro_id and CONCAT(cli_nom, cli_prenom,cli_mail) LIKE '%$rechercheCli%'";
		return self::$link->query($sql);
	}
	
	static public function liste() {
		$sql="select * from client,chargeclient,produit where cli_cc=cha_id and cli_produit=pro_id";
		return self::$link->query($sql);
	}
	
}
?>

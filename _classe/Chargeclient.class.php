<?php
class Chargeclient extends Entity {
	public function __construct($id=0) {
		parent::__construct("chargeclient", "cha_id",$id);
	}
	
	static public function liste($rechercheCc) {
		$sql = "SELECT * FROM chargeclient WHERE CONCAT(cha_nom, cha_prenom,cha_idposte,cha_mail,cha_profil) LIKE '%$rechercheCc%'";
		return self::$link->query($sql);
	}
	
	//vérifie que $cha_mail est dans chageclient
	static function verification($cha_mail) {
		$sql="select * from chargeclient where cha_mail=?";
		$statement = self::$link->prepare($sql);
		$statement->bindValue(1,$cha_mail,PDO::PARAM_STR);
		$statement->execute();
		if ($statement->rowCount()==1)
			return $statement->fetch(PDO::FETCH_ASSOC);
		else
			return false;
	}

}
?>

<?php
class Produit extends Entity {
	public function __construct($id=0) {
		parent::__construct("produit", "pro_id",$id);
	}
	
	static public function liste() {
		$sql="select * from produit";
		return self::$link->query($sql);
	}
}
?>

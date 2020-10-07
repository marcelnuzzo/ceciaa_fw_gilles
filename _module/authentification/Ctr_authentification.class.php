<?php
class Ctr_authentification extends Ctr_controleur {
	public function __construct($action) {
        parent::__construct("authentification", $action,"modele_authentification.php");        
        $a = "a_$action";
        $this->$a();
    }
	
	function a_index()
	{		
		//traitement du formulaire
		
		if (isset($_POST["btSubmit"]))
		{
			extract($_POST);
			
				if ($row = Chargeclient::verification($cha_mail) ) 
				{	
					
					if (password_verify($_POST['cha_mdp'],  $row["cha_mdp"])) {		
						//var_dump($_SESSION);
						$_SESSION["cha_id"]=$row["cha_id"];
						$_SESSION["cha_mail"]=$row["cha_mail"];
						$_SESSION["cha_nom"]=$row["cha_nom"];
						$_SESSION["cha_prenom"]=$row["cha_prenom"];
						$_SESSION["profil"]=$row["cha_profil"];
						header("location:" . hlien("accueil","index"));
					} 
					else
						header("location:" . hlien("authentification","index","para",1));	
				}
				else
					header("location:" . hlien("authentification","index","para",1));	
		}
		else 
			require $this->gabarit;		
	}
	
	function a_deconnexion()
	{
		unset($_SESSION["cha_id"]);
		session_destroy();
		header("location:" . hlien("accueil","index"));
	}
	
}

?>
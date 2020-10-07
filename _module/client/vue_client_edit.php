<?php
$_SESSION["toto"]=false;

if (isset($_POST["btSubmit"])) {
	$_SESSION["toto"]=true;
}
?>       
	   <h1><?=$cli_id ? "Modification client : $cli_nom" : "Ajouter un nouveau client"?></h1>
		<form method="post" action="<?=hlien("client","save")?>">
		<input type="hidden" name="cli_id" id="cli_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='cli_nom'>Nom</label>
                            <input id='cli_nom' name='cli_nom' type='text' size='50' required value='<?=mhe($cli_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cli_prenom'>Prenom</label>
                            <input id='cli_prenom' name='cli_prenom' type='text' size='50' value='<?=mhe($cli_prenom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cli_tel'>Tel</label>
							<input type="tel" id="cli_tel" name="cli_tel" required class="form-control" value='<?=mhe($cli_tel)?>' pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$">
                        </div>
                        <div class='form-group'>
                            <label for='cli_mail'>Mail</label>
							 <input id='cli_mail' name='cli_mail' type='text' size='50' value='<?=mhe($cli_mail)?>'  class='form-control'					"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" />
                        </div>
                        <div class='form-group'>
                            <label for='cli_teamViewerID'>TeamViewerID</label>
                            <input id='cli_teamViewerID' name='cli_teamViewerID' type='text' size='50' value='<?=mhe($cli_teamViewerID)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cli_teamViewerPW'>TeamViewerPW</label>
                            <input id='cli_teamViewerPW' name='cli_teamViewerPW' type='text' size='50' value='<?=mhe($cli_teamViewerPW)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cli_rdv'>Rdv</label>
                            <input id='cli_rdv' name='cli_rdv' type='text' size='50' value='<?=mhe($cli_rdv)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cli_objet'>Objet</label>
                            <input id='cli_objet' name='cli_objet' type='text' size='50' value='<?=mhe($cli_objet)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cli_date'>Date</label>
                            <input id='cli_date' name='cli_date' type='date' size='20' value='<?=mhe($cli_date)?>'  class='form-control' />
                        </div>
						<div class='form-group'>
							<label for='cli_cc'>Nom du chargé client</label>
							<?php if($cli_id>0) { ?>
							<select id='cli_cc' name='cli_cc'>
							<?=Entity::HTMLselect("select cha_id id, cha_nom label from chargeclient",$cli_cc)?>
							</select>
							<?php } else { ?>
							<select id='cli_cc' name='cli_cc'>
							<?=Entity::HTMLselect("select cha_id id, cha_nom label from chargeclient",null)?>
							</select>
							<?php } ?>
						</div>
						<div class='form-group'>
							<label for='cli_produit'>Nom du produit</label>
							<select id='cli_produit' name='cli_produit'>
							<?=Entity::HTMLselect("select pro_id id, pro_nom label from produit",$cli_produit)?>
							</select>
						</div>
						<div class='form-group'>
                            <label for='dest'>Destinataire(s)</label>
                            <input id='dest' name='dest' type='text' size='50' value='<?php $dest ?>' placeholder="Inscrivez les noms ou prénom des destinataires du Mail séparés par une virgule" class='form-control' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form> 
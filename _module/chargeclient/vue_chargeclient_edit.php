        <h1><?=$cha_id ? "Modification chargé client : $cha_nom" : "Ajouter un nouveau chargé client"?></h1>
		<form method="post" action="<?=hlien("chargeclient","save")?>">
		<input type="hidden" name="cha_id" id="cha_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='cha_nom'>Nom</label>
                            <input id='cha_nom' name='cha_nom' type='text' size='50' required value='<?=mhe($cha_nom)?>' pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ ]{1,20}+$"  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_prenom'>Prenom</label>
                            <input id='cha_prenom' name='cha_prenom' type='text' size='50' value='<?=mhe($cha_prenom)?>' pattern="^[a-zA-ZáàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ ]{1,20}+$"  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_idposte'>Idposte</label>
                            <input id='cha_idposte' name='cha_idposte' type='text' size='50' value='<?=mhe($cha_idposte)?>' pattern="^[0-2]{0,1}[0-9]{0,1}[0-9]{0,1}$"  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_telint'>Telint</label>
                            <input id='cha_telint' name='cha_telint' type='text' size='50' value='<?=mhe($cha_telint)?>' pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$" class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_portable'>Portable</label>
                            <input id='cha_portable' name='cha_portable' type='text' size='50' value='<?=mhe($cha_portable)?>'pattern="^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$" class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_mail'>Mail</label>
                            <input id='cha_mail' name='cha_mail' type='text' size='50' required value='<?=mhe($cha_mail)?>' pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_mdp'>Mdp</label>
                            <input id='cha_mdp' name='cha_mdp' type='text' size='50' value='<?=mhe($cha_mdp)?>'  class='form-control' />
                        </div>
						<div class='form-group'>
							<label for="cha_profil">profil</label>
							 <select id='cha_profil' name='cha_profil'>	
								<option value="admin" <?=($cha_profil=="admin") ? "selected" : ""?> >admin</option>
								<option value="gestion"  <?=($cha_profil=="gestion") ? "selected" : ""?> >gestion</option>
							</select>
						</div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              
        <h1>Inscription chargé client</h1>
		<form method="post" action="<?=hlien("profilCc","save")?>">
		<input type="hidden" name="cha_id" id="cha_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='cha_nom'>Nom</label>
                            <input id='cha_nom' name='cha_nom' type='text' size='50' value='<?=mhe($cha_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_prenom'>Prenom</label>
                            <input id='cha_prenom' name='cha_prenom' type='text' size='50' value='<?=mhe($cha_prenom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_idposte'>Idposte</label>
                            <input id='cha_idposte' name='cha_idposte' type='text' size='50' value='<?=mhe($cha_idposte)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_telint'>Telint</label>
                            <input id='cha_telint' name='cha_telint' type='text' size='50' value='<?=mhe($cha_telint)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_portable'>Portable</label>
                            <input id='cha_portable' name='cha_portable' type='text' size='50' value='<?=mhe($cha_portable)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='cha_mail'>Mail</label>
                            <input id='cha_mail' name='cha_mail' type='text' size='50' value='<?=mhe($cha_mail)?>'  class='form-control' />
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
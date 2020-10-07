        <form method="post" action="<?=hlien("produit","save")?>">
		<input type="hidden" name="pro_id" id="pro_id" value="<?= $id ?>" />
                        <div class='form-group'>
                            <label for='pro_nom'>Nom</label>
                            <input id='pro_nom' name='pro_nom' type='text' size='50' value='<?=mhe($pro_nom)?>'  class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label for='pro_ref'>Ref</label>
                            <input id='pro_ref' name='pro_ref' type='text' size='50' value='<?=mhe($pro_ref)?>' />
                        </div>
                        <div class='form-group'>
                            <label for='pro_prix'>Prix</label>
                            <input id='pro_prix' name='pro_prix' type='number' min="0" value='<?=mhe($pro_prix)?>' />
                        </div>
						<div class='form-group'>
                            <label for='pro_qte'>Quantité</label>
                            <input id='pro_qte' name='pro_qte' type='number' min="0" value='<?=mhe($pro_qte)?>' />
                        </div>
		<input class="btn btn-success" type="submit" name="btSubmit" value="Enregistrer" />
	</form>              
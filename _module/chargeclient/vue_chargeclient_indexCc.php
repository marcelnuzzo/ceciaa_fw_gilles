<h1>Champ de recherche</h1>
<form action="<?=hlien("chargeclient","editCc")?>" method="POST" class="form-inline text-center">
	<div class="input-group">
		<input type="text" name="rechercheCc" id="rechercheCc" class="form-control" placeholder="Rechercher dans l'historique">
		<div class="input-group-btn ">
			<button type="submit" class="btn btn-info"><span class="fa fa-search"></span>
			  RechercherCc
			</button>
		</div>
	</div>
</form>
<script>
	var liste = [
    "Draggable",
    "Droppable",
    "Resizable",
    "Selectable",
    "Sortable"
];

$('#rechercheCc').autocomplete({
    source : liste
});
</script>
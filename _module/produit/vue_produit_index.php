        <h1 class="text-center">Produits</h1>
		<?php if($_SESSION["profil"]=="admin") { ?>
		<div class="a">
        <p><a class="btn btn-warning" href="<?=hlien("produit","edit","id",0)?>">Nouveau produit</a></p>
		</div>
		<?php } ?>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			
			<th>Id</th>
			<th>Nom</th>
			<th>Ref</th>
			<th>Prix</th>
			<th>Quantité</th>
			<?php if($_SESSION["profil"]=="admin") { ?>
			<th>modifier</th>
			<th>supprimer</th>
			<?php } ?>
		</tr>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['pro_id'])?></td>
			<td><?=mhe($row['pro_nom'])?></td>
			<td><?=mhe($row['pro_ref'])?></td>
			<td><?=mhe($row['pro_prix'])?></td>
			<td><?=mhe($row['pro_qte'])?></td>
			<?php if($_SESSION["profil"]=="admin") { ?>
			<td><a class="btn btn-info" href="<?=hlien("produit","edit","id",$row["pro_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("produit","del","id",$row["pro_id"])?>">Supprimer</a></td>
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
<h1>Résultat de la recherche chargé client :</h1>
<?php 
$_SESSION["toto"]="";
if(isset($_POST['rechercheCc'])) { 
	
?>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Idposte</th>
			<th>Telint</th>
			<th>Portable</th>
			<th>Mail</th>
			<th>Mdp</th>
			<th>Profil</th>
			<th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
	 
		foreach ( $result as $row) { 
			extract($row);
				?>
		<tr>
			<td><?=mhe($row['cha_id'])?></td>
			<td style="overflow:hidden"><?=mhe($row['cha_nom'])?></td>
			<td style="overflow:hidden"><?=mhe($row['cha_prenom'])?></td>
			<td><?=mhe($row['cha_idposte'])?></td>
			<td><?=mhe($row['cha_telint'])?></td>
			<td><?=mhe($row['cha_portable'])?></td>
			<?php $tailleMail=strlen($row["cha_mail"]);
			if($tailleMail > 20) { ?>
				<td style="overflow:scroll"><?=mhe($row['cha_mail'])?></td>
			<?php } else { ?>
				<td><?=mhe($row['cha_mail'])?></td>
			<?php } ?>
			<td style="overflow:hidden;max-width:20"><?=mhe($row['cha_mdp'])?></td>
			<td><?=mhe($row['cha_profil'])?></td>
			<td><a class="btn btn-info" href="<?=hlien("chargeclient","edit","id",$row["cha_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("chargeclient","del","id",$row["cha_id"])?>">Supprimer</a></td>
		</tr>
	<?php $_SESSION["toto"]=$row['cha_id'];
	
	} ?>
	</table>
	<?php
	if($_SESSION["toto"]=="") { ?>
		<div class="alert alert-warning text-center">
			<h2>Pas de chargé client avec cette occurrence</h2>
		</div>
		<?php
	}
}
?>
<h1>Résultat de la recherche client :</h1>
<?php 
$_SESSION["toto"]="";
if(isset($_POST['rechercheCli'])) { 
?>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Tel</th>
			<th>Mail</th>
			<th>team</br>Viewer</br>ID</th>
			<th>team</br>Viewer</br>PW</th>
			<th>RDV</th>
			<th>Objet</th>
			<th>Date</th>
			<th>Nom cc</th>
			<th>nom</br>produits</th>
			<th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
	 
		foreach ( $result as $row) { 
			extract($row);
				?>
		<tr>
			<td><?=mhe($row['cli_id'])?></td>
			<td><?=mhe($row['cli_nom'])?></td>
			<td><?=mhe($row['cli_prenom'])?></td>
			<td><?=mhe($row['cli_tel'])?></td>
			<?php $tailleMail=strlen($row["cli_mail"]);
			if($tailleMail > 20) { ?>
				<td style="overflow:scroll"><?=mhe($row['cli_mail'])?></td>
			<?php } else { ?>
				<td><?=mhe($row['cli_mail'])?></td>
			<?php } ?>
			<?php $tailleTvid=strlen($row["cli_teamViewerID"]);
			if($tailleTvid > 20) { ?>
				<td style="overflow:scroll"><?=mhe($row['cli_teamViewerID'])?></td>
			<?php } else { ?>
				<td><?=mhe($row['cli_teamViewerID'])?></td>
			<?php } ?>
			<?php $tailleTvpw=strlen($row["cli_teamViewerPW"]);
			if($tailleTvpw > 30) { ?>
				<td style="overflow:scroll"><?=mhe($row['cli_teamViewerPW'])?></td>
			<?php } else { ?>
				<td><?=mhe($row['cli_teamViewerPW'])?></td>
			<?php } ?>
			<td><?=mhe($row['cli_rdv'])?></td>
			<?php $tailleObj=strlen($row["cli_objet"]);
			if($tailleObj > 30) { ?>
				<td style="overflow:scroll"><?=mhe($row['cli_objet'])?></td>
			<?php } else { ?>
				<td><?=mhe($row['cli_objet'])?></td>
			<?php } ?>
			<td><?=mhe($row['cli_date'])?></td>
			<td style="overflow:hidden;max-width:20"><?=mhe($row['cha_nom'])?></td>
			<td><?=mhe($row['pro_nom'])?></td>
			<td><a class="btn btn-info" href="<?=hlien("client","edit","id",$row["cli_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("client","del","id",$row["cli_id"])?>">Supprimer</a></td>
		</tr>
	
	<?php 
	$_SESSION["toto"]=$row["cli_id"];
	} ?>
	</table>
	<?php
	if($_SESSION["toto"]=="") { ?>
		<div class="alert alert-warning text-center">
			<h2>Pas de client avec cette occurrence</h2>
		</div>
		<?php
	}
}
?>
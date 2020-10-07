 <?php
		use _module\PHPMailer\PHPMailer\PHPMailer;
		use _module\PHPMailer\PHPMailer\Exception;
		function envoiMail($sujet,$objet,$cha_mail,$MailDest) {
		/* Exception class. */
		require 'C:\wamp64\www\PHPMailer\src\Exception.php';
		/* The main PHPMailer class. */
		require 'C:\wamp64\www\PHPMailer\src\PHPMailer.php';
		/* SMTP class, needed if you want to use SMTP. */
		require 'C:\wamp64\www\PHPMailer\src\SMTP.php';

		$mail = new PHPMailer(TRUE);
		try {

	    //Server settings
	    $mail->SMTPDebug = 2;                                     // Enable verbose debug output
	    $mail->isSMTP(); 
	    //$mail->Host       = 'zimbra.ceciaa.com';                                  // Set mailer to use SMTP
	    $mail->Host       = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
	    $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
	    $mail->Username   = 'nuzzo.marcel@gmail.com';             // SMTP username
	    $mail->Password   = 'marcel316497';                       // SMTP password
	    $mail->SMTPSecure = 'ssl';                                // Enable TLS encryption, `ssl` also accepted
	    $mail->Port       = 465;                                  // TCP port to connect to

	    //Recipients
	    $mail->CharSet = 'UTF-8'; 
	    $mail->setFrom($cha_mail);
	    /*
	    foreach ($MailDestinataires as $tab) {
	    	$mail->addAddress($tab); 
	    }
	    */
	    //$mail->addAddress($MailDestinataires);           // Add a recipient
$mail->addAddress('nuzzo.marcel@aliceadsl.fr');                   //adresse de test Marcel Nuzzo    
	    //$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC($MailDestinataires);
	    //$mail->addBCC('bcc@example.com');

	    // Attachments  (pièces jointes)
	    //$mail->addAttachment('/var/tmp/file.tar.gz');           // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');      // Optional name

	    // Content
	    $mail->isHTML(true);                                      // Set email format to HTML
	    $mail->Subject = $sujet;
	    $mail->Body    = $objet;
	    $mail->AltBody = $objet;

	    $mail->send();
	    
	} catch (Exception $e) {
	    echo "Le message n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
	}
}
if($_SESSION["toto"]==true) {
	$sujet=$_POST["cli_rdv"];
	$objet=$_POST["cli_objet"];
	enviMail($sujet,$objet,$cha_mail,$MailDest);
	//$_SESSION["toto"]=false;
}
var_dump($_SESSION);
?>
		<h1 class="text-center">Clients</h1>
		<div class="a">
        <p><a class="btn btn-warning" href="<?=hlien("client","edit","id",0)?>">Nouveau client</a></p>
		</div>
	<table class="table table-striped table-bordered table-hover">
		<tr>
			<th>Id</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Tel</th>
			<th>Mail</th>
			<th>Team</br>Viewer</br>ID</th>
			<th>Team</br>Viewer</br>PW</th>
			<th>Rdv</th>
			<th>Objet</th>
			<th>Date</th>
			<th>Nom du chargé client</th>
			<th>Nom du produit</th>
			<th>modifier</th>
			<th>supprimer</th>
		</tr>
		<?php
		foreach ( $result as $row) { 
			extract($row); ?>
		<tr>
			
			<td><?=mhe($row['cli_id'])?></td>
			<td style="overflow:hidden"><?=mhe($row['cli_nom'])?></td>
			<td style="overflow:hidden"><?=mhe($row['cli_prenom'])?></td>
			<td><?=mhe($row['cli_tel'])?></td>
			<?php $tailleMail=strlen($row["cli_mail"]);
			if($tailleMail > 15) { ?>
				<td style="overflow:scroll"><?=mhe($row['cli_mail'])?></td>
			<?php } else { ?>
				<td><?=mhe($row['cli_mail'])?></td>
			<?php } ?>
			<td><?=mhe($row['cli_teamViewerID'])?></td>
			<td><?=mhe($row['cli_teamViewerPW'])?></td>
			<td><?=mhe($row['cli_rdv'])?></td>
			<td><?=mhe($row['cli_objet'])?></td>
			<td><?=mhe($row['cli_date'])?></td>
			<td style="overflow:hidden"><?=mhe($row['cha_nom'])?></td>
			<td><?=mhe($row['pro_nom'])?></td>
			<td><a class="btn btn-info" href="<?=hlien("client","edit","id",$row["cli_id"])?>">Modifier</a></td>
			<td><a class="btn btn-danger" href="<?=hlien("client","del","id",$row["cli_id"])?>">Supprimer</a></td>
		</tr>
		<?php } ?>
	</table>
	
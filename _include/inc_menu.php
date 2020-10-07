<nav class="navbar  navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">&nbsp;</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	<li><a href="<?=hlien("authentification","deconnexion")?>">Déconnexion</a></li>
	<?php if(!isset($_SESSION["profil"])=="anonyme") { ?>
		<ul class="nav navbar-nav">
			<li><a href='<?=hlien("accueil","index")?>'>Accueil</a></li>
			<li><a href='<?=hlien("chargeclient","index")?>'>Chargeclients</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href='<?=hlien("authentification","index")?>'>Connexion</a></li>
		</ul>
	<?php } else if($_SESSION["profil"]=="admin") { ?>
      <ul class="nav navbar-nav">
		<li><a href='<?=hlien("accueil","index")?>'>Accueil</a></li>
        <li><a href='<?=hlien("chargeclient","index")?>'>Chargeclients</a></li>
		<li><a href='<?=hlien("client","index")?>'>Clients</a></li>
		<li><a href='<?=hlien("produit","index")?>'>Produits</a></li>
		<li><a href='<?=hlien("profilCc","edit")?>'>Inscription chargé client</a></li>
		<li><a href='<?=hlien("chargeclient","indexCc")?>'>rechercheCc</a></li>
		<li><a href='<?=hlien("client","indexCli")?>'>rechercheCli</a></li>
	  </ul>
      <ul class="nav navbar-nav ">
		<li><a href="<?=hlien("authentification","deconnexion")?>">Déconnexion</a></li>
      </ul>
		<?php if(isset($_SESSION["profil"])) { ?>
		<p>Session ouverte par : </br> <?php echo $_SESSION["cha_nom"]." ".$_SESSION["cha_prenom"]; ?>
		<?php } ?></p>
	<?php } else if($_SESSION["profil"]=="gestion") { ?>
		 <ul class="nav navbar-nav">
			<li><a href='<?=hlien("accueil","index")?>'>Accueil</a></li>
			<li><a href='<?=hlien("chargeclient","index")?>'>Chargeclients</a></li>
			<li><a href='<?=hlien("client","index")?>'>Clients</a></li>
			<li><a href='<?=hlien("produit","index")?>'>Produits</a></li>
			<li><a href='<?=hlien("profilCc","edit")?>'>Inscription chargé client</a></li>
			<li><a href='<?=hlien("chargeclient","indexCc")?>'>rechercheCc</a></li>
			<li><a href='<?=hlien("client","indexCli")?>'>rechercheCli</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="<?=hlien("authentification","deconnexion")?>">Déconnexion</a></li>
		  </ul>
		    <?php if(isset($_SESSION["profil"])) { ?>
			<p>Session ouverte par : </br> <?php echo $_SESSION["cha_nom"]." ".$_SESSION["cha_prenom"]; ?>
			<?php } ?></p>
	<?php } else { ?>
			 <ul class="nav navbar-nav navbar-right">
			<li><a href="<?=hlien("authentification","deconnexion")?>">Déconnexion</a></li>
		  </ul>
	<?php } ?>
    </div>
  </div>
</nav>

<script>
    tab=document.querySelectorAll(".nav > li > a");
    const module="<?=ucfirst($this->module)?>";
    tab.forEach(function(obj) {
        if (obj.innerHTML===module) {
            obj.parentElement.className="menusel";
            return true;
        }
    });
</script>
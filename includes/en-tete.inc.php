		<div id="page">
			<header>
				<div id="header">
<?php
	if(defined('S_NOM')){
?>
					<h1><?php echo f_encode(S_NOM); ?></h1>
<?php
	}
?>
					<nav>
						<ul id="logo">
							<!-- [Attention] Style : Ne pas changer les valeurs des tags "alt" qui sont utilisés par le style -->
							<li><a title="Rad'iut" href="index.php"><img class="radio_iut" src="<?php echo RRR_IMAGES; ?>logo.png" alt="Rad'iut"></a></li>
							<li><a title="Play" target="_blank" href="?p=play"><img class="play" src="<?php echo RRR_IMAGES; ?>play.png" alt="Play"></a></li>
						</ul>
					</nav>
				</div>
			</header>
			<div id="menu">
				<!-- [Attention] Style : Ne pas changer les valeurs des tags "alt" qui sont utilisés par le style -->
				<div id="mGauche">
					<nav>
						<ul>
							<li><a title="Équipe" href="?p=equipe"><img class="element" src="<?php echo RRR_IMAGES; ?>equipe.png" alt="Equipe"></a></li>
							<li><a title="Émission" href="?p=emission"><img class="element" src="<?php echo RRR_IMAGES; ?>emission.png" alt="Emission"></a></li>
							<li><a title="Bonus" href="?p=bonus"><img class="element" src="<?php echo RRR_IMAGES; ?>bonus.png" alt="Bonus"></a></li>
						</ul>
					</nav>
				</div>
				<div id="mDroite">
					<nav>
						<ul>
							<li><a title="Contact" href="?p=contact"><img class="element" src="<?php echo RRR_IMAGES; ?>contact.png" alt="Contact"></a></li>
							<li><a title="Copyright" href="?p=copyright"><img class="element" src="<?php echo RRR_IMAGES; ?>copyright.png" alt="Copyright"></a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div id="corps">
				<div id="contenu">

<?php
	# Titre de la page
	define('P_NOM', 'Accueil');
	# Description de la page
	define('P_DESCRIPTION', 'Page d\'accueil');
	# Keywords
	$P_KEYWORD[]='accueil';
	$P_KEYWORD[]='index';
	require_once(RA_INCLUDES.'header.inc.php');
?>
<article>
	<!-- <h1>Accueil</h1> 16.01, le client ne souhaite pas que l'on reprécise que c'est l'accueil-->
	<p>
		Mesdames, Messieurs !
	</p>
	<p>
		Rad'IUT, Rendez - vous sur les ondes !
	</p>
	<p>
		<strong class="importantSize">
			L'émission de Février est sortie,<br />
			Nous vous attendons avec impatience !
		</strong>
	</p>
	<p>
		<img class="centrer" src="<?php echo RRR_IMAGES; ?>flyer.png" alt="Flyer"/>
	</p>
</article>
<?php
	require_once(RA_INCLUDES.'footer.inc.php');
?>
<?php
	# Titre de la page
	define('P_NOM', 'Bonus');
	# Description de la page
	define('P_DESCRIPTION', 'Bonus');
	# Keywords
	$P_KEYWORD[]='bonus';
	require_once(RA_INCLUDES.'head.inc.php');
	require_once(RA_INCLUDES.'en-tete.inc.php');
?>
<article>
	<h1>Bienvenue dans les bonus !</h1>
	<p>
		Pour votre plus grand plaisir nous vous offrons  un teaser, qui vous donnera un petit avant goût de ce qu'est réellement Rad'IUT.
	</p>
	<p>
		Le voici !!
	</p>
	<p>
 <?php
	echo f_htmlVideo('teaser_def');
?> <!-- ça ne marche pas sur firefox donc je test avec autre chose 11.02.2012-->

	</p>
	
	<!-- <p>Un petit album photo ! Ainsi vous aurez une légère idée de l'ambiance de travail de Envie D'Prod tout au long de l'année 2012 !
	<a title="Album" href="album.public.php"><img src="<?php echo RRR_IMAGES; ?>album.png" alt="Album"></a>
	</p> -->
	
</article>
<?php
	require_once(RA_INCLUDES.'footer.inc.php');
?>
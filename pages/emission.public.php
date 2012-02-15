<?php
	# Titre de la page
	define('P_NOM', 'Émission');
	# Description de la page
	define('P_DESCRIPTION', 'Nos émissions');
	# Keywords
	$P_KEYWORD[]='émission';
	$P_KEYWORD[]='emission';
	require_once(RA_INCLUDES.'head.inc.php');
	require_once(RA_INCLUDES.'en-tete.inc.php');
?>
<article>
	<h1>Émission</h1>
	<p>
		Nos émissions sont imaginées par l'ensemble de l'équipe.
		Puis chaque rubrique est enregistrée par les différents membres de l'équipe.
		Les musiques sont fournies par <strong>Lorène</strong>. <strong>Lucas</strong> quand à lui monte les émissions.
		Pour finir elles sont diffusées sur le site web, pour votre plus grand plaisir.
	</p>
	<p>
		Bonne écoute !
	</p>
	<p>
	La première émission du 1er Février 2012 !! 
	<!--Si vraiment on arrive pas a faire marcher le site sur Firefox on utilisera ce player générer par le site sound cloud-->
<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F35977365%3Fsecret_token%3Ds-ffoJ6&amp;auto_play=false&amp;show_artwork=false&amp;color=49458f"></iframe>
<!-- <?php
	echo f_htmlAudio('01');
?> -->
	</p>
	<p>
		<img src="<?php echo RRR_IMAGES; ?>frise.png" alt="frise"/>
	</p>
</article>
<?php
	require_once(RA_INCLUDES.'footer.inc.php');
?>
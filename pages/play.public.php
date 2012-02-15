<link rel="stylesheet" href="<?php echo RRR_STYLESHEETS; ?>play2.css" type="text/css" media="screen" />
	<link rel="icon" type="image/png" href="<?php echo RRR_IMAGES; ?>favicon.png" />
		<link rel="shortcut icon" href="<?php echo RRR_IMAGES; ?>favicon.png"/>
<?php
	# Titre de la page
	define('P_NOM', 'Play');
	# Description de la page
	define('P_DESCRIPTION', 'Play');
	# Keywords
	$P_KEYWORD[]='play';
	$P_KEYWORD[]='vidéo';
	require_once(RA_INCLUDES.'head.inc.php');
	#require_once(RA_INCLUDES.'en-tete.inc.php');
?>
<article>
	<!-- <h1>Play</h1> -->
	<p>
	<img src="<?php echo RRR_IMAGES; ?>ligne_nous.png" alt="nous"/>
	</p>
	<p>
		Emission number 1 !!
	</p>
	<p>
<!--Si vraiment on arrive pas a faire marcher le site sur Firefox on utilisera ce player générer par le site sound cloud-->
	<iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F35977365%3Fsecret_token%3Ds-ffoJ6&amp;auto_play=false&amp;show_artwork=false&amp;color=7b7b7b"></iframe>
<!-- <?php
	echo f_htmlAudio('01');
?> -->
	</p>
</article>

<?php
	require_once(RA_INCLUDES.'foot.inc.php');
?>
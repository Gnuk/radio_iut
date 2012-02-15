<?php
	# Titre de la page
	define('P_NOM', 'Album');
	# Description de la page
	define('P_DESCRIPTION', 'Album photo');
	# Keywords
	$P_KEYWORD[]='album';
	$P_KEYWORD[]='photo';
	require_once(RA_INCLUDES.'head.inc.php');
	require_once(RA_INCLUDES.'en-tete.inc.php');
?>
<article>

<album showbuttons="yes" showtitles="yes" randomstart="yes" timer="5" aligntitles="bottom" alignbuttons="bottom">
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (1).jpg" title="Micro"/> <!-- on met les noms des photos à cet endroit -->
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (2).jpg" title="Flo et Lucas"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (3).jpg" title="Floriane"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (4).jpg" title="studio"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (5).jpg" title="studio"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (6).jpg" title="protools"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (7).jpg" title="Floriane"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (8).jpg" title="Lucas"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (9).jpg" title="Lucas"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (10).jpg" title="présentateur"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (11).jpg" title="présentateur"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (12).jpg" title="Lucas et Gabriel"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (13).jpg" title="Silène"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (14).jpg" title="Gabriel s'énerve"/>
<img src="<?php echo RRR_IMAGES; ?>photo_radiut (15).jpg" title="Gab Luc Flo"/>
</album>
<!-- le but est de voir défilé des photo en diaporama. Mais cela ne fonctionne pas pour le moment, 29.01.2012 -->
</article>
<?php
	require_once(RA_INCLUDES.'footer.inc.php');
?>
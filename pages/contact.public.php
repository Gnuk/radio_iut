<?php
	# Titre de la page
	define('P_NOM', 'Contact');
	# Description de la page
	define('P_DESCRIPTION', 'Nous contacter');
	# Keywords
	$P_KEYWORD[]='contact';
	$P_KEYWORD[]='mail';
	require_once(RA_INCLUDES.'head.inc.php');
	require_once(RA_INCLUDES.'en-tete.inc.php');
?>
<article>
	<h1>Contact</h1>
	<p>
		Notre chargé de Communication se fera un plaisir de vous répondre :
	</p>
	<ul>
		<li>
			<strong>Gabriel Bertholon</strong> : gabriel.bertholon@etu.univ-savoie.fr
		</li>
	</ul>
	<p>
		En cas de problème pour contacter cette personne,<br />
		voici les autres membres du groupe :
	</p>
	<ul>
		<li><strong>Lucas Georges</strong> : lucas.georges@etu.univ-savoie.fr</li>
		<li><strong>Floriane Caillot</strong> : floriane.caillot@etu.univ-savoie.fr</li>
		<li><strong>Lorène Impérial</strong> : lorene.imperial@etu.univ-savoie.fr</li>
		<li><strong>Silène Barralon</strong> : silene.barralon@etu.univ-savoie.fr</li>
	</ul>
	<p> <img src="<?php echo RRR_IMAGES; ?>contact_nous.png" alt="nous"></p>
</article>
<?php
	require_once(RA_INCLUDES.'footer.inc.php');
?>
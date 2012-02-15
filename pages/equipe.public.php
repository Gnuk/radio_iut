<?php
	# Titre de la page
	define('P_NOM', 'Équipe');
	# Description de la page
	define('P_DESCRIPTION', 'Équipe');
	# Keywords
	$P_KEYWORD[]='équipe';
	$P_KEYWORD[]='team';
	require_once(RA_INCLUDES.'head.inc.php');
	require_once(RA_INCLUDES.'en-tete.inc.php');
?>
<article>
	<!-- <h1>Notre équipe</h1> -->
	<p>
		Notre équipe ce compose de cinq membres :<br />
		Lucas, Gabriel, Floriane, Lorène et Silène.
	</p>
	<p>
		Chacun à une tâche précise qui lui est assigné, et que nous avons choisi en fonction de nos préférences.
	</p>
	<ul class="spaceList">
		<li>
			Ainsi <strong>Lucas</strong> s'occupe des émissions et du montage de celles-ci.
		</li>
		<li>
			<strong>Gabriel</strong> est le leader, le chargé de communication et s'occupe de la rubrique 2012.
		</li>
		<li>
			<strong>Floriane</strong> s'occupe quand à elle de la rubrique Interview, et de tout ce qui est secrétariat.
		</li>
		<li>
			<strong>Lorène</strong> est chargé de toutes les musiques qui agrémentent les émissions.
		</li>
		<li>
			Enfin <strong>Silène</strong> est chargé du graphisme, ainsi que de la programmation.
		</li>
	</ul>
	<p>
		Je souhaiterais dire aussi un grand merci à Anthony Rey qui nous à grandement aidé, notamment pour le site web sur lequel vous naviguez.
	</p>
	<p>
		Merci beaucoup..
	</p>
	<p>
	<img src="<?php echo RRR_IMAGES; ?>equipe_gens.png" alt="nous"/>
	</p>
</article>
<?php
	require_once(RA_INCLUDES.'footer.inc.php');
?>
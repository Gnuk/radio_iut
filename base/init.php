<?php
	/*******************
	* A propos du site *
	********************/
	
	# Nom du site
	define('S_NOM', 'Rad\'iut');
	# Auteur(s)
	define('S_AUTHOR', 'Envie d\'Prod');
	# Description du site
	define('S_DESCRIPTION', 'Description de mon site.');
	# Keywords
	$P_KEYWORD[]='radio';
	$P_KEYWORD[]='SeRéCom';
	$P_KEYWORD[]='SRC';
	$P_KEYWORD[]='IUT';
	$P_KEYWORD[]='Chambéry';
	
	/****************************************
	* Éléments textuels relatifs aux styles *
	*****************************************/
	
	#Séparateur de texte
	define('T_SEPARATEUR', '-');
	
	/********************
	* Liste des chemins *
	*********************/
	
	# Relatif par défaut
	define('RRR_DEFAUT', '');
	# Chemin relatif des styles
	define('RR_STYLES', 'styles'.SEP);
	define('RRR_STYLES', RRR_DEFAUT . RR_STYLES);
	# Chemin absolu des styles
	define('RA_STYLES', RA_RACINE . RR_STYLES);
	# Chemin relatif des images
	define('RR_IMAGES', 'images'.SEP);
	define('RRR_IMAGES', RRR_STYLES . RR_IMAGES);
	# Chemin absolu des images
	define('RA_IMAGES', RA_RACINE . RR_STYLES . RR_IMAGES);
	# Chemin relatif des fichiers css
	define('RR_STYLESHEETS', 'stylesheets'.SEP);
	define('RRR_STYLESHEETS', RRR_STYLES . RR_STYLESHEETS);
	# Chemin absolu des fichiers css
	define('RA_STYLESHEETS', RA_RACINE . RR_STYLES . RR_STYLESHEETS);
	# Chemin relatif des polices
	define('RR_POLICES', 'polices'.SEP);
	define('RRR_POLICES', RRR_STYLES . RR_POLICES);
	# Chemin absolu des fichiers css
	define('RA_POLICES', RA_RACINE . RR_STYLES . RR_POLICES);
	# Chemin relatif des pages
	define('RR_PAGES', 'pages'.SEP);
	define('RRR_PAGES', RRR_DEFAUT . RR_PAGES);
	# Chemin absolu des pages
	define('RA_PAGES', RA_RACINE . RR_PAGES);
	# Chemin relatif des includes
	define('RR_INCLUDES', 'includes'.SEP);
	define('RRR_INCLUDES', RRR_DEFAUT . RR_INCLUDES);
	# Chemin absolu des includes
	define('RA_INCLUDES', RA_RACINE . RR_INCLUDES);
	# Chemin relatif des vidéos
	define('RR_VIDEO', 'video'.SEP);
	define('RRR_VIDEO', RRR_DEFAUT . RR_VIDEO);
	# Chemin absolu des vidéos
	define('RA_VIDEO', RA_RACINE . RR_VIDEO);
	# Chemin relatif de l'audio
	define('RR_AUDIO', 'audio'.SEP);
	define('RRR_AUDIO', RRR_DEFAUT . RR_AUDIO);
	# Chemin absolu de l'audio
	define('RA_AUDIO', RA_RACINE . RR_AUDIO);
	
	# Jaquette
	define('IMG_VIDEO', RRR_IMAGES . 'preview_video.png');
	# Préchargement
	define('VIDEO_PRELOAD', false);
	define('AUDIO_PRELOAD', false);
	# Afficher le type de vidéo (true est plus respectueux des standards mais certains serveurs ne le gèrent pas encore)
	define('IS_VIDEO_TYPE', true);
	# Afficher le type audio (true est plus respectueux des standards mais certains serveurs ne le gèrent pas encore)
	define('IS_AUDIO_TYPE', true);
?>
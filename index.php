<?php
	/**
	* Index.php, ce fichier ne doit pas être modifié
	* @author Silène Barralon <silene.barralon@free.fr>
	* @author Gnuk <gnuk@mailoo.org>
	* @version 0.1
	* @since 13/12/2011
	* @date 14/01/2012
	*/
	
	# Affichage des erreurs
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	/*************************
	* Définition des chemins *
	**************************/
	# Séparateur de répertoires
	define('SEP', '/');
	# Chemin absolu actuel (RA = Répertoire absolu)
	define('RA_RACINE', realpath(dirname(__FILE__)).SEP);
	# Chemin relatif de la base (RR = Répertoire relatif)
	define('RR_BASE', 'base'.SEP);
	# Chemin absolu de la base
	define('RA_BASE', RA_RACINE . RR_BASE);
	# Inclusion du fichier init (contient le reste des chemins par exemple)
	require_once(RA_BASE . 'init.php');
	# Inclusion du fichier fonctions (contient toutes les fonctions utiles)
	require_once(RA_BASE . 'fonctions.php');
	require_once(f_affichePage('accueil'));
	
?>
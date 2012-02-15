<?php
	if(!empty($P_KEYWORD) AND is_array($P_KEYWORD)){
		$P_KEYWORDS = array_unique($P_KEYWORD);
		define('P_KEYWORDS', implode(', ', $P_KEYWORDS));
	}
	if(!defined('CSS_DEFAULT')){
		define('CSS_DEFAULT', 'base.css');
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
<?php
	if(defined('S_NOM')){
?>
		<title><?php echo f_encode(S_NOM); if(defined('P_NOM')){echo f_encode(T_SEPARATEUR) . f_encode(P_NOM);}; ?></title>
<?php
	}
?>
		<link rel="icon" type="image/png" href="<?php echo RRR_IMAGES; ?>favicon.png" />
		<link rel="shortcut icon" href="<?php echo RRR_IMAGES; ?>favicon.png"/>
<?php
	if(defined('S_DESCRIPTION') OR defined('P_DESCRIPTION')){
?>
		<meta name="description" content="<?php
		if(defined('P_DESCRIPTION')){
			echo f_encode(P_DESCRIPTION);
		}
		else{
			echo f_encode(S_DESCRIPTION);
		}
		?>"/>
<?php
	}
?>
<?php
	if(defined('S_AUTHOR')){
?>
		<meta name="author" content="<?php echo f_encode(S_AUTHOR); ?>"/>
<?php
	}
?>
<?php
	if(defined('P_KEYWORDS')){
?>
		<meta name="keywords" content="<?php echo f_encode(P_KEYWORDS); ?>"/>
<?php
	}
?>
		<link rel="stylesheet" href="<?php echo RRR_STYLESHEETS . CSS_DEFAULT; ?>" type="text/css" media="screen" />
	</head>
	<body>

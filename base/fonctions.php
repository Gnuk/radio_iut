<?php
	/**
	* @todo PHP Doc
	*/
	
	/**
	* Encode du texte
	* @param string $text Le texte à encoder
	* @return string Le texte encodé
	*/
	function f_encode($text){
		$html = htmlspecialchars($text, ENT_QUOTES);
		return $html;
	}
	
	/**
	* Encoder un chemin
	* @param string $chemin Le chemin à encoder
	* @return string Chemin encodé
	* @todo Réel encodage du chemin
	*/
	function f_chemEncode($chemin){
		return f_encode($chemin);
	}
	
	/**
	* Afficher le lien de la page correspondant à la valeur GET de "p"
	* @param string $default Page par défaut (page qui s'affiche si $_GET['p'] ne contient pas un nom de page valide)
	* @return string Chemin de la page à inclure
	* @todo Gestion des pages privées
	*/
	function f_affichePage($default = 'accueil'){
		if(!empty($_GET['p'])){
			$page = $_GET['p'];
		}
		else{
			$page = $default;
		}
		$encPage = RA_PAGES.f_encode($page);
		if(is_file($encPage.'.public.php')){
			return $encPage.'.public.php';
		}
		else if(is_file($encPage . '.private.php')){
			return $encPage.'.private.php';
		}
		else{
			return RA_PAGES . $default . '.public.php';
		}
	}
	
	/**
	* Tableau des formats vidéo autorisés
	* @return array Tableau des formats
	*/
	function f_videoFormats(){
		$formats['type'][($formats['format'][]='webm')]='webm';
		$formats['type'][($formats['format'][]='mp4')]='mp4';
		$formats['type'][($formats['format'][]='ogv')]='ogg';
		$formats['type'][($formats['format'][]='ogg')]='ogg';
		$formats['type'][($formats['format'][]='flv')]='flv';
		$formats['type'][($formats['format'][]='avi')]='avi';
		return $formats;
	}
	
	/**
	* Tableau des formats audio autorisés
	* @return array Tableau des formats
	*/
	function f_audioFormats(){
		$formats['type'][($formats['format'][]='wav')]='wav';
		$formats['type'][($formats['format'][]='ogg')]='ogg';
		$formats['type'][($formats['format'][]='mp3')]='mpeg';
		return $formats;
	}
	
	/**
	* Affiche le composant vidéo correspondant au nom de la vidéo à afficher
	* @param string $nom Nom de la vidéo à afficher
	* @param integer $width Largeur de la vidéo
	* @param integer $height Hauteur de la vidéo
	* @param boolean $autoplay Si vrai, la vidéo se lance dés le chargement de la page
	* @param boolean $loop Si vrai, la vidéo se joue en boucle
	* @param boolean $muted Si vrai le son de la vidéo est coupé dés le chargement de la page
	* @param boolean $controls Si vrai, les contrôles de la vidéo sont visibles
	* @param boolean $preload Si vrai, la vidéo est chargée dés le chargement de la page
	* @param string $poster Affiche la jaquette de la vidéo (image)
	*/
	function f_htmlVideo($nom, $width=400, $height=300, $autoplay=false, $loop=false, $muted=false, $controls=true, $preload=VIDEO_PRELOAD, $poster=IMG_VIDEO){
		$banque=f_videoFormats();
		$html='<video';
		if(!empty($width)){
			$html.=' width="'.$width.'"';
		}
		if(!empty($height)){
			$html.=' height="'.$height.'"';
		}
		if($controls){
			$html.=' controls="controls"';
		}
		if($preload){
			$html.=' preload="auto"';
		}
		if($autoplay){
			$html.=' autoplay="autoplay"';
		}
		if($loop){
			$html.=' loop="loop"';
		}
		if($muted){
			$html.=' muted="muted"';
		}
		$html.=' poster="'.$poster.'"';
		$html.='>'."\n";
		foreach($banque['format'] as $key => $format){
			if(is_file(RA_VIDEO.$format.'/'.f_chemEncode($nom).'.'.$format)){
				$html.="\t".'<source src="'.RRR_VIDEO.$format.'/'.f_chemEncode($nom).'.'.$format .'"';
				if(IS_VIDEO_TYPE){
					$html.=' type="video/'.$banque['type'][$format].'"';
				}
				$html.='/>'."\n";
			}
		}
		$html.="\t".'Votre navigateur ne supporte pas les vidéos proposées'."\n";
		$html.='</video>'."\n";
		return $html;
	}
	
	/**
	* Affiche le composant audio correspondant au nom de la piste audio à afficher
	* @param string $nom Nom de la piste audio à afficher
	* @param boolean $autoplay Si vrai, la piste audio se lance dés le chargement de la page
	* @param boolean $loop Si vrai, la piste audio se joue en boucle
	* @param boolean $controls Si vrai, les contrôles de la piste audio sont visibles
	* @param boolean $preload Si vrai, la piste audio est chargée dés le chargement de la page
	*/
	function f_htmlAudio($nom, $autoplay=false, $loop=false, $controls=true, $preload=AUDIO_PRELOAD){
		$banque=f_audioFormats();
		$html='<audio';
		if($controls){
			$html.=' controls="controls"';
		}
		if($preload){
			$html.=' preload="auto"';
		}
		if($autoplay){
			$html.=' autoplay="autoplay"';
		}
		if($loop){
			$html.=' loop="loop"';
		}
		$html.='>'."\n";
		foreach($banque['format'] as $key => $format){
			if(is_file(RA_AUDIO.$format.'/'.f_chemEncode($nom).'.'.$format)){
				$html.="\t".'<source src="'.RRR_AUDIO.$format.'/'.f_chemEncode($nom).'.'.$format .'"';
				if(IS_AUDIO_TYPE){
					$html.=' type="audio/'.$banque['type'][$format].'"';
				}
				$html.='/>'."\n";
			}
		}
		$html.="\t".'Votre navigateur ne supporte pas les sons proposées'."\n";
		$html.='</audio>'."\n";
		return $html;
	}
?>
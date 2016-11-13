<?php
if(isset($_POST['adr'])) 
{ 
	$url = $_POST['adr']; 
	$url = iconv("UTF-8","windows-1251",$url); 
	
	$html = file_get_contents($url); 
	
	if($_POST['parametr'] == 1) 
	{ 
		$parametr = preg_match_all("/[А-Я][а-я]+\s[А-Я][а-я]+\s[А-Я][а-я]+/u", $html, $result, PREG_PATTERN_ORDER); 
		
		if($parametr == 0) 
		{ 
			echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt;\">Извините, но на сайте ничего не найдено</div>"; 
		} 
		else 
		{ 
			for($i = 0; $i < $parametr; $i++) 
			{ 
				echo "<Div style=\"width:100%; margin-top: 2%;  text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">".$i." ".@$result[0][$i]."</Div>"; 
			} 
		}
	} 
	if($_POST['parametr'] == 2) 
	{ 
		$parametr = preg_match_all("/[0-9]{1,4}\sгод/", $html, $result, PREG_PATTERN_ORDER); 
		
		if($parametr == 0) 
		{ 
			echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt;\">Извините, но на сайте ничего не найдено</div>"; 
		} 
		else 
		{ 
			for($i = 0; $i < $parametr; $i++) 
			{ 
				echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">".$i." ".@$result[0][$i]."</Div>"; 
			} 
		}
	} 
	if($_POST['parametr'] == 3) 
	{ 
		{ 
			$parametr = preg_match_all("/[0-9]{1,4}\sстр/", $html, $result, PREG_PATTERN_ORDER); 
			
			if($parametr == 0) 
			{ 
				echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">Извините, но на сайте ничего не найдено</div>"; 
			} 
			else 
			{ 
				for($i = 0; $i < $parametr; $i++) 
				{ 
					echo "<Div style=\"width:100%;  margin-top: 2%; text-align:center;font-family: 'Marck Script', cursive; font-size: 15pt\">".$i." ".@$result[0][$i]."</Div>"; 
				} 
			}
		} 
	} 
	if($_POST['parametr'] == 4) 
	{ 
		{ 
			$parametr = preg_match_all("/(скачать|Скачать)/", $html, $result, PREG_PATTERN_ORDER); 
			
			if($parametr == 0) 
			{ 
				echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">Извините, но на сайте ничего не найдено</div>"; 
			} 
			else 
			{ 
				for($i = 0; $i < $parametr; $i++) 
				{ 
					echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">".$i." ".@$result[0][$i]."</Div>"; 
				} 
			}
		} 
	} 
	
	
	if($_POST['parametr'] == 5) 
	{ 
		{ 
		$parametr = preg_match_all("/(видения|новелла|ода|опус|очерк|повесть|пьеса|рассказ|роман|скетч|эпопея|эпос|эссе|комедия|фарс|водевиль|интермедия|пародия|комедия\sположений|комедия\sхарактеров|трагедия|драма|эпические|басня|аполог|былина|баллада|миф|роман-эпопея|сказка|лирические|послание|элегия|эпиграмма|лиро-эпические|стансы|поэма|драматические)/", $html, $result, PREG_PATTERN_ORDER); 
			
			if($parametr == 0) 
			{ 
				echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">Извините, но на сайте ничего не найдено</div>"; 
			} 
			else 
			{ 
				for($i = 0; $i < $parametr; $i++) 
				{ 
					echo "<Div style=\"width:100%; margin-top: 2%; text-align:center; font-family: 'Marck Script', cursive; font-size: 15pt\">".$i." ".@$result[0][$i]."</Div>"; 
				} 
			}
		} 
	} 
	
	
} 
?>

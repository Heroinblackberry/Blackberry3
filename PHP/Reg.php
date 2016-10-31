<?php 
	function lines($file) 
	{ 
		// в начале ищем сам файл. Может быть, путь к нему был некорректно указан 
		if(!file_exists($file))exit("Файл не найден"); 
		
		// рассмотрим файл как массив
		$file_arr = file($file); 
		
		// подсчитываем количество строк в массиве 
		$lines = count($file_arr); 
		
		// вывод результата работы функции 
		return $lines; 
	} 

	if(	isset($_POST['login']) &&
		isset($_POST['name']) &&
		isset($_POST['lastname']) &&
		isset($_POST['father']) &&
		isset($_POST['pass']) &&
		isset($_POST['pass2']) &&
		isset($_POST['meil']) &&
		isset($_POST['bab']) &&
		isset($_POST['rus']) &&
		isset($_POST['pre']))
	{
		$ErrorLog = 0;
		$file = 'accounts.txt';
		$str = $_POST['login']."|".$_POST['name']."|".$_POST['lastname']."|".$_POST['father']."|".$_POST['pass']."|".$_POST['meil']."|".$_POST['bab']."|".$_POST['rus']."|".$_POST['pre'];
		if ( !$file )
		{
			echo("Ошибка открытия файла");
		}
		else
		{
			if($_POST['pass'] == $_POST['pass2'])
			{
				if(!empty($_POST['pass']))
				{
					if(filter_var($_POST['meil'], FILTER_VALIDATE_EMAIL))
					{
						$tmp = file_get_contents($file, true);
						$line = explode("\n", $tmp);
						$index = lines($file);
						for($i = 0; $i < $index; $i++)
						{
							$cell = explode("|", $line[$i]);
							//echo "Массив строки: ".$line[$i]." ";
							//echo "Значение ячейки: ".$cell[2]." ";
							//echo "Кол-во строк: ".$index."<br>";
							if(@$cell[2] == $_POST['login'])
							{
								$ErrorLog = $ErrorLog + 1;
							}
						
						}
						if($ErrorLog > 0)
						{
							echo "Такой логин уже зарегистрирован.";
						}
						else
						{
							file_put_contents($file, $str."\n", FILE_APPEND);
							echo "Вы успешно зарегистрировались.<br>"; 
							header('Refresh: 5; url="http://feistel.ovl.io/index.php"');
						}
					}
					else
					{
						echo "Не верный мэил.";	
					}
				}
				else
				{
					echo "Вы ввели пустой пароль.";
				}
			}				
			else
				{
					echo "Пароли не совпадают.";
				}
		}
	}
?>
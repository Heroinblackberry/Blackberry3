<!DOCTYPE HTML">
<Html>
    <Head>
		<Meta  content="text/html"; charset="utf-8">
		<Title>Practice 12</TITLE>
		<link rel="stylesheet" type="text/css" href="style.css">
    </Head>
<body>
	<div class="content">
		<div align="left" class="left-side">
		<img class="comp" src="http://www.cc.ductapeguy.net/wp-content/uploads/2012/04/system-lock-screen-300x300.png">
				<p class="out">Добро пожаловать!</p>
				<p class="out">Введите правильные имя пользователя и пароль для входа на сайт!</p>
				<a href="">Регистрация</a>
		</div>
		<div class="right-side">
			<h1>Вход</h1>
		<div class="form">
				<form method="POST">
					<p class="in">Имя пользователя<br><input class="log" type="text" name="login"/></input></p>
				<p class="on">Пароль<br>
				<input class="log" type="password" name="pass"/></input><br>
				</p>
				<input class ="submit" type="submit" name="auth" value="Вход"/></input>
				</form>
			</div> 
		
		<?php				
				if(isset($_POST['login']) && isset($_POST['pass']))
				{
					$login = $_POST['login'];
					$password = $_POST['pass'];
					$tryLogin="admin";
					$tryPassword="4455";
					if($tryLogin==$login && $tryPassword==$password) echo "Вы вошли";
					else echo "Неверный логин/пароль";
				}
				
		?>
			
			
		</div>
	</div>
</body>
	
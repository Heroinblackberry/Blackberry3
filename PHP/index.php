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
				
					<input class="reset" type="button" value="Регистрация" onclick="javascript:window.location='index2.php'"/>
			
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
				<div>
				<?php include 'Log.php'; ?>
				</div>
				</form>
			</div> 
		
	
			
			
		</div>
	</div>
</body>
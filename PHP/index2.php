<!DOCTYPE HTML">
<Html>
    <Head>
		<Meta  content="text/html"; charset="utf-8">
		<Title>Practice 12</TITLE>
		<link rel="stylesheet" type="text/css" href="style2.css">
    </Head>
<body>
	<div class="content">
		<h1>Регистрация нового пользователя</h1>
		<form method="POST">
				<?php include 'Reg.php'; ?>
				<h2>* - ОБЯЗАТЕЛЬНЫЕ ПОЛЯ</h2>
				<p class="in">Имя пользователя (логин)*:<br><input class="log" required type="text" name="login"/></input></p>
				<p class="in">Имя*:<br><input class="log" required type="text" name="name"/></input></p>
				<p class="in">Фамилия*:<br><input class="log" required type="text" name="lastname"/></input></p>
				<p class="in">Отчество:<br><input class="log" type="text" name="father"/></input></p>
				<p class="in">Пароль*:<br><input class="log" required type="password" name="pass"/></input></p>
				<p class="in">Повторите пароль*:<br><input class="log" required type="password" name="pass2"/></input></p>
				
				
				
				
				<p class="in">E-mail*:<br><input class="log" required type="email" name="meil"/></input></p>
				<p class="in">Пол*<br><select required class="pol" name="bab"><option></option>
																<option>Я - баба</option>
																<option>Я - мужик</option></select></p>
				<p class="in">Страна*<br><select required class="pol" name="rus"><option></option>
																<option>Рашка</option>
																<option>Казахстан Наурызкожеевич</option>
																<option>Слава Украине!</option></select></p>
				<p class="in">О себе прекрасном:<br><p><textarea rows="6" cols="30" name="pre"></textarea></p>
				
				</p><input class ="submit" type="submit" name="auth" value="Вход"/>
				
				
				
				<input class="reset" type="reset" name="res" value="Очистить"/></input>
				<input class="reset" type="button" value="Назад" onclick="javascript:window.location='index.php'"/>
				
				
		</form>

		</body>
		</html>	
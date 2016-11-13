<!DOCTYPE HTML">
<Html>
    <Head>
		<Meta  content="text/html"; charset="utf-8">
		<Title>Search</TITLE>
		<link rel="stylesheet" type="text/css" href="style3.css">
		<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
		<meta content="user-scalable=no">
    </Head>
<body>
<div class="content">
		<h1>Литературный поиск</h1>
			<form method="POST">
				<p class="one">Укажите адрес страницы
				<input class="adress" type="url" name="adr" size="30"></input>
				</p>
				<p class="two">Параметр поиска
				<select required class="par" name="parametr"><option></option>
						<option value="1">Автор</option>
						<option value="2">Год издания</option>
						<option value="3">Количество страниц</option>
						<option value="4">Можно ли скачать</option>
						<option value="5">Жанр</option>
				</select>
				</p>
				<input class="nai" type="image" src="search.png" width="200">
				<div>
				<?php include 'search.php'; ?>
				</div>
			</form>
</div>
</body>
</html>
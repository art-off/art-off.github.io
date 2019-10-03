<!DOCTYPE html>


<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="reviews" />
<meta name="description" content="Обзоры мои лучшие в рунете" />

<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="main.css" rel="stylesheet" type="text/css" media="all" />

<title>reviews-artOFF</title>

<style>
	.log_text
	{
		color: deeppink;
	}
	.blockRew
	{
		background-color: black;
		margin: 15px;
		outline: 4px solid black;
	}
	.userRew
	{
		color: white;
	}
</style>

</head>

<body>


<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">ArtOff</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li><a href="aboutMe.html">Обо мне</a></li>
				<li><a href="music.html">Музон</a></li>
				<li><a href="reviews.html">Обзорчики</a></li>
				<li class="current_page_item"><a href="questBook.php">Отзывы</a></li>
			</ul>
		</div>
	</div>
</div>


<div id="header-featured" style="background-image: url(images/logo.png)">
	<div id="banner" class="container">

        	<?php
            	$fileName = 'db';

            	if (!empty($_POST["login"]) && !empty($_POST["message"])) {
                    $fd = fopen($fileName, 'a');
                    fwrite($fd, $_POST["login"]."::".$_POST["message"]."\n");
                }
            
            	$file = file($fileName);
            	$line = rand(0, count($file)-11);
            	for ($i=$line; $i < count($file) && $i<10+$line+1; $i++) {
            		list($userName, $message) = explode("::", $file[$i]);
            		echo "<div class=blockRew><span class=userRew>< $message > (c)$userName</span></div>";
            	}
            	echo "<br><br>"; 
        	?>

		<form name="form" method="post">
				<span class="log_text">Имя:</span> <br />
			<input type="text" name="login" size="25" id="login" /> <br />
				<span class="log_text">Отзыв:</span> <br />
			<input type="text" name="message" size="40" id="message" /> <br />
			<input type="submit" name="enter" value="ОТПРАВИТЬ" />
		</form>

	</div>
</div>


<div id="copyright" class="container">
	<p>&copy; artOFF. Все права защищены | VK - <a href="https://vk.com/rylov_artem" target="_brank">Artem Rylov</a>.</p>
</div>


</body>
</html>
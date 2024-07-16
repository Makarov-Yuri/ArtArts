
<!DOCTYPE HTML>

<html>

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="CSS/reset.css">
		<link rel="stylesheet" href="CSS/Header.css?v=<?php echo filemtime('CSS/Header.css')?>">
		<link rel="stylesheet" href="CSS/IndexMain.css?v=<?php echo filemtime('CSS/IndexMain.css')?>">
		<link rel="stylesheet" href="CSS/IndexFooter.css?v=<?php echo filemtime('CSS/IndexFooter.css')?>">
		
		<!--Используем Протокол Open Graph для отображения сайта в соцсетях-->
		<!--
		<meta property="og:title" content="Art@Arts">
		<meta property="og:description" content="Проект, направленный на развитие человека">
		<meta property="og:site_name" content="Art@Arts">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://artarts.ru/index.html">
		<meta property="og:image" content="http://artarts.ru/IMG/OpenGraph.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1366">
		<meta property="og:image:height" content="453">
		-->
		<!--Используем Протокол Open Graph для отображения сайта в соцсетях-->
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" sizes="32x32" href="IMG/ART@ARTS.png">

		<title>Art@Arts</title>

	</head>

	<body id='IndexBody'>
	
		<!--Выводим шапку-->
		<?php include('Header.php');?>
		
		<header>
				
			<div>
								
				<h2>Art@Arts</h2>
								
				<p>Искусство - это связывающая всех вселенная</p>
								
				<div><img src='IMG/Header.png'></div>
								
			</div>
				
		</header>
		<!--Выводим шапку-->
		
		
		
		<main>
		
			<div id='FirstBlock'>
			
			</div>
			
			<div id='SecondBlock'>
				
				<div id='BlockForIMG'>
					
					<a href='ArtOnline.php'><img src='IMG/ArtOnline.png'></a>
					
					<a href='ArtOffline.php'><img src='IMG/ArtOffline.png'></a>

				</div>
					
			</div>
	
		</main>
		
		
		
		<footer>
			
			<h2>Контактная <span>информация</span></h2>
			
			<div id='BlockOfContactInformation'>
			
				<div>
					
					<p>Адрес:</p>
					
					<p>Санкт-Петербург</p>
					
					<p>ст.м. „Чернышевская”</p>
					
					<p>Басков переулок 5</p>
					
				</div>
				
				
				<div>
					
					<p>Телефон:</p>
					
					<p>+7-921-561-20-57</p>
					
				</div>
				
				<div>
					
					<p>Email:</p>
					
					<p>art.at.arts@yandex.ru</p>
					
				</div>

			</div>
			
			
			<div id='Location'>
			
				<div id='Map'>

					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1bb578c5056779006d3958c5234ee851e9f134703a99390daeff4d4b3dba493d&amp;width=100%&amp;minHeight=200&amp;lang=ru_RU&amp;scroll=true"></script>
	
				</div>
				
				<div id='Adress'>
					
					<p>Как нас найти:</p>
					
					<p>5 минут от станции метро „Площадь Восстания”</p>
					
					<p>8 минут от станции метро „Маяковская”</p>
					
					<p>Здание гимназии „РРТ”</p>
					
				</div>
				
			</div>
			
		</footer>
		
	</body>
	

</html>






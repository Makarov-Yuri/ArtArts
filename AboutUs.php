



<!DOCTYPE HTML>

<html>

	<head>
		<meta charset="UTF-8">

		<link rel="stylesheet" href="CSS/reset.css">
		<link rel="stylesheet" href="CSS/Header.css?v=<?php echo filemtime('CSS/Header.css')?>">
		<link rel="stylesheet" href="CSS/AboutUs.css?v=<?php echo filemtime('CSS/AboutUs.css')?>">
		
		<!--Используем Протокол Open Graph для отображения сайта в соцсетях-->
		<!--
		<meta property="og:title" content="Art@Arts">
		<meta property="og:description" content="Проект, направленный на развитие 
			в человеке всестороннего взгляда на жизнь и на окружающий мир">
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

		<title>О нас</title>

	</head>

	<body>
	
		
		<!--Выводим шапку-->
		<?php include('Header.php');?>		
		
		
		<header>
				
			<div>
								
				<h2>О нас</h2>
								
				<div><img src='IMG/Header.png'></div>
								
			</div>
				
		</header>
		
		

		
		<main>
			
			<?php
				
				//Класс объекта преподавателя
				class Teacher{
					
					//объявление свойства
					public $Name;//Имя преподавателя
					public $Description;//Описание
					public $LinkToIMG;//Ссылка на фотографию преподавателя в файловой системе
					
					//Объявление конструктора
					public function __construct($Name, $Description, $LinkToIMG){
							
						$this->Name=$Name;
						$this->Description=$Description;
						$this->LinkToIMG=$LinkToIMG;
							
					}
					
					
					//объявление метода
					public function WriteTemplate() {
						
						echo"<div class='Teacher'>
							
								<p class='Description'>
									
									{$this->Description}
									
								</p>
								
								
								
								<p class='IMG'>
								
									<img src='{$this->LinkToIMG}'>
									
								</p>
								
								<p class='Name'>{$this->Name}</p>
								
								
							</div>";	
					}		
					
				}
				
				
				
				
				
				//Создаем массив преподавателей
				$ArrayOfTeachers=[];
				
				//Позже эти данные будут браться из базы данных
				
				$ArrayOfTeachers[1]=new Teacher(
					
					'Барынина Ольга Александровна',
					
					'
						Кандидат исторических наук, искусствовед, доцент
						СПБГУ, СПБГУКИ, СПБГУПТД, педагог дополнительного образования - наш 
						эксперт в области теории искусств для всех возврастов и уровней подготовки.
						
					',
					
					'IMG/Teachers/Барынина.png'
					
				);
				
				
				$ArrayOfTeachers[2]=new Teacher(
					
					'Гриценко Роман Владимирович',
					
					'
						Керамист, скульптор, ювелир, член творческого
						союза художников СРБ, проводит индивидуальне консультирование и обучение
						взрослых с применением авторских методи композиции, рисунку, лепке.
						
					',
					
					'IMG/Teachers/Гриценко.png'
					
				);
				
				
				$ArrayOfTeachers[3]=new Teacher(
					
					'Брысина Юлия Александровна',
					
					'
						Преподаватель иностранных языков для дошкольников и
						начальных классов.
						
					',
					
					'IMG/Teachers/Брысина.png'
					
				);
				
				
				$ArrayOfTeachers[4]=new Teacher(
					
					'Саада Мухамад',
					
					'
						Из Ливана, будущий врач, учитель арабского языка. Арабский
						язык является родным, также знает русский, английский индивидуальне
						французский.
						
					',
					
					'IMG/Teachers/Мухамад.png'
					
				);
				
				
				$ArrayOfTeachers[5]=new Teacher(
					
					'Лукашева Юлия Анатольевна',
					
					'
						Объединение педагогического опыта и любви к искусству
						становится следующим естественным шагом и дает возможность
						пробудить в моих учениках стремление к прекрасному.
						
					',
					
					'IMG/Teachers/Лукашева.png'
					
				);
				
				
				
				$ArrayOfTeachers[6]=new Teacher(
					
					'Яковлева Антонина Олеговна',
					
					'
						
						Преподаватель английского языка для взрослых и детей.
						
					',
					
					'IMG/Teachers/Яковлева.png'
					
				);
				
				
				$ArrayOfTeachers[7]=new Teacher(
					
					'Евсеева Ольга Васильевна',
					
					'
						
						Эксперт в области журналистики, театрального искусства, киноведения, истории искусств. 
						Бывший выпускающий редактор издательства "Союз художников".
						
					',
					
					'IMG/Teachers/Евсеева.png'
					
				);
				
				
				
				
				
				
		
				for($i=1;$i<=count($ArrayOfTeachers);$i++){
				
					$ArrayOfTeachers[$i]->WriteTemplate();
				
				}
				
				
				
				
				
				
				
				
		
			?>
			
			
		</main>
		
	</body>

</html>





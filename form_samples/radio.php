<?php
	//Получить значение
	if(isset($_POST["btn_get"])) {
		//Если не выбрана ни одна радиокнопка
		if(!isset($_POST["myradio"]))
			//Вывод сообщения об ошибке
			$message="Вы ничего не выбрали!";
		else {
			//Получение значения выбранной радиокнопки
			$value = $_POST["myradio"];
			//Вывод значения выбранной радиокнопки
			$message="Вы выбрали радиокнопку со значением ".$value;
		}	
	}
	
	//Установить значение
	if(isset($_POST["btn_set"])) {
		//Выбор радиокнопки со значением 2
		$selected=2;
	};
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			<input 
				id="myradio1" 
				class="myradio" 
				name="myradio" 
				type="radio" 
				value="1"
				<?=($selected==1)?"checked":""?>
			/><label for="myradio1">Пункт 1</label><br/>
			
			<input 
				id="myradio2" 
				class="myradio" 
				name="myradio" 
				type="radio" 
				value="2"
				<?=($selected==2)?"checked":""?>
			/><label for="myradio2">Пункт 2</label><br/>
			
			<input 
				id="myradio3" 
				class="myradio" 
				name="myradio" 
				type="radio" 
				value="3"
				<?=($selected==3)?"checked":""?>
			/><label for="myradio3">Пункт 3</label><br/>
			
			<input name="btn_get" type="submit" value="Прочитать"/>
			<input name="btn_set" type="submit" value="Установить (выбрать пункт 2)"/>	
			<div><?=$message?></div>
		</form>
	</body>
</html>

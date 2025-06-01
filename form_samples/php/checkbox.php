<?php
//Получить значение
if(isset($_POST["btn_get"])) {
	
	//Если не выбрана ни один флажок
	if(!isset($_POST["mycheckbox"]))
		//Вывод сообщения об ошибке
		$message="Вы ничего не выбрали!";
	else {
		$value = "";
		
		//Получение значений выбранных флажков (обход их списка)
		foreach($_POST["mycheckbox"] As $val){
			//накопление значений выбранных флажков в переменной value
			$value.=$val." ";
		};					
		
		//Вывод значения выбранного флажка
		$message="Вы выбрали флажки со следующими значениями: ".$value;
	}	
};

//Установить значение
$selected=Array();
if(isset($_POST["btn_set"])) {
	//Выбор флажков со значениями 2 (Пункт 2) и 3 (Пункт 3)
	$selected=Array(2,3);
};
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			<input
				name="mycheckbox[]"
				class="mycheckbox" 				
				type="checkbox" 
				value="1"
				<?=(in_array(1,$selected))?"checked":""?>
			/><label for="mycheckbox1">Пункт 1</label><br/>
			
			<input
				name="mycheckbox[]"
				class="mycheckbox" 				
				type="checkbox" 
				value="2"
				<?=(in_array(2,$selected))?"checked":""?>
			/><label for="mycheckbox2">Пункт 2</label><br/>
			
			<input
				name="mycheckbox[]"
				class="mycheckbox" 				
				type="checkbox" 
				value="3"
				<?=(in_array(3,$selected))?"checked":""?>
			/><label for="mycheckbox3">Пункт 3</label><br/>
			
			
			<input name="btn_get" type="submit" value="Прочитать"/>
			<input name="btn_set" type="submit" value="Установить (выбрать пункты 2 и 3)"/>
			<div><?=$message?></div>
		</form>
	</body>
</html>

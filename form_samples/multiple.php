<?php
//Получить значение
if(isset($_POST["btn_get"])) {	
	//Если не выбран ни один элемент
	if(!isset($_POST["myselect"]))
		//Вывод сообщения об ошибке
		$message="Вы ничего не выбрали!";
	else {
		$value = "";
		
		//Получение значений выбранных элементов (обход их списка)
		foreach($_POST["myselect"] As $val){
			//накопление значений выбранных элементов в переменной value
			$value.=$val." ";
		};					
		
		//Вывод значения выбранного элемента
		$message="Вы выбрали флажки со следующими значениями: ".$value;
	}	
};

//Установить значение
$selected=Array();
if(isset($_POST["btn_set"])) {
	//Выбор элементов со значениями 2 (Пункт 2) и 3 (Пункт 3)
	$selected=Array(2,3);
};
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			<select name="myselect[]" multiple="multiple">				
				<option value="1" <?=(in_array(1,$selected))?"selected":""?>>Пункт 1</option>
				<option value="2" <?=(in_array(2,$selected))?"selected":""?>>Пункт 2</option>
				<option value="3" <?=(in_array(3,$selected))?"selected":""?>>Пункт 3</option>
			</select>
			<br/>			
			<input name="btn_get" type="submit" value="Прочитать"/>
			<input name="btn_set" type="submit" value="Установить (выбрать Пункт 1 и Пункт 2)"/>
			<?=$message?>
		</form>
	</body>
</html>

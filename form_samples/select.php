<?php
//Получить значение
if(isset($_POST["btn_get"])) {	
	if($_POST["myselect"]<0) //Если ничего не выбрано
		//вывод сообщения об ошибке
		$message="Вы ничего не выбрали!";
	else {//Иначе
		//получение выбранного из списка значения
		$value = $_POST["myselect"];	
		//вывод значения выбранного элемента
		$message="Вы выбрали элемент списка со значением: ".$value;
	}	
};

//Установить значение
if(isset($_POST["btn_set"])) {
	//Выбор элемента со значением 2 (Пункт 2)
	$selected=2;
};
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			<select name="myselect">
				<option value="-1">--Выберите что-нибудь--</option>
				<option value="1" <?=($selected==1)?"selected":""?>>Пункт 1</option>
				<option value="2" <?=($selected==2)?"selected":""?>>Пункт 2</option>
				<option value="3" <?=($selected==3)?"selected":""?>>Пункт 3</option>
			</select>
			<br/>			
			<input name="btn_get" type="submit" value="Прочитать"/>
			<input name="btn_set" type="submit" value="Установить (выбрать Пункт 2)"/>
			<div><?=$message?></div>
		</form>
	</body>
</html>

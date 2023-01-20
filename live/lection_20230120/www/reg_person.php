<?php
	require_once("$_SERVER[DOCUMENT_ROOT]/../db/dal.inc.php");	
	
	if(isset($_POST["btn_save"])) {
				
		$user_name=_DBEscString($_POST["user_name"]);
		$user_age=(int)$_POST["user_age"];		
		$user_mail=_DBEscString($_POST["user_mail"]);
		
		DBCreatePerson($user_name,$user_age,$user_mail);
		
	}
	
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form action="" method="POST">
			Имя:<br/>
			<input name="user_name" type="text"/><br/>
			Возраст:<br/>
			<input name="user_age" type="text"/><br/>
			Email:<br/>
			<input name="user_mail" type="text"/><br/>
			<input name="btn_save" type="submit" value="Сохранить"/>
		</form>
		<hr/>
		<table>
			<tr>
				<th>Имя</th>
				<th>Возраст</th>
				<th>Email</th>
			</tr>
			<?while($person=DBFetchPerson()):?>
			<tr>
				<td><?=$person["Name"]?></td>
				<td><?=$person["Age"]?></td>
				<td><?=$person["Mail"]?></td>
			</tr>
			<?endwhile;?>
		</table>
	</body>
</html>

<?php
	$greeting="";
	if(isset($_POST["btn_go"])) {
		$user_name=$_POST["user_name"];
		$greeting="Здравствуйте, $user_name !";
	}
?>
<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="" method="POST">
			Имя:<br/>
			<input name="user_name" type="text" size="20"/><br/>
			<input name="btn_go" type="submit" value="Нажми сюда!"/><br/>
			<div><?=$greeting?></div>
		</form>
	</body>
</html>

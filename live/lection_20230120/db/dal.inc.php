<?php require_once("$_SERVER[DOCUMENT_ROOT]/../db/common.dal.inc.php");


function DBCreatePerson($name,$age,$mail) {
	_DBQuery("INSERT INTO people(Name,Age,Mail) VALUES('$name','$age','$mail')");
}

function DBFetchPerson() {
	return _DBFetchQuery("SELECT * FROM people");
}

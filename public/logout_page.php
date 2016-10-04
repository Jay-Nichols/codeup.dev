<?php

function endSession() {
	session_unset();
	session_regenerate_id(true);
}
session_start();
endSession();
header('Location: practice_form.php');

?>
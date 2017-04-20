<?php

class customException extends Exception
{
	public function errormessage()
	{
		$errorMsg = "<p>Error on line " . $this->getLine() . " in " . $this->getFile() . ": <b>" . $this->getMessage() . "</b> is not a valid email address </p>";
		return $errorMsg;
	}
}

$email = "jaynicholsjaynichols.info";

try {
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		throw new customException($email);
	}
}

catch (customException $e) {
	echo $e->errormessage();
}




// function checkNumber($number) {
// 	if ($number > 1) {
// 		throw new Exception("Value must be 1 or below");
// 	}
// 	return true;
// }

// try {
// 	checkNumber(2);
// 	echo "If you see this, the number is 1 or below";
// }

// catch (Exception $e) {
// 	echo "Message: " . $e->getMessage();
// }

?>
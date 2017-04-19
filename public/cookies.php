<?php
$cookie_name = "user";
$cookie_value = "Maximus";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo $_COOKIE[$cookie_name];
?>
<html>
<head>
	<title>Cookies</title>
</head>
<body>
	<ul>
	<?php if (!isset($_COOKIE[$cookie_name])): ?>
		<li><?= "Cookie named '" . $cookie_value . "' is not set"; ?></li>
		<? else: ?>
		<li><?= "Cookie '" . $cookie_name . "' is set"; ?></li>
		<li><?= "Value is: " . $_COOKIE[$cookie_name]; ?></li>
	<?php endif; ?>
	</ul>



</body>
</html>
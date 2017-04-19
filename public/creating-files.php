<?php


$newfile = fopen("text/newfile.txt", "w") or die("Can't open that file");
$txt = "You should be seeing this in testfile.txt\n";
fwrite($newfile, $txt);
$txt = "Here's a new line\n";
fwrite($newfile, $txt);
fclose($newfile);


?>





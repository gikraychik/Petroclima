<?php
require ("Base/Php/MyFunc.php");
$path = "Base/Mail.txt"; $spath = "Base/DataBase.txt";
echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\"></head><body>";
if (ClientExists($path, $email))
{
	DelClientByEmail($path, $spath, trim($email));
	echo "You were succesfully unregistered.";
}
else
{
	echo "Your account cannot be deleted as you are not registered.";
}
echo "</body></html>";
?>
<?php
function GetCurM()
{
	return (date("n"));
}
function GetCurY()
{
	return (date("Y"));
}
function UpdateDate($path, $m, $y)
{
	@$f = fopen($path, "w") or die ("Error updating Date");
	flock($f, 2);
	fwrite($f, $m."\n");
	fwrite($f, $y);
	flock($f, 3);
	fclose($f);
}	
function CheckMyDate($path)
{
	$a = file($path); $n = count($a);
	$m = intval(trim($a[0]));
	$y = intval(trim($a[1]));
	$cm = GetCurM(); $cy = GetCurY();
	$d = ($cy*12+$cm) - ($y*12+$m);
	if ($d>0)
	{
		UpdateDate($path, $cm, $cy);
		@$fil = fopen("../Counter.txt", "a") or die("Error in CheckMyDate");
		flock($fil, 2);
		for ($i=0; $i<$d; $i++)
		{
			//echo $i;
			fwrite($fil, "0\n");
		}
		flock($fil, 3);
		fclose($fil);
	}
}
?>

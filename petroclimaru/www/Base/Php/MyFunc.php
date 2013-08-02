<?php
function AddClient($path, $spath, $s, $first, $second)
{
	if ((is_string($path) & (is_string($s)) & (isset($path)) & (isset($s)))) {
		$a = file($path); $count = count($a);
		@$f = fopen($path, "a+") or die("Function error. Could not add client");
		flock($f, 2);
		if ($count==0) { fwrite($f, $s); }
		else { fwrite($f, "\n".$s); }
		flock($f, 3);
		fclose($f);
		@$file = fopen($spath, "a+") or die("Function error. Could not add secondary information");
		flock($file, 2);
		if ($count==0) { fwrite($file, $first); }
		else { fwrite($file, "\n".$first); }
		fwrite($file, "\n".$second);
		flock($file, 3);
		fclose($file);
		return(0);
	}
	else return (-1);
}
function AddTmpClient($path, $s, $first, $second)
{
	$a = file($path); $count = count($a);
	@$f = fopen($path, "a+") or die("Function error. Could not add client");
	flock($f, 2);
	if ($count==0) { fwrite($f, $s); }
	else { fwrite($f, "\n".$s); }
	fwrite($f, "\n".$first);
	fwrite($f, "\n".$second);
	flock($f, 3);
	fclose($f);
	$str = FormRegPage($s, $first, $second);
	$link = CreateRegPage($str);
	if ($link!=-1){ return ($link); }
	else { return (-1); }
}
function CreateRegPage($str)
{
	$a = file("Base/LastName.txt");
	$x = (int)trim($a[0]);
	if (! is_int($x)) { echo "Wrong parsing string to int in CreateRegPage!"; return (-1);}
	else {
		$x++;
		$name = "Base/Reg/Template".$x.".php";
		@$f = fopen($name, "a+");
		flock($f, 2);
		fwrite($f, $str);
		flock($f, 3);
		fclose($f);
		$link = "http://www.petroclima.ru/".$name;
		return ($link);
	}
}
function IncNum($path)
{
	$a = file($path);
	$x = (int)trim($a[0]);
	if (! is_int($x)) { echo "Wrong parsing string to int in IncNum"; return(-1); }
	else {
		$x++;
		@$fl = fopen($path, "w+"); fclose($fl);
		@$f = fopen($path, "a+");
		flock($f, 2); fwrite($f, $x); flock($f, 3);
		fclose($f);
		return(0);
	}
}
function FormRegPage($email, $first, $second)
{
	$str = "<?php \n";
	$str.= "require (\"../Php/MyFunc.php\");\n";
	$str .= "AddClient(\"../Mail.txt\", \"../DataBase.txt\",\"".$email."\", \"".$first."\", \"".$second."\");\n";
	$str .= "?>\n";
	$str .= "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
<html>
<head>
  <title>ЗАО \"Петроклима\"</title>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <link href=\"../Css/style.css\"
 rel=\"stylesheet\" type=\"text/css\">
<!-- /all in one seo pack -->
</head>
<body>
<table width=\"100%\" border=\"0\">
<tbody>
<tr>
<td width = \"33%\"></td>
<td width = \"840px\">
<div class=\"main\">
<div class=\"header\">
<div class=\"logo\">
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"840\">
  <tbody>
    <tr>
      <td align=\"right\"><b>Закрытое
акционерное<br>
общество \"Петроклима\"<br>
Тел. +7 (812)331-59-18</b></td>
      <td width=\"140\"><a href=\"/\"><img src=\"/images/logo.jpg\" border=\"0\"
 height=\"165\" width=\"140\"></a></td>
    </tr>
  </tbody>
</table>
</div>
<div class=\"menu\">
<div><a href=\"/\">главная</a>
| <a href=\"/okompanii.php\">о
компании</a>
| <a href=\"/products.php\">продукция</a>
| <a href=\"contacts.php\">контакты</a></div>
</div>
</div>";
$str.="<div class=\"content\" id=\"cnt\">";
$str .= "<div class=\"normtext\">Вы успешно зарегистрировались на сайте.<br>E-mail: ";
$str .= trim($email)."<br>";
$str .= "Наименование компании: "; $str .= $first."<br>";
$str .= "Профиль деятельности: "; $str .= $second."<br>";

$str .= "</div>";//Closes normtext;
$str .= "</div>
<div class=\"isoline\"></div>
</div>
</td>
<td width = \"33%\"></td>
</tr></tbody></table>
</body>
</html>";
$str.= "<?php \nunlink(basename(__FILE__));\n ?>";
//$str = iconv($str, "UTF-8", "utf-8");
return($str);
}
	
function ClientExists($path, $tmppath, $email)
{
	$a = file($path); $count = count($a);
	$bool = false;
	for ($i=0; $i<$count; $i++)
	{
		$bool = (trim($a[$i])==trim($email));
		if ($bool) { break; }
	}
	if ($bool) { return ($bool);}
	$b = file($tmppath); $count = count($b); $i = 0;
	while ($i<$count)
	{
		$bool = (trim($b[$i])==trim($email));
		if ($bool) { break; }
		$i+=3;
	}
	return $bool;
}
function DelClientByEmail($path, $spath, $email)
{
	$a = file($path); $b = file($spath);
	@$f = fopen($path, "w+") or die("Function error. Could not delete client");
	@$file = fopen($spath, "w+") or die("Function error. Could not add secondary information");
	$ind = 0; $count = count($a);
	for ($i=0; $i<$count; $i++)
	{
		$k = 2*$i;
		if (trim($a[$i])!=trim($email))
		{
			flock($f, 2);
			fwrite($f, $a[$i]);
			flock($f, 3);
			flock($file, 2);
			fwrite($file, $b[$k]);
			fwrite($file, $b[$k+1]);
			flock($file, 3);
		}
	}
	fclose($f);
	fclose($file);
	return 0;
}
?>
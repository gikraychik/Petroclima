<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once("Base/Php/Schedule.php");
$site = 0;
?>
<html>
<head>
  <title>Архив новостей</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=utf-8">
  <link
 href="Base/Css/style.css"
 rel="stylesheet" type="text/css">
 <link rel="shortcut icon" href="/images/icon.ico" />
</head>
<body>
<table width="100%" border="0">
<tbody>
<tr>
<td width = "33%"></td>
<td width = "840px">
<div class="main">
<div class="header">
<div class="logo">
<table border="0" cellpadding="0" cellspacing="0" width="840">
  <tbody>
    <tr>
      <td align="right"><b><?php echo get_name($site)."<br>".get_phone($site); ?></b></td>
      <td width="140"><a href="/"><?php echo get_logo($site); ?></a></td>
    </tr>
  </tbody>
</table>
</div>
<div class="menu">
<div><a href="/">главная</a>
| <a href="/okompanii.php">о
компании</a>
| <a href="/products.php">продукция</a>
| <a href="contacts.php">контакты</a></div>
</div>
</div>
<div class="content">
<h1 style="margin-left:0px; width: 810px; text-align: center;">Архив новостей</h1>
<div class="normtext">
<?php
@$file = fopen ("Base/News.txt", "r") or die("Base not found");
if ($file) {
	$a = file("Base/News.txt");
	$count = count($a);
	$x = 0;
	//if ($count>6) { $x = $count-6;}
	$i = $count-1; $p=0;
	while ($i>$x) {
		$p++;
		$k=$i-1;
		echo "<font color=\"#4B47B8\">$a[$k]</font><br>";
		echo "$a[$i]<br><br>";
		$i-=2;
	}
}
else {echo "File not found";}
?>
</div>
</div>
<div class="isoline"></div>
</div>
<td width = "33%"></td>
</tr></tbody></table>
</body>
</html>
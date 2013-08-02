<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once("Base/Php/Schedule.php");
$site = 0;
?>
<html>
<head>
  <title>Продукция</title>
<script language="JavaScript" src="Base/JavaScripts/script.js">
</script>
  <meta http-equiv="Content-Type"
 content="text/html; charset=utf-8">
  <link
 href="Base/Css/style.css"
 rel="stylesheet" type="text/css">
 <link rel="shortcut icon" href="/images/icon.ico" />
<!-- /all in one seo pack -->
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

<h1 style="margin-left: 0px; width: 810px; text-align: center;"><big>Продукция</big></h1>
<div style="padding-left: 35px;">
<font size="+0">
<ol>
<?php
@$file = fopen ("Base/Products.txt", "r") or die("Base not found");
if ($file) {
	$a = file("Base/Products.txt");
	$count = count($a);
	$i = 0; $k=0; $str="nil";
	while ($i<$count) {
		$k=$i+1;
		if (substr($a[$k], 0, 3)=="nil") {
			echo "<li>$a[$i]</li><br>";
			//echo "<br>";
		}
		else {
			echo "<li><a href=\"$a[$k]\">$a[$i]</a></li><br>";
			//echo "<br>";
		}
		$i+=2;
	}
}
else {echo "File not found";}
?>
</ol>
</font>
</div>
</div>
<div class="isoline"></div>
</div>
</td>
<td width = "33%"></td>
</tr></tbody></table>
</body>
</html>

<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); //Дата в прошлом 
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1 
header("Pragma: no-cache"); // HTTP/1.1 
header("Last-Modified: ".gmdate("D, d M Y H:i:s")."GMT");
header("X-Accel-Expires: 120");
include_once("Base/Php/Schedule.php");
include_once("Base/Php/Galery.php");
$site = 0;
?>
<html>
<head>
  <title>Документация</title>
  <meta content="text/html; charset=windows-1251" http-equiv="Content-Type">
  <link type="text/css" rel="stylesheet" href="Base/Css/style.css">
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
| <a href="/contacts.php">контакты</a></div>
</div>
</div>
<div class="content">
<div align="center"><h1>Сертификаты, свидетельства</h1></div>
<table width="<?php $x = min(840, (840*GetAmount("Galery/High/Certificates"))/6); echo $x; ?>" border="0">
<?php
PrintImg("Galery/High/Certificates", "Galery/Low/Certificates", "Base/DocCer.txt");
?>
<br></table>
<div align="center"><h1>Технические условия</h1></div>
<table width="<?php $x = min(840, 840/6*GetAmount("Galery/High/Tech")); echo $x; ?>" border="0">
<?php
//include("Base/Php/Galery.php");
PrintImg("Galery/High/Tech", "Galery/Low/Tech", "Base/DocTU.txt");
?>
</table><br>
<div align="center"><h1>Патенты, аттестаты</h1></div>
<table width="<?php $x = min(840, 840/6*GetAmount("Galery/High/Patents")); echo $x;?>" border="0">
<?php
//include("Base/Php/Galery.php");
PrintImg("Galery/High/Patents", "Galery/Low/Patents", "Base/DocPat.txt");
?>
</table>
<div class="footer">
<table border="0" cellpadding="0" cellspacing="0" height="20" width="500">
  <tbody>
    <tr>
      <td> <big><br>
      <br>
      <br>
      <br>
      <br>
      <img src="NewImages/isologo.jpg" alt="ISO"
 style="width: 50px; height: 50px;"></big></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<td width = "33%"></td>
</tr></tbody></table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once("Base/Php/Schedule.php");
include_once("Base/Php/NewGalery.php");
$site = 0;
?>
<html>
<head>
  <title>������������</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
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
<div><a href="/">�������</a>
| <a href="/okompanii.php">�
��������</a>
| <a href="/products.php">���������</a>
| <a href="/contacts.php">��������</a></div>
</div>
</div>
<div class="content">
<div align="center"><h1>�����������, �������������</h1></div>
<table width="<?php $x = min(840, (840*GetAmount("Galery/High/Certificates"))/6); echo $x; ?>" border="0">
<?php
PrintImg("Galery/High/Certificates", "Galery/Low/Certificates", "Base/DocCer.txt");
?>
<br></table>
<div align="center"><h1>����������� �������</h1></div>
<table width="<?php $x = min(840, 840/6*GetAmount("Galery/High/Tech")); echo $x; ?>" border="0">
<?php
//include("Base/Php/Galery.php");
PrintImg("Galery/High/Tech", "Galery/Low/Tech", "Base/DocTU.txt");
?>
</table><br>
<div align="center"><h1>�������, ���������</h1></div>
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
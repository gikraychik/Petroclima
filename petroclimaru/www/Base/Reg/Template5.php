<?php 
require ("../Php/MyFunc.php");
AddClient("../Mail.txt", "../DataBase.txt","S.Kamzolov@dorinrus.ru", "Dorin SpA", "компрессоростроение");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>ЗАО "Петроклима"</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="../Css/style.css"
 rel="stylesheet" type="text/css">
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
      <td align="right"><b>Закрытое
акционерное<br>
общество "Петроклима"<br>
Тел. +7 (812)331-59-18</b></td>
      <td width="140"><a href="/"><img src="/images/logo.jpg" border="0"
 height="165" width="140"></a></td>
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
</div><div class="content" id="cnt"><div class="normtext">Вы успешно зарегистрировались на сайте.<br>E-mail: S.Kamzolov@dorinrus.ru<br>Наименование компании: Dorin SpA<br>Профиль деятельности: компрессоростроение<br></div></div>
<div class="isoline"></div>
</div>
</td>
<td width = "33%"></td>
</tr></tbody></table>
</body>
</html><?php 
unlink(basename(__FILE__));
 ?>
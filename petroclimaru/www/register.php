<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>�����������</title>
<script language="javascript" src="Base/JavaScripts/check.js">
</script>
<script language = "javascript">
<!--
function GetBack(thing)
{
	thing.style.backgroundColor = "#FFFFFF";
	thing.style.borderWidth = "2px";
	thing.style.borderColor = "#FFFFFF";
}
//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="Base/Css/style.css" rel="stylesheet" type="text/css">
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
      <td align="right"><b>��������
�����������<br>
�������� "����������"<br>
���. +7 (812)331-59-18</b></td>
      <td width="140"><a href="/"><img src="/images/logo.jpg" border="0"
 height="165" width="140"></a></td>
    </tr>
  </tbody>
</table>
</div>
<div class="menu">
<div><a href="/">�������</a>
| <a href="/okompanii.php">�
��������</a>
| <a href="/products.php">���������</a>
| <a href="contacts.php">��������</a></div>
</div>
</div>

<div class="content">
<div style="margin-left: 40px;">
<form name="myform" action="Action.php", mathod="post" target="response" onsubmit="return Check(myform);">
<table border="0" cellpadding="0" cellspacing="20" width="800px">
<tr>
	<td width="230">������������ ��������:</td>
    <td width="400"><input onchange="GetBack(myform.comp);" name="comp" id="comp" type="text" width="507px"></td>
</tr>
<tr>
	<td>������� ������������:</td>
    <td><input onchange="GetBack(myform.doing);"name="doing" id="doing" type="text" width="507px"></td>
</tr>
<tr>
	<td>E-mail:</td>
    <td><input onchange="GetBack(myform.email);" id="email" name="email" type="text" width="507px"></td>
</tr>
<tr>
	<td><input type="submit" value="���������"></td>
</tr>
</table>
</form>
����� �������:<br>
<iframe id="response" name="response" width="780" frameborder="1" border="2" scrolling="auto">
</iframe>
</div>

</div>
<div class="isoline"></div>
</div>
<td width = "33%"></td>
</tr></tbody></table>
<script language="JavaScript">
<!--
//CheckEmail();
//-->
</script>
</body>
</html>

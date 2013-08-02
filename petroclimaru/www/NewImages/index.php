<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once("Base/Php/Schedule.php");
$site = 0;
?>
<html>
<head>
  <title>ЗАО "Петроклима": транспортные кондиционеры, системы вентиляции и холодильное оборудование</title>
    <style>
   p {
    text-indent: 20px; /* Отступ первой строки в пикселах */
   }
  </style>
  <meta content="text/html; charset=windows-1251"
 http-equiv="Content-Type">
  <link type="text/css" rel="stylesheet"
 href="Base/Css/style.css">
 <link rel="shortcut icon" href="/images/icon.ico" />
  <meta content="WordPress 3.0" name="generator">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="ТРАНСПОРТНЫЕ КОНДИЦИОНЕРЫ, КОНДИЦИОНЕРЫ СПЕЦИАЛЬНОГО НАЗНАЧЕНИЯ, ЖЕЛЕЗНОДОРОЖНЫЕ КОНДИЦИОНЕРЫ, ПРОЕКТИРОВАНИЕ СИСТЕМ КОНДИЦИОНИРОВАНИЯ">
<script language="javascript">
<!--
function Execute()
{
	if (b) { DeWrap(); }
	else { Wrap(); }
	b = !b;
}
function Wrap()
{
	var s = "<h1>Новости</h1>";
	s+= d1.outerHTML + i1.outerHTML + d2.outerHTML + i2.outerHTML;
	s+= d3.outerHTML + i3.outerHTML;
	s+= lnk.outerHTML + itm.outerHTML;
	//if (num<=0) { window.alert("Unexpected error"); }
	//s+= text.substring(num, text.length);
	//window.alert(text);
	lt.innerHTML = s;
}
function DeWrap()
{
	lt.innerHTML = text;
}
//-->
</script>
</head>
<body>
<?php
require("Base/Php/Date.php");
CheckMyDate("Base/Date.txt");
?>
<?php
@$f = fopen("Base/Mail.txt", "r") or die("Internal Error");
$news = file("Base/FreshNews.txt"); $count = count($news);
if ($count!=0) {
$file = fopen("Base/FreshNews.txt", "w+");
fclose($file);
@$fl = fopen("Base/News.txt", "a+") or die("Unexpected Error");
flock($fl, 2);
fwrite($fl, "\n"); 
for ($i=0; $i<$count; $i+=2){
	$k=$i+1;
	fwrite($fl, $news[$i]);   //Добавляет новости к файлу News.txt
	fwrite($fl, $news[$k]);
}
flock($fl, 3);
fclose($fl);
$str = "Добрый день!\n\n";
for ($i=0; $i<$count; $i+=2){
	$k=$i+1;                           //Формирование письма
	$str.= $news[$i].$news[$k]."\n";
}
$str.= "\nСлужба поддержки ЗАО \"Петроклима\".\n";
$str.= "http://www.petroclima.ru/";
$from = "Суппорт";
$from= "=?windows-1251?B?".base64_encode($from)."?=";
$header = "Content-Type: text/plain; charset=windows-1251\r\n";
$header.= "From: ".$from."<info@petroclima.ru>";
$topic="Новости ЗАО \"Петроклима\"";
$topic = "=?windows-1251?B?".base64_encode($topic)."?=";
flock($f, 2);
while (! feof($f)) {
	$s = fgets($f, 1024); 
	mail($s, $topic, $str, $header);
}
flock($f, 3);
}
fclose($f);
?>


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
<table width="840px" border="0px">
<tr><td width="190px">
<div class="left" id="lt">
<h1>Новости</h1>
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
		echo "<div class=\"newsdate\" id=\"d".$p."\">$a[$k]</div>\n";
		echo "<div class=\"newsitem\" id=\"i".$p."\">$a[$i]</div>";
		$i-=2;
	}
}
else {echo "File not found";}
if ($count>5) {
	echo "<div class=\"newsitem\" id=\"lnk\">";
	echo "<a style=\"cursor: hand;\"><h1><u><a href=\"news.php\">Архив новостей</a></u></h1></a></div>";
}
?>
<div class="newsitem" id="itm">
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t27.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано количество просмотров и"+
" посетителей' "+
"border='0' width='88' height='120'><\/a>")
//--></script><!--/LiveInternet-->
</div>
</div>
</td>
<td>
<div class="normtext">
<h1 align="center">Дрогие друзья!</h1>
<p>Примите наши поздравления с наступившим 2013 годом и Рождеством!</p>
<p>Мы благодарим Вас за доверие, взаимопонимание и искренне надеемся на продолжение успешного сотрудничества в Новом году.</p>
<p>Желаем Вам процветания, больших доходов и новых проектов!</p>
<p>Пусть Новый 2013 год принесет Вам много радости!</p>
<p>Счастья, здоровья и успехов Вам и Вашим близким!</p>
<p></p>
<p>Если Вы хотите быть в  курсе новостей, быть в базе наших клиентов, быть первым среди наших  поставщиков, то <a href="register.php">зарегистрируйтесь</a>. Тем самым вы подписываетесь на оповещения по  всем свежим новостям ЗАО &laquo;Петроклима&raquo;.</p>
//<img style="border: 0px solid ; width: 190px;" alt="No image" src="/NewImages/congrat2013.jpg">
</td>
<td>
<div class="foto" id="ft">
<h1 align="center"><a href="/galery.php">Документация</a></h1>
<img style="border: 0px solid ; width: 190px;" alt="No image" src="/Galery/Low/Certificates/img001.JPG">
<br>
<div class="newsitem">
<p>Copyright &copy; ЗАО&ldquo;Петроклима&rdquo;, <br>Санкт-Петербург, 2010</p>
<p> e-mail: <a href="mailto:info@petroclima.ru">info@petroclima.ru</a></p>
</div>
</div>
</td>
</table>
<script language="javascript">
<!--
text = new String(lt.innerHTML);
var b = false;
Execute();
//-->
</script>
</div>
<div class="footer">
<table border="0" width="100">
  <tbody>
  <tr>
  <th height="30px"></th>
    <tr>
    	<th><img src="NewImages/isologo.jpg" alt="ISO" longdesc="/NewImages/isologo.jpg" height="66" width="62"></th>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</td>
<td width = "33%"></td>
</tr></tbody></table>
</body>
</html>

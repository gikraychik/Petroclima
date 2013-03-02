<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once("Base/Php/Schedule.php");
$site = 0;
?>
<html>
<head>
  <title>Контакты</title>
  <meta http-equiv="Content-Type"
 content="text/html; charset=windows-1251">
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
| <a href="/contacts.php">контакты</a></div>
</div>
</div>
<div class="content">
<h1 style="text-align: center;" class="entry-title"><big>Контакты</big></h1>
<div class="normtext">
Адрес:<br><br>
196084, г. Санкт-Петербург, ул. Парковая, д. 6, лит. &quot;А&quot;<br>
Телефон: (812) 331-59-18<br>
Телефон, факс:&nbsp; (812) 331-59-45<br>
<br>
<span style="font-weight: bold;">Проектно-технический отдел: </span>to_klk@petroclima.ru<br>
<br>
<span style="font-weight: bold;">e-mail:</span> info@petroclima.ru<br>
<script
 src="http://api-maps.yandex.ru/1.1/?key=APGO3UwBAAAAM2hPTAIANzoLw9N08oljvTKSUWzT6F7KylQAAAAAAAAAAAC-A15jscpbhqxyUQ8AaqanHhycnA==&amp;wizard=constructor"
 type="text/javascript"></script>&nbsp;
<script type="text/javascript">
YMaps.jQuery(window).load(function () {
var map = new YMaps.Map(YMaps.jQuery("#YMapsID-39")[0]);
map.setCenter(new YMaps.GeoPoint(30.335506,59.894977), 14, YMaps.MapType.MAP);
map.addControl(new YMaps.Zoom());
map.addControl(new YMaps.ToolBar());
map.addControl(new YMaps.TypeControl());
YMaps.Styles.add("constructor#pmlbmPlacemark", {
iconStyle : {
href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmlbm.png",
size : new YMaps.Point(28,29),
offset: new YMaps.Point(-8,-27)
}
});
map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(30.337652,59.893511), "constructor#pmlbmPlacemark", "ЗАО \"Петроклима\""));
function createObject (type, point, style, description) {
var allowObjects = ["Placemark", "Polyline", "Polygon"],
index = YMaps.jQuery.inArray( type, allowObjects),
constructor = allowObjects[(index == -1) ? 0 : index];
description = description || "";
var object = new YMaps[constructor](point, {style: style, hasBalloon : !!description});
object.description = description;
return object;
}
});
</script>
<div id="YMapsID-39" style="width: 450px; height: 350px;"></div>
<script
 src="http://api-maps.yandex.ru/1.1/?key=APGO3UwBAAAAM2hPTAIANzoLw9N08oljvTKSUWzT6F7KylQAAAAAAAAAAAC-A15jscpbhqxyUQ8AaqanHhycnA==&amp;wizard=constructor"
 type="text/javascript"></script>
<script type="text/javascript">
YMaps.jQuery(window).load(function () {
var map = new YMaps.Map(YMaps.jQuery("#YMapsID-119")[0]);
map.setCenter(new YMaps.GeoPoint(29.998242,60.016194), 15, YMaps.MapType.MAP);
map.addControl(new YMaps.Zoom());
map.addControl(new YMaps.ToolBar());
map.addControl(new YMaps.TypeControl());
YMaps.Styles.add("constructor#pmlbmPlacemark", {
iconStyle : {
href : "http://api-maps.yandex.ru/i/0.3/placemarks/pmlbm.png",
size : new YMaps.Point(28,29),
offset: new YMaps.Point(-8,-27)
}
});
map.addOverlay(createObject("Placemark", new YMaps.GeoPoint(29.999014,60.014239), "constructor#pmlbmPlacemark", "Улица Парковая, дом 6"));
function createObject (type, point, style, description) {
var allowObjects = ["Placemark", "Polyline", "Polygon"],
index = YMaps.jQuery.inArray( type, allowObjects),
constructor = allowObjects[(index == -1) ? 0 : index];
description = description || "";
var object = new YMaps[constructor](point, {style: style, hasBalloon : !!description});
object.description = description;
return object;
}
})
</script>
</div>
</div>
<div class="isoline"></div>
</div>
<td width = "33%"></td>
</tr></tbody></table>
</body>
</html>

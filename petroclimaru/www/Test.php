<html>
<head>
<script language="javascript">
<!--
function getXmlHttp(){
  var xmlhttp;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
//-->
</script>
</head>
<body>
<div id="txt">
</div>
<script language = "javascript">
<!--
var xmlhttp = getXmlHttp()
xmlhttp.open('GET', 'http://www.petroclima.ru/Base/LastName.txt', true);
xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4) {
	  //alert ("First stage.");
      if(xmlhttp.status == 200) {
      document.getElementById("txt").innerHTML += xmlhttp.responseText;
	  }
	  else alert("Left error");
  }
}
xmlhttp.send(null);

//-->
</script>
</body>
</html>
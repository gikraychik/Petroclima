<?php
function get_name($site)
{
	if ($site == 0) { return "Закрытое акционерное <br>общество \"Петроклима\""; }
	else if ($site == 1) { return "ООО \"НПП \"Транстехника\""; }
	else { return ""; }
}

function get_phone($site)
{
	if ($site == 0) { return "Тел. +7 (812) 331-59-18"; }
	else if ($site == 1) { return "Тел. +7 (812) 444-61-16"; }
	else { return ""; }
}
?>
<?php
function get_name($site)
{
	if ($site == 0) { return "�������� ����������� <br>�������� \"����������\""; }
	else if ($site == 1) { return "��� \"��� \"������������\""; }
	else { return ""; }
}

function get_phone($site)
{
	if ($site == 0) { return "���. +7 (812) 331-59-18"; }
	else if ($site == 1) { return "���. +7 (812) 444-61-16"; }
	else { return ""; }
}

function get_logo($site)
{
	if ($site == 0) { return "<img src=\"/images/logo.jpg\" border=\"0\" height=\"165\" width=\"140\">"; }
	else if ($site == 1) { return "<img src=\"/images/logo.jpg\" border=\"0\" height=\"165\" width=\"140\">"; }
	else { return ""; }
}
?>
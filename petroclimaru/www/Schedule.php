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
?>
<?php
	require ("Base/Php/MyFunc.php");
	$path = "Base/Mail.txt"; $spath = "Base/DataBase.txt"; $tmppath="Base/Tmp.txt";
	echo "<html><head></head><body>";
	$res = ""; $b = 0;
	if ($comp=="")
	{
		$res .= "<font color=\"red\">������� ������������ ��������.</font><br>";
	}
	if ($doing=="")
	{
		$res .= "<font color=\"red\">������� ������� ������������.</font><br>";
	}
	if ($email=="")
	{
		$res .= "<font color=\"red\">������� ����� ����������� �����.</font><br>";
	}
	else if (!eregi('^[a-z0-9_\.\-]+@([a-z0-9\-]+\.)+[a-z]{2,4}$', $email))
	{
		$res .= "<font color=\"red\">��������� ������������ ���������� ������ ����������� �����.</font><br>";
	}
	if ($res=="")
	{
		$b = 1;
	}
	if ($b==1)
	{
		if (ClientExists($path, $tmppath, $email))
		{
			//echo "Failed. This e-mail has been already registered.";
			echo "<font color=\"red\">�� ������� ������������������ �� �����. �� ��� ��������� � ����� ���� ������. ��������� �������� ����� ����������� �����.</font>";
		}
		else
		{			$ok = AddTmpClient($tmppath, $email, $comp, $doing);
			if ($ok==-1)
			{
				echo "Internal server error. AddTmpClient works incorrectly.";
				echo "</body></html>";
				exit;
			}			$res = "<font color=\"green\">�� ������� ����������������. �� ��������� ����� ����������� ����� ������� ������, � ������� ���������� ������ ��� ������������� �����������.</font><br>";
			$str = "������ ����!\n\n";
			$str.= "��� ����� ����������� ����� ��� ��������������� �� ����� http://www.petroclima.ru. ���� �� �� ���������������� �� ������ ��������-�������, �������������� ������. ����� ����������� �����������, ����������� �� ������:\n";
			$str.= $ok."\n\n";
			$str.= "������ ��������� ��� \"����������\"\n";
			$str.= "http://www.petroclima.ru/";
			$from = "������ ��������� ��� \"����������\"";
			$from= "=?windows-1251?B?".base64_encode($from)."?=";
			$header = "Content-Type: text/plain; charset=windows-1251\r\n";
			$header.= "From: ".$from."<info@petroclima.ru>";
			$topic="����������� �� �����";
			$topic = "=?windows-1251?B?".base64_encode($topic)."?=";
			mail($email, $topic, $str, $header);
			IncNum("Base/LastName.txt");
		}
	}
	//echo "Succeded. The letter has been sent to the registered e-mail adress.";
	echo $res;
	echo "</body></html>";
?>
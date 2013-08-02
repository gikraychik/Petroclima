<?php
	require ("Base/Php/MyFunc.php");
	$path = "Base/Mail.txt"; $spath = "Base/DataBase.txt"; $tmppath="Base/Tmp.txt";
	echo "<html><head></head><body>";
	$res = ""; $b = 0;
	if ($comp=="")
	{
		$res .= "<font color=\"red\">Введите наименование компании.</font><br>";
	}
	if ($doing=="")
	{
		$res .= "<font color=\"red\">Введите профиль деятельности.</font><br>";
	}
	if ($email=="")
	{
		$res .= "<font color=\"red\">Введите адрес электронной почты.</font><br>";
	}
	else if (!eregi('^[a-z0-9_\.\-]+@([a-z0-9\-]+\.)+[a-z]{2,4}$', $email))
	{
		$res .= "<font color=\"red\">Проверьте корректность введенного адреса электронной почты.</font><br>";
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
			echo "<font color=\"red\">Не удалось зарегистрироваться на сайте. Вы уже числитесь в нашей базе данных. Проверьте вводимый адрес электронной почты.</font>";
		}
		else
		{			$ok = AddTmpClient($tmppath, $email, $comp, $doing);
			if ($ok==-1)
			{
				echo "Internal server error. AddTmpClient works incorrectly.";
				echo "</body></html>";
				exit;
			}			$res = "<font color=\"green\">Вы успешно зарегистрированы. На указанный адрес электронной почты выслано письмо, в котором содержится ссылка для подтверждения регистрации.</font><br>";
			$str = "Добрый день!\n\n";
			$str.= "Ваш адрес электронной почты был зарегистрирован на сайте http://www.petroclima.ru. Если вы не регистрировались на данном интернет-ресурсе, проигнорируйте письмо. Чтобы подтвердить регистрацию, проследуйте по ссылке:\n";
			$str.= $ok."\n\n";
			$str.= "Служба поддержки ЗАО \"Петроклима\"\n";
			$str.= "http://www.petroclima.ru/";
			$from = "Служба поддержки ЗАО \"Петроклима\"";
			$from= "=?windows-1251?B?".base64_encode($from)."?=";
			$header = "Content-Type: text/plain; charset=windows-1251\r\n";
			$header.= "From: ".$from."<info@petroclima.ru>";
			$topic="Регистрация на сайте";
			$topic = "=?windows-1251?B?".base64_encode($topic)."?=";
			mail($email, $topic, $str, $header);
			IncNum("Base/LastName.txt");
		}
	}
	//echo "Succeded. The letter has been sent to the registered e-mail adress.";
	echo $res;
	echo "</body></html>";
?>
function Print(s)
{	window.alert(s);
}
function fsubmit()(
{	var f = document.myform;
	if (f.comp.value=="")
	{		Print("Введите наименование компании.");
		f.comp.focus();
		return (false);
	}
	if (f.doing.value=="")
	{
		Print("Введите профиль деятельности.");
		f.doing.focus();
		return (false);
	}
	if (f.email.value=="")
	{
		Print("Введите адрес электронной почты.");
		f.email.focus();
		return (false);
	}
	c_Reg = /^[a-z0-9_\.\-]+@([a-z0-9\-]+\.)+[a-z]{2,4}$/i;
	var s = f.email.value;
	if (!c_Reg.test(s))
	{		Print("Неверно введён адрес электронной почты.");
		f.email.focus();
		return (false);
	}
	return (true);
}


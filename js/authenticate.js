function verifyuser()
{
	user=userid.value.toLowerCase();
	pass=passid.value.toLowerCase();
	var encodeduser=btoa(user);
	var encodedpass=btoa(pass);
	if(encodeduser=="YW51"&&encodedpass=="aGFwcHliaXJ0aGRheQ==")
	{
		return true;
	}
	else
	{
		document.getElementById("autherror").style.display="block";
		element=document.getElementById("autherror");
		  element.classList.add("shake");
		return false;
	}
} 
function champsVide(){
		msg="";
		if (window.document.form5.login.value=="")
		{
		msg+="champ login vide \n";
		}		
		if (window.document.form5.password.value=="")
		{
		msg+="champ password est vide \n";
		}
		return msg;
		}
function validation(){
	
		x= champsVide();
		if (x=="") 
		{
		alert ("tout les champs sont bien remplit");
		form5.submit();
		}
		else
		{
		alert(x);
		}
		}		

	
    
function champsVide(){
		msg="";
		if (window.document.form7.login.value=="")
		{
		msg+="champ LOGIN est vide \n";
		}
		if (window.document.form7.password.value=="")
		{
		msg+="champ password est vide \n";
		}
		
		return msg;
		}
		
function validation(){
	
		x= champsVide();
		a=document.form;
		if (x=="") 
		{
		alert ("tout les champs sont bien remplit");
		form7.submit();
		}
		else alert(x);
		}		

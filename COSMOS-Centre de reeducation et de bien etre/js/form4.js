function champsVide(){
		msg="";
		if (window.document.form4.nom.value=="")
		{
		msg+="champ NOM est vide \n";
		}		
		if (window.document.form4.login.value=="")
		{
		msg+="champ LOGIN est vide \n";
		}
		if (window.document.form4.password.value=="")
		{
		msg+="champ password est vide \n";
		}
		if (window.document.form4.verif.value=="")
		{
		msg+="champ verif password est vide\n";
		}
		
		return msg;
		}
		function mail(){
		msg="";
		contenu=window.document.form4.mail.value;
		if  (contenu==""){
		msg+="saisir votre mail\n";		
		}
		else if (contenu.indexOf('@') == -1)
		msg+= "mail doit contenir le caractére @ \n";
		return msg;
		}
function validation(){
	
		x= champsVide();
		z= mail();
		a=document.form;
		if ((x=="")&&(z=="")) 
		{
		alert ("tout les champs sont bien remplit");
		form4.submit();
		}
		else alert(x+z);
		}		

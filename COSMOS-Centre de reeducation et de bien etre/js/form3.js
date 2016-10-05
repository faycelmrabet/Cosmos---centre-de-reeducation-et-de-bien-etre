function champsVide(){
		msg="";
		if (window.document.form1.nom.value=="")
		{
		msg+="champ NOM est vide \n";
		}		
		if (window.document.form1.prenom.value=="")
		{
		msg+="champ PRENOM est vide \n";
		}
		if (window.document.form1.objet.value=="")
		{
		msg+="champ objet est vide \n";
		}
		if (window.document.form1.message.value=="")
		{
		msg+="saisir votre message\n";
		}
		return msg;
		}
function validation(){
	
		x= champsVide();
		if (x=="") 
		{
		alert ("tout les champs sont bien remplit");
		form1.submit();
		}
		else
		{
		alert(x);
		}
		}		

	
    
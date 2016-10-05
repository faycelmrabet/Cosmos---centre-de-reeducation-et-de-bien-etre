
function champsVide(){
		msg="";
		if (window.document.form6.sujet.value=="")
		{
		msg+="champ Titre est vide \n";
		}			
		if (window.document.form6.newsletter.value=="")
		{
		msg+="champ newsletter est vide \n";
		}
		
		if (window.document.form6.jour.value=="")
		{
		msg+="choisir votre jour \n";
		}	
		if (window.document.form6.mois.value=="")
		{
		msg+="choisir votre mois \n";
		}	
		if (window.document.form6.annee.value=="")
		{
		msg+="choisir votre annee\n";
		}	
		return msg;
		}

function validation(){
	
		x= champsVide();
		a=document.form;
		if (x=="") 
		{
		alert ("tout les champs sont bien remplit");
		form6.submit();
		}
		else alert(x);
		}		


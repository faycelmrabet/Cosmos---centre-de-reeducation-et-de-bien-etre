function champsVide(){
		msg="";
		if (window.document.form.nom.value=="")
		{
		msg+="champ NOM est vide \n";
		}		
		if (window.document.form.prenom.value=="")
		{
		msg+="champ PRENOM est vide \n";
		}
		if (window.document.form.adresse.value=="")
		{
		msg+="champ adresse est vide \n";
		}
		if (window.document.form.message.value=="")
		{
		msg+="saisir votre message\n";
		}
		return msg;
		}
function tel(){
		msg="";
		contenu=window.document.form.telephone.value;
		if  (isNaN(contenu)){
		msg+="caractère non numerique \n";		
		}
		if (contenu.length!=8)
		msg+= "tel doit contenir 8 chiffres \n";
		return msg;
		}
function mail(){
		msg="";
		contenu=window.document.form.mail.value;
		if  (contenu==""){
		msg+="saisir votre mail\n";		
		}
		else if (contenu.indexOf('@') == -1)
		{
		msg+= "mail doit contenir le caractére @ \n";
		}
		return msg;
		}
function validation(){
	
		x= champsVide();
		y= tel();
		z= mail();
		if ((x=="")&&(y=="") && (z=="")) 
		{
		alert ("tout les champs sont bien remplit");
		form.submit();
		}
		else
		{
		alert(x+y+z);
		}
		}		

	
    
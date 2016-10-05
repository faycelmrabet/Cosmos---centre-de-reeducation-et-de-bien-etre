function champsVide(){
		msg="";
		if (window.document.form8.prix.value=="")
		{
		msg+="champ prix est vide \n";
		}
		if (window.document.form8.tva.value=="")
		{
		msg+="champ tva est vide \n";
		}
		
		return msg;
		}
		
function validation(){
	
		x= champsVide();
		a=document.form;
		if (x=="") 
		{
		alert ("tout les champs sont bien remplit");
		form8.submit();
		}
		else alert(x);
		}		

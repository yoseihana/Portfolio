window.addEventListener("load", start, false);

function start(){
	document.getElementsByTagName("input").addEventListener("blur", verifier, false);
	
	//Vide lors du focus
	var mesInput=document.getElementsByTagName("input");
	for(var i=0;i<mesInput.length-1;i++)
	{
		if( mesInput[i].type=="text")
		{
			mesInput[i].addEventListener("focus",reset,false);
		}
	}
}

function verifier(){

	var firstErrField = null;
	
	var nom = document.getElementById("name");
	var prenom = document.getElementById("surname");
	var email = document.getElementById("mail");
	var texte = document.getElementById("message");
	
	//Vérification des entrées nom/prenom
	if(!isAlphab(nom.value)){
		showError("nameErr", "Entrez un nom valide");
		changeFond("input_error", nom);
		firstErrField = (firstErrField == null) ? nom : null;
	}else{
		removeError("nameErr");
		changeFond("input_init",nom);
	}
	
	if(!isAlphab(prenom.value)){
		showError("surnameErr", "Entrez un prenom valide");
		changeFond("input_error", prenom);
		firstErrFiel = (firstErrField == null) ? nom : null;
	}else{
		removeError("surnameErr");
		changeFond("input_init",prenom);
	}
	
	if(!isMailValide(email.value))
	{
		showError("mailErr","Entrez un mail valide");
		changeFond("input_error", email);
		firstErrField = (firstErrField == null) ? email : firstErrField;
	}else{
		removeError("mailErr");
		changeFond("input_init",email);	
	}
}

//Vérification champ texte
function isAlphab(text)
{
	var valideAlphab;
	
	if(text=="")
	{
		valideAlphab = false;
	}else if(isNaN(text))
	{
		valideAlphab = true;
	}else{
		valideAlphab = false;
	}
	
	return valideAlphab;
}

//Vérification champ email
function isMailValide(email)
{
	var at=email.indexOf("@");
	var valideMail;
	
	if(email=="")
	{
		valideMail=false;
	}else if(at<1)
	{
		valideMail=false;
	}else if(at+4>email.length)
	{
		valideMail=false;
	}else{
		valideMail=true;
	}
		
	return valideMail;
}

//Si il y a déjà une erreur
function removeError(field)
{
	var errField=document.getElementById(field); 
	if (errField.firstChild != null)
		errField.removeChild(errField.firstChild);
	return errField;
}

//Message d'erreur
function showError(field, msg)
{	
	removeError(field).appendChild(document.createTextNode(msg));
}

//Ajout de class pour CSS
function changeFond(mode, elt)
{
	elt.setAttribute("class", mode); 
	return elt;
}

//Change la value lors du focus
function reset (e)
{
	e.target.value="";
}

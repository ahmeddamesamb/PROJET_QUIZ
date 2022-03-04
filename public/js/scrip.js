// RECUPERATION DES ADRRESSE DES BALISE EN HTML
const form = document.getElementById('form1');
const email = document.getElementById('email');
const password = document.getElementById('password');

//CREATION DE FONCTION POUR ERREUR
function showError(input, message){
 const formControl=input.parentElement;
 formControl.className='form-Control error';
 const small= formControl.querySelector('small');
 small.innerText=message;
 console.log(small.innerText);
}
// CREATION DE FONCTION POUR SUCCESSFUL
function showSuccess(input){
    const formControl= input.parentElement;
    formControl.className='form-Control success';
    // const small= formControl.querySelector('small');

    // small.style.display='none';
}
// VERIFICATION DE MES EMAIL 
function checkEmail(input){
    const re=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim().toLowerCase())) {
     showSuccess(input);
    }
    else{
       showError(input,'Email n est pas valide');
    }
}
// VALIDITE EMAIL
function isValidEmail(email) {
    const re=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
return re.test(String(email).toLowerCase());
}
// VERIFICATION MOT DE PASSE
function isValidPassword(password) {
    validity=false;
    if(password.value.trim().length<6){
        validity=false;
    }
    else{
        motif = password.value.trim();
        re=/^(?=.*\d).{6,}$/;
        if(re.test(motif)){
            validity=true;
        }
    }
    return validity;
}
// *************EVENTMENT******************
//CREER UN EVENTMENT AVEC LE BUTTON SUBMIT 

form.addEventListener('submit',function(e){
    /**BLOCAGE DE LA SOUMISSION DU FORMULAIRE */
    e.preventDefault();
    //verification de l email et du mot de passe pour afficher les erreur
    //
    checkEmail(email);
    isValidPassword(password);
    
    // verification si l email et vide et sa validite
    if (email.value ===''){
        showError(password, 'login est obligatoire')
    }
    else if (!isValidEmail(email.value)){
        showError(email, 'le login est invalid');
        
    }
    else {
        showSuccess(email)
    }

    if(password.value===''){
        showError(password, 'le mot de pase est obligatoire')
    }
    else{
        if (!isValidPassword(password)){
            showError(password, 'le mot de password doit etre ai moins 6 caractere et une lettre et un chiffre au moin')
    
        }
        else{
            showSuccess(password);
        }
    }

  //  SI LE LOGIN ET LE MOT DE PASSE SONT VALIDE ON DEBLOC LE FORMULAIRE ON

//     if(isValidEmail(email.value) && isValidPassword(password)){
//         e.target.submit










//     }

 })



























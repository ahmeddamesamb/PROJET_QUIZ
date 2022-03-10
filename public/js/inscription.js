

// email.addEventListener("input", function (event) {
//   // Chaque fois que l'utilisateur saisit quelque chose
//   // on vérifie la validité du champ e-mail.
//   /* if (email.validity.valid) {
//     // S'il y a un message d'erreur affiché et que le champ
//     // est valide, on retire l'erreur
//     error.innerHTML = ""; // On réinitialise le contenu
//     error.className = "error"; // On réinitialise l'état visuel du message
//   } */
// }, false);


// form.addEventListener("submit", function (event) {
//   // Chaque fois que l'utilisateur tente d'envoyer les données
//   // on vérifie que le champ email est valide.
//   if (!email.validity.valid) {
//     // Et on empêche l'envoi des données du formulaire
//     event.preventDefault();
//   }
// }, false);



const form = document.getElementById('form');
const username = document.getElementById('username');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const nameValue = name.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'le champ prenom ne doit pas etre vide');
	} else {
		setSuccessFor(username);
	}
     if(nameValue === '') {
		setErrorFor(name, 'le champ nom ne doit pas etre vide');
	} else {
		setSuccessFor(name);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email ne doit pas etre vide');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password ne doit pas etre vide');
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password ne doit pas etre vide');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords ne correspond pas');
	} else{
		setSuccessFor(password2);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

// floating_btn.addEventListener('click', () => {
// 	social_panel_container.classList.toggle('visible')
// });

// close_btn.addEventListener('click', () => {
// 	social_panel_container.classList.remove('visible')
// });
//******UPLOAD JS ******* */

const wane= document.getElementById('wane');
const fileUpload = document.getElementById('file');
const imageup=document.getElementById('imgup');



//******UPLOAD DEUX IMAGE***** */
fileUpload.addEventListener('change',(e)=>{
	imageup.src=URL.createObjectURL(fileUpload.files[0]);
});

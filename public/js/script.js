const form = document.getElementById('form_ins');
const prenom=document.getElementById('prenom');
const nom=document.getElementById('nom');
const login=document.getElementById('login');
const password=document.getElementById('password');
const confirm_password=document.getElementById('confirm_password');
const creer=document.getElementById('creer'); 

//----------------Functions
function showError(input,message){
    const formControl = input.parentElement;
    input.style.border = 'solid 5px red';
    const small = formControl.querySelector('small');
    small.innerText = message;
}
function showSuccess(input,message){
    const formControl = input.parentElement;
    input.style.border = 'solid 5px green';
    const small = formControl.querySelector('small');
    small.innerText = message;
}
function checkEmail(input){
    const re =/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/     ;
    if(re.test(input.value.trim().toLowerCase())){
        showSuccess(input,'Email is valid');
        return true;
    }else{
        showError(input,'Email is not valid');
        return false;
    }
}
function checkRequired(input){
    
    if(input.value.trim() === ''){
        showError(input,`${getFieldName(input)} is required!`);
        return false;
    }else{
        showSuccess(input);
        return true;
    }
            
}
function getFieldName(input){
  return  input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
 function checkPasswordMatch(input1,input2){
    if(input1.value !== input2.value){
        showError(input2,'Password are not match!');
        return false;
    }else{
        showSuccess(input2,'Password are match')
        return true;
    }
}
function validPassword(input){
    const re= /([a-z]){6}/;
    if(re.test(input.value)){
        showSuccess(input,'Password  is valid');
        return true;
    }else{
        showError(input,'Password is not valid');
        return false
    }   
}
//-------------------Events
 login.addEventListener('keyup',function(e){
  e.preventDefault(); // pour bloquer la soumission du formulaire;
    checkEmail(login);
});

password.addEventListener('keyup',function(){
    validPassword(password);
});
confirm_password.addEventListener('keyup',function(){
    checkPasswordMatch(password,confirm_password);
});
password.addEventListener('keyup',function(){
    checkPasswordMatch(password,confirm_password);
});
prenom.addEventListener('keyup',function(){
   // e.preventDefault();
    checkRequired(prenom);
});
nom.addEventListener('keyup',function(){
    // e.preventDefault();
     checkRequired(nom);
 });
//
  creer.addEventListener('click',function(e) { 

    if(!(checkPasswordMatch(password,confirm_password) && checkEmail(login) && validPassword(password) && checkRequired(nom) && checkRequired(prenom))){
        e.preventDefault(); 
     } 
  }); 
imgInp.addEventListener('change', ()=> {
   const [file] = imgInp.files;
    if (file) {
        img_default.src = URL.createObjectURL(file);
      }
}); 
/* var email = document.getElementById("mail");

email.addEventListener("keyup", function (event) {
  if(email.validity.typeMismatch) {
    email.setCustomValidity("J'attend un e-mail, mon cher !");
  } else {
    email.setCustomValidity("");
  }
});
 */


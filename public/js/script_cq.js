const form2=document.getElementById("form2");
const div_form= document.getElementById("div_form");
const selec = document.getElementById("selec");
const ajout = document.getElementById("ajout");
const ajout_reponses = document.getElementById('ajout_reponses');
let i =1; 
const enregistrer=document.getElementById("enregistrer");
myError=document.getElementById("error");
let nb_p =document.getElementById('nb_p');
var inputText = document.createElement('input')

 const ques=document.getElementById('ques');
 ajout.addEventListener('click',()=>{
    if(selec.value==='multiple'){
        var div = document.createElement('div');
        div.setAttribute('id','reponses')
        var label = document.createElement('label');
        label.innerText= `Reponse ${i}`;
        var inputText = document.createElement('input')
        inputText.setAttribute("type","text");
        inputText.setAttribute("id","text");
        inputText.setAttribute('name',`reponse${i}`);
        var Checkbox = document.createElement('input');
        Checkbox.setAttribute("type","checkbox");
        Checkbox.setAttribute("name",`correcte_rep${i}`);
        var image = document.createElement('img');
        image.setAttribute('src','img/ic-supprimer.png');
        div.appendChild(label);
        div.appendChild(inputText);
        div.appendChild(Checkbox);
        div.appendChild(image);
        ajout_reponses.appendChild(div);
        inputText.addEventListener('input',()=>{
            Checkbox.value=inputText.value;
        })   
    }
    if(selec.value==='simple'){
        var div = document.createElement('div');
        div.setAttribute('id','reponse')
        var label = document.createElement('label');
        label.innerText= `Reponse ${i}`;
        var inputText = document.createElement('input')
        inputText.setAttribute("type","text");
        inputText.setAttribute("id","text");
        inputText.setAttribute('name',`reponse${i}`);
        var Radio = document.createElement('input');
        Radio.setAttribute("type","radio");
        Radio.setAttribute("name","correcte_rep");
        var image = document.createElement('img');
        image.setAttribute('src','img/ic-supprimer.png');
        div.appendChild(label);
        div.appendChild(inputText);
        div.appendChild(Radio);
        div.appendChild(image);
        ajout_reponses.appendChild(div);
        inputText.addEventListener('input',()=>{
            Radio.value = inputText.value;
        })
    }
    image.addEventListener('click',()=>{
        image.parentElement.remove();
    })
    selec.addEventListener('change',()=>{
        ajout_reponses.innerHTML="";
      i=1;
    });
     i++;
    });
    selec.addEventListener('change',()=>{
        if(selec.value==='text'){
            var div = document.createElement('div');
            div.setAttribute('id','tex')
            var label = document.createElement('label');
            label.innerText= `Reponse ${i}`;
            var inputTexarea = document.createElement('input')
            inputTexarea.setAttribute("type","text");
            inputTexarea.setAttribute('name','reponse');
            inputTexarea.setAttribute("id","area");
            div.appendChild(label);
            div.appendChild(inputTexarea);
            ajout_reponses.appendChild(div);  
            
       }else{
        ajout_reponses.innerHTML="";
       }
    });
function increment() {
    if(nb_p.value>=0){
    nb_p.value++;
    }
}
function decrement() {
    if(nb_p.value>1){
    nb_p.value--;
    }
}
function check(input ) {
    if(nb_p.value<0){
    small.innerText=`La valeur ${nb_p.value} est inferieur à 1
                    Veuillez saisir un nombre positif`;     
    } 
}
form2.addEventListener('submit',function(e){
    let selec = document.getElementById("selec");
    let nb_p =document.getElementById('nb_p');
    let question=document.getElementById("question"); 
    if(nb_p.value==""){
        myEr=document.getElementById("er");
            myEr.innerHTML="Champ obligatoire ";
            myEr.style.color="red";
            e.preventDefault();
           }
    if(isNaN(nb_p.value)){
    myEr=document.getElementById("er");
        myEr.innerHTML="veuiller saisir un nombre ";
        myEr.style.color="red";
        e.preventDefault();
       }if(nb_p.value<1){
        myEr=document.getElementById("er");
            myEr.innerHTML="veuiller saisir un nombre sup à 1  ";
            myEr.style.color="red";
            e.preventDefault();
           }
    if(question.value.trim()=='') {
    myError=document.getElementById("error");
        myError.innerHTML="Question is required ";
        myError.style.color="red";
     e.preventDefault();
    }
    if(selec.value=='simple'){
        let inputArray=document.getElementById ("text");
console.log(inputArray);

    inputArray.forEach(inputText => {
        if(inputText.value==''){

            myErr=document.getElementById("err");
            myErr.innerHTML=` Reponse ${i} is required `;
            myErr.style.color="red";
            e.preventDefault();
                    }
                    i++;
    });
       
   } 
})
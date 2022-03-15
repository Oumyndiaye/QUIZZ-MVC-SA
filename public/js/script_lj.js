const table=document.getElementById("table");
const precedent=document.getElementById("precedent");
const suivant=document.getElementById("suivant");
const tr= table.querySelectorAll("tr");
var first=0;
var numberOfItems = 5;
//-------------function
function showlist(){
    let tableList="";
    for(let i =first;i<first+ numberOfItems;i++){
        if(i<tr.length){
            tableList+=`<tr>
            ${(tr[i].innerHTML)}
            </tr>`;
        }
    }
    table.innerHTML=tableList;
}
showlist();
//-----Evenement
precedent.addEventListener('click',()=>{
first-=numberOfItems;
if(first-=numberOfItems>=0){
    showlist();
}
});
suivant.addEventListener('click',()=>{
first+=numberOfItems;
if (first<tr.length) {
    showlist();
}
});
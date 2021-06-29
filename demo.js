
  const logpopup=document.querySelector(".login");
  window.addEventListener("load",function(){
    showPopup();
  })
  function showPopup(){
const timeLimit=5;
let i=0;
const timer =setInterval(function(){
  i++;
  if(i==timeLimit){
    clearInterval(timer);
    logpopup.classList.add("show");
  }
  console.log(i);
},1000);
}

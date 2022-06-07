   
 

var inpdg = document.querySelector(".inpdg");
var Aimgearr = ["y2qA0M.jpg", "teaching-students-classroom-1920x1080.jpg","20382885.jpg","banner.png","20382900.jpg"];

var  backgroundOption = true;
var  backgroundInterval;
  

  
  
  function randomizeImgs(){
    if(backgroundOption === true ){
      backgroundInterval = setInterval(()=>{
        var  randomNamber = Math.floor(Math.random() * Aimgearr.length);
        inpdg.style.backgroundImage ='url("img/'+ Aimgearr[randomNamber]+'")';
      },2000);
    }
  }
  randomizeImgs();


  
  
  const colorsLi= document.querySelectorAll(".colrs-list li");

  colorsLi.forEach(li => {
  li.addEventListener("click",(e) => {
    document.documentElement.style.setProperty('--min--color',e.target.dataset.color);

  });
  
});

const randomba = document .querySelectorAll(".random-bakground span");

randomba .forEach(span => {
  span.addEventListener("click", (e) => {
    e.target.parentElement.querySelectorAll(".activ").forEach(element => {
      element.classList.remove ("activ");
    });
    e.target.classList.add ("activ");

    if (e.target.dataset.background ==='yes') {
      backgroundOption = true;
      randomizeImgs();


    } else {
      backgroundOption = false;
      clearInterval(backgroundInterval);

    }

  });

});















 
/**
a comments
*/

"use strict";
(function)(){
  var element = document.getElementById("duck");

element.addEventListner("click", function (){
  console.log("Duck clicked");
})


element.addEventListner("mouseover", function (){
  console.log("Moused over");
  element.style.left = element.offsetLeft + 20 + "px";
})


  console.log("Duck ready");
})();

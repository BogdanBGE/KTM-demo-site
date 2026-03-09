document.addEventListener('DOMContentLoaded',function()
{
var enduro =document.getElementById('enduro');
var sport =document.getElementById('sport');
var supermoto =document.getElementById('supermoto');
var duke =document.getElementById('duke');
var rc = document.getElementById('rc');
var brabus =document.getElementById('brabus');
var text = document.getElementById('text');

 function enduroClick(){
text.innerHTML = "2024 KTM 300 EXC HARDENDURO"
 }
 function sportClick(){
  text.innerHTML = "2024 KTM 1290 SUPER DUKE GT"
 }
 function supermotoClick(){
  text.innerHTML = "2024 KTM 690 SMC R"
 }
 function dukeClick(){
  text.innerHTML = "2024 KTM 1390 SUPER DUKE R EVO"
 }
 function rcClick(){
  text.innerHTML = "2023 KTM RC 390 "
 }
 function brabusClick(){
  text.innerHTML = "2024 BRABUS 1300 R MASTERPIECE EDITION"
 }
 enduro.addEventListener('click',enduroClick);
 sport.addEventListener('click',sportClick);
 supermoto.addEventListener('click',supermotoClick);
 duke.addEventListener('click',dukeClick);
 rc.addEventListener('click',rcClick);
 brabus.addEventListener('click',brabusClick);



});



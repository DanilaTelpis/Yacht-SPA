
document.getElementById('hamburger-icon').onclick = function(){
  document.getElementById('hamburger-menu').classList.remove('closed');
  document.getElementById('hamburger-menu').classList.add('open');
  document.querySelector('#hamburger-menu > i').style.right='10px';
}

document.getElementById('x-mark').onclick = function(event){
  event.target.parentNode.classList.remove('open');
  event.target.parentNode.classList.add('closed');
  document.querySelector('#hamburger-menu > i').style.right='-20px';
}
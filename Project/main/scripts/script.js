
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

document.getElementById('main-form-submit').addEventListener('submit', respMess);

function respMess(event){

  let bool = 0;
  
  if (document.getElementById('main-formEmail').value.length < 5 || document.getElementById('main-formEmail').value == ''){
    bool = 0;
  } else if (document.getElementById('main-formTheme').value.length < 11 || document.getElementById('main-formTheme').value.length > 18){
    bool = 0;
  } else {
    bool = 1;
  }

  let div = document.createElement('div');
  div.classList.add('response');

  if (bool == 1){
    div.innerHTML = 'Сообщение отправлено успешно';
    div.style.backgroundColor='green';
  } else {
    div.innerHTML = 'Сообщение не было отправлено';
    div.style.backgroundColor='red';
  }

  div.style.top=`${document.getElementById('form-button').getBoundingClientRect().top + 80}px`;
  div.style.marginLeft=`0px`;
  setTimeout(() => document.getElementById('main-form').append(div), 500); 
  setTimeout(() => div.remove(), 1500);
}




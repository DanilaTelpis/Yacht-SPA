
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

let bool;

function resp(response){
  bool = response;  
}

document.getElementById('form-button').addEventListener('click',respMess);

function respMess(){


  let div = document.createElement('div');
  div.classList.add('response');

  if (bool == 1){
    div.innerHTML = 'Сообщение отправлено успешно';
  } else {
    div.innerHTML = 'Сообщение не было отправлено';
  }

  div.style.top=`${document.getElementById('form-button').getBoundingClientRect().top + 80}px`;
  div.style.marginLeft=`0px`;
  document.getElementById('main-form').append(div); 
  setTimeout(() => div.remove(), 1000);
}




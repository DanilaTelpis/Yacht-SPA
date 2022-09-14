<?php
  session_start();

  function redir(){
    header('Location: index.php');
    exit();
  }
//снос сессий
  unset($_SESSION['']);
  unset($_SESSION['']);
  unset($_SESSION['']);
  unset($_SESSION['']);

  unset($_SESSION['']);

  unset($_SESSION['']);
  unset($_SESSION['']);
  unset($_SESSION['']);
  unset($_SESSION['']);

//удаление спец символов
  $sender = htmlspecialchars(trim($_POST['sender']));
  $recipient = htmlspecialchars(trim($_POST['recipient']));
  $theme = htmlspecialchars(trim($_POST['theme']));
  $mess = htmlspecialchars(trim($_POST['mess']));

//создание сессий
  $_SESSION['sender'] = $sender;
  $_SESSION['recipient'] = $recipient;
  $_SESSION['theme'] = $theme;
  $_SESSION['mess'] = $mess;
  
//проверки адекватности данных и отправление в сучае удачи
  if(strlen(trim($sender))<5 or trim($sender) == ''){
    $_SESSION['sender_email_err'] = 'error';
    redir();
  }
  else if(strlen($theme)<3 or strlen($theme)>60){
    if(strlen($theme)<3){
      $_SESSION['theme_err'] = 'it is too small';
    }
    else if(strlen($theme)>60){
      $_SESSION['theme_err'] = 'it is too big';
    }
    redir();
  }
  else if(strlen($mess)<15){
    $_SESSION['mess_err'] = 'error';
    redir();
  }
  else{
    $_SESSION['success'] = 'your message was sended';
    $theme = '=utf-8?B?' . $theme . '?=';
    $headers = "From: $sender\r\nReaply-to: $sender\r\nContent-type:text/plain; charset=utf-8\r\n";
    mail($recipient, $theme, $mess, $headers);
    redir();
  }

?>
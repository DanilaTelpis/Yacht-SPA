<?php
  session_start();

  function redir(){
    header('Location: index.php');
    exit();
  }
//снос сессий
  unset($_SESSION['sender']);
  unset($_SESSION['phone_num']);
  unset($_SESSION['fio']);

  unset($_SESSION['success']);

  unset($_SESSION['sender_email_err']);
  unset($_SESSION['phone_num_err']);
 

//удаление спец символов
  $sender = htmlspecialchars(trim($_POST['sender']));
  $phone_num = htmlspecialchars(trim($_POST['phone_num']));
  $fio = htmlspecialchars(trim($_POST['fio']));

//создание сессий
  $_SESSION['sender'] = $sender;
  $_SESSION['phone_num'] = $phone_num;
  $_SESSION['fio'] = $fio;
  
//проверки адекватности данных и отправление в сучае удачи
  if(strlen(trim($sender))<5 or trim($sender) == ''){
    $_SESSION['sender_email_err'] = 'error';
    redir();
  }
  else if(strlen(trim($phone_num))<11 or strlen(trim($phone_num)>18)){
    $_SESSION['phone_num_err'] = 'error';
    redir();
  }
  else{
    $_SESSION['success'] = 'Cпасибо за вашу заявку!';

    $recipient = 'katranibiza@gmail.com';

    $theme = 'Заявка';
    $theme = '=utf-8?B?' . $theme . '?=';

    $mess = "Здравсвуйте, меня зовут " + $fio + ". Я хотел бы связаться с вами. Мои контактные данные:\nНомер телефона: " 
    $mess += $phone_num + "\nМоя электронная почта: " + $sender


    $headers = "From: $sender\r\nReaply-to: $sender\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($recipient, $theme, $mess, $headers);
    redir();
  }

?>
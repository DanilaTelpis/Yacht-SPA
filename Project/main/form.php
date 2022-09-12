<?php
  session_start();
?>

<form action="processing.php", method="post">
  <input value='<?php echo $_SESSION['recipient']?>'>
  <!--
    для ввода 
  recipient
  sender
  theme
  mess
  -->
  <div>
    <?php
    /* 
      переменные ошибок
      rec_email_err
      send_email_err
      theme_err
      mess_err
    
    */
      if(array_key_exist('rec_email_err', $_SESSION) == true){
        echo $_SESSION['rec_email_err'];      
      }
    ?>

  </div>
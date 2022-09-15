<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles/style.css" rel="stylesheet">
  <title>Test SPA</title>
  <script src="https://kit.fontawesome.com/1c33034429.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
    session_start();
  ?>

  <header>
      <div id="header-block"></div>
      <span id="header-block-data">
        <img src="images/label.png" alt="Логотип 'Катран Ибица'" title="Логотип 'Катран Ибица'">
        <span class="header-block-data-menu">
          <a href="#main-about">О нас</a>
          <a href="#main-map">Как нас найти</a>
          <a href="#main-form">Связаться с нами</a>
        </span>
        <i class="fa-solid fa-bars" id="hamburger-icon"></i>
        <div>
        <p>+7 (999) 550-65-01</p>
        <p>+7 (900) 152-42-02</p>
        </div>
      </span>
      <h1>Мы занимаемся хранением яхт</h1>
  </header>
  <div id="hamburger-menu" class="closed">
    <i class="fa-solid fa-xmark" id="x-mark"></i>
    <span class="header-block-data-menu-1">
      <a href="#main-about">О нас</a> 
      <a href="#main-map">Как нас найти</a>
      <a href="#main-form">Связаться с нами</a>
    </span>
  </div>
  <main>
    <section id="main-about">
      <div>
        <h2>О нас:</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, doloremque harum ipsa, consectetur earum minima labore rerum excepturi suscipit incidunt dolorem pariatur non sunt nesciunt? Pariatur rem veniam, eligendi deserunt consectetur dolores officiis nostrum, minus, commodi reiciendis a explicabo architecto? Rem nam dolorem nemo aut quisquam quam incidunt eveniet, nihil corrupti sunt amet ducimus, praesentium molestias alias quod veritatis qui.</p>
      </div>
      <h3>Наши преимущества:</h2>
      <span>
        <div class="icon-block">
          <?xml version="1.0" ?><svg id="Layer_1" fill="white" height="150px" style="enable-background:new 0 0 100 100;" version="1.1" viewBox="0 0 100 100" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M64.1,38.1l-30.2,24c-0.6,0.5-0.8,1.5-0.2,2.1c0.3,0.4,0.7,0.6,1.2,0.6c0.3,0,0.7-0.1,0.9-0.3l30.2-24   c0.6-0.5,0.8-1.5,0.2-2.1C65.7,37.7,64.8,37.6,64.1,38.1z"/><path d="M42,48.8c0.4,0,0.8,0,1.2-0.1c4.1-0.6,7-4.5,6.3-8.7c-0.3-2-1.4-3.8-3-5c-1.6-1.2-3.6-1.7-5.6-1.4c-2,0.3-3.8,1.4-5,3   c-1.2,1.6-1.7,3.6-1.4,5.6C35.1,46.1,38.4,48.8,42,48.8z M41.3,36.7c0.2,0,0.5-0.1,0.7-0.1c2.2,0,4.2,1.6,4.5,3.9   c0.4,2.5-1.3,4.8-3.8,5.2c-2.5,0.4-4.8-1.3-5.2-3.8C37.1,39.4,38.9,37.1,41.3,36.7z"/><path d="M58,53.8c-4.2,0-7.6,3.4-7.6,7.6c0,4.2,3.4,7.6,7.6,7.6s7.6-3.4,7.6-7.6C65.5,57.2,62.1,53.8,58,53.8z M58,65.9   c-2.5,0-4.6-2.1-4.6-4.6c0-2.5,2.1-4.6,4.6-4.6s4.6,2.1,4.6,4.6C62.5,63.9,60.5,65.9,58,65.9z"/><path d="M95.4,50.3c0-0.1,0.1-0.3,0.1-0.4c0-4.3-4.5-6.5-8.4-8.4c-2.8-1.4-5.8-2.9-6.6-4.7c-0.8-1.9,0.3-5,1.4-7.9   c1.5-4.1,3-8.3,0.2-11.1c-2.8-2.8-6.8-1.8-10.8-0.9c-2.8,0.6-5.7,1.3-7.6,0.5c-1.9-0.8-3.5-3.3-5-5.7c-2.2-3.4-4.6-7.3-8.8-7.3   c-4.2,0-6.6,3.9-8.7,7.4c-1.5,2.5-3,5-4.9,5.8c-1.9,0.8-4.9,0.1-7.7-0.6c-4-1-8.1-2-10.8,0.7c-2.8,2.8-1.4,7-0.1,11.1   c1,3,1.9,6,1.1,8c-0.8,1.9-3.6,3.3-6.3,4.7c-3.8,2-8.1,4.2-8.1,8.4c0,0.1,0,0.3,0.1,0.4c0,0.1-0.1,0.3-0.1,0.4   c0,4.2,4.3,6.5,8.1,8.4c2.7,1.4,5.5,2.8,6.3,4.7c0.8,1.9-0.2,5-1.1,8c-1.3,4.1-2.7,8.3,0.1,11.1c2.8,2.8,6.9,1.7,10.8,0.7   c2.8-0.7,5.8-1.4,7.7-0.6c1.9,0.8,3.4,3.3,4.9,5.8c2.1,3.5,4.5,7.4,8.7,7.4c4.2,0,6.7-3.9,8.8-7.3c1.5-2.4,3.1-4.9,5-5.7   c2-0.8,4.8-0.2,7.6,0.5c3.9,0.9,8,1.9,10.8-0.9c2.8-2.8,1.3-7-0.2-11.1c-1.1-3-2.2-6-1.4-7.9c0.8-1.9,3.7-3.3,6.6-4.7   c3.9-2,8.4-4.2,8.4-8.4C95.5,50.5,95.4,50.4,95.4,50.3z M85.7,56.4c-3.3,1.7-6.8,3.4-8,6.3c-1.3,3,0.1,6.6,1.3,10.1   c1.2,3.3,2.4,6.5,0.9,7.9c-1.6,1.6-4.7,0.9-8,0.1c-3.3-0.8-6.6-1.5-9.5-0.3c-2.8,1.2-4.6,4-6.3,6.8c-1.9,3-3.7,5.9-6.3,5.9   c-2.5,0-4.3-2.9-6.2-6c-1.7-2.9-3.5-5.8-6.3-7c-2.9-1.2-6.3-0.4-9.6,0.5c-3.3,0.8-6.4,1.6-8,0.1c-1.5-1.5-0.5-4.7,0.6-8   c1.1-3.5,2.3-7.1,1-10c-1.2-2.9-4.5-4.6-7.7-6.2c-3.3-1.7-6.4-3.3-6.4-5.8c0-0.1,0-0.3-0.1-0.4c0-0.1,0.1-0.3,0.1-0.4   c0-2.4,3.1-4,6.4-5.8c3.2-1.6,6.5-3.3,7.7-6.2c1.2-3,0.1-6.6-1-10c-1.1-3.4-2.1-6.6-0.6-8c1.6-1.6,4.7-0.8,8,0.1   c3.3,0.8,6.7,1.7,9.6,0.5c2.8-1.2,4.6-4.1,6.3-7c1.9-3.1,3.6-6,6.2-6c2.6,0,4.4,2.9,6.3,5.9c1.8,2.8,3.6,5.6,6.3,6.8   c2.9,1.2,6.2,0.4,9.5-0.3c3.3-0.8,6.4-1.5,8,0.1c1.5,1.4,0.3,4.6-0.9,7.9c-1.3,3.5-2.6,7.1-1.3,10.1c1.2,2.9,4.7,4.6,8,6.3   c3.5,1.7,6.7,3.4,6.7,5.8c0,0.1,0,0.3,0.1,0.4c0,0.1-0.1,0.3-0.1,0.4C92.5,53,89.2,54.7,85.7,56.4z"/></g></svg>
          <p class="icon-text">Низкие цены</p>
        </div>
        <div class="icon-block">
          <?xml version="1.0" ?><svg data-name="Layer 1" fill="white" height="150px" id="Layer_1" viewBox="0 0 200 200" width="150px" xmlns="http://www.w3.org/2000/svg"><title/><path d="M166.73,40.32a146.82,146.82,0,0,1-30.5-7.5c-12-4.5-22.5-10-28-17l-.5-.5-.5-.5c-.5,0-.5-.5-1-.5s-.5-.5-1-.5-.5-.5-1-.5-.5-.5-1-.5h-6c-.5,0-.5,0-1,.5-.5,0-.5,0-1,.5-.5,0-.5.5-1,.5s-.5.5-1,.5l-.5.5-.5.5c-6,7-16.5,12.5-28,17a176.56,176.56,0,0,1-30.5,7.5,10.23,10.23,0,0,0-9,10c0,25,1.5,53,11,77.5,6.5,16.5,16.5,31.5,30.5,42.5a66.19,66.19,0,0,0,16,10c6.5,3.5,14.5,9,22,6,19-7,37.5-20.5,49-37.5a108.89,108.89,0,0,0,11-21.5c9.5-24.5,11-52.5,11-77.5.5-4.5-3.5-8.5-8.5-9.5Zm-20.5,80.5c-7.5,19.5-21,36-45.5,46-24.5-10-38-26.5-45.5-46-7-18.5-9-40-9.5-62a170.71,170.71,0,0,0,26-7c10-3.5,20.5-8.5,29-15.5,8.5,7,19,12,29,15.5,9,3.5,18.5,5.5,26,7-.5,22-2.5,43.5-9.5,62Zm-49.5-14-20-14.5c-4.5-3-10.5-2.5-14,2-3,4.5-2.5,10.5,2,14l27.5,20c5.5,4,11,1.5,15-3.5,11-13.5,22.5-27,33.5-40.5,3.5-4.5,3-10.5-1.5-14s-10.5-3-14,1.5l-28.5,35Z"/></svg>
          <p class="icon-text">Гарантия качества</p>
        </div>
        <div class="icon-block">
          <?xml version="1.0" ?><svg fill="white" height="150px" viewBox="0 0 1792 1792" width="150px" xmlns="http://www.w3.org/2000/svg"><path d="M1600 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5t-57.5-12.5-47.5-14.5-55.5-20.5-49-18q-98-35-175-83-128-79-264.5-215.5t-215.5-264.5q-48-77-83-175-3-9-18-49t-20.5-55.5-14.5-47.5-12.5-57.5-3.5-52.5q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"/></svg>
          <p class="icon-text">Поддержка 24/7</p>
        </div>
      </span>
    </section>
    <section id="main-map">
      <h2>Как до нас добраться:</h2>
      <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/1/moscow-and-moscow-oblast/house/derevnya_sorokino_26/Z04YcAJmSEYAQFtvfXV5dHRhYg==/?ll=37.655533%2C55.985709&utm_medium=mapframe&utm_source=maps&z=18.17" style="color:#eee;font-size:12px;position:absolute;top:14px;">Деревня Сорокино, 26 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUVFFbydB" width="860" height="600" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </section>
    <section id="main-form">
      <div id="main-form-background-image"></div>
      <h2>Форма для связи с нами:</h2>
      <form type="submit" id="main-form-submit" action="processing.php" method="POST">
        <input type="email" name="Email" id="main-formEmail" placeholder="Укажите ваш email", value='<?php echo $_SESSION['sender']?>' required>
        
        <div>
            <?php
                if(array_key_exists('sender', $_SESSION) == true){
                    echo $_SESSION['sender_email_err'];
                }
            ?>
        </div><br>

        <input type="text" name="Theme" id="main-formTheme" placeholder="Укажите ваш номер тел.", value='<?php echo $_SESSION['phone_num']?>' required>
        
        <div>
            <?php
                if(array_key_exists('phone_num_err', $_SESSION) == true){
                    echo $_SESSION['phone_num_err'];
                }
            ?>
        </div><br>

        <textarea name="MessText" id="main-formMess" placeholder="Введите ваше ФИО", value='<?php echo $_SESSION['fio']?>' required></textarea>
        <button type="submit" form="main-form-submit" formaction="processing.php" formmethod="POST" >Оставить заявку</button>
      </form>
    </section>
  </main>
  <footer>
    <p id="footer-creators">Создатели сайта: RoastedPikachu(GitHub) и DanilaTelpis(GitHub)</p>
    <p id="footer-data">2022г. Москва</p>
  </footer>
  <script src="scripts/script.js"></script>
</body>
</html>
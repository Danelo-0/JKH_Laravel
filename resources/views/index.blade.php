<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
   <title>ЖКХ</title>
</head>

<body>
   <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
         <div class="col-md-3 mb-2 mb-md-0">
            <div class="d-inline-flex link-body-emphasis text-decoration-none">
               <img class="bi me-2" width="40" height="32" src="../img/logo.png" alt="Картинка отсутствует">
               <span class="fs-4">Коммунальные услуги</span>
            </div>
         </div>

         <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="/" class="nav-link px-2">Главная</a></li>
            <li><a href="/pages/rates.php" class="nav-link px-2">Тарифы</a></li>
            <li><a href="/pages/company.php" class="nav-link px-2">О компании</a></li>
            <li><a href="/pages/faq.php" class="nav-link px-2">Вопрос-ответ</a></li>
         </ul>

         <div class="col-md-3 text-end">
         <!--     <?php //if ($_COOKIE == null) : ?>

               <a class='btn btn-outline-primary me-2' role="button" aria-disabled="true" href="/pages/auth.php">Войти</a>
               <a class='btn btn-primary' role="button" aria-disabled="true" href="/pages/registration.php">Зарегистрироваться</a>
           <?php //else : ?>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?php //echo $_COOKIE['user'];?></button>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="/pages/profile.php">Личный кабинет</a></li>
                     <li><a class="dropdown-item" href="/">На главную</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="/database/logout.php" style = 'color: red;'>Выйти из аккаунта</a></li>
                  </ul>
               </div>
            <?php //endif; ?> -->

         </div>
      </header>
   </div>
<!-- HEADER -->

<main>
   <div class="container">
      <div class="row featurette">
         <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Назначение сайта. <span class="text-body-secondary">Это важная информация.</span></h2>
            <p class="lead">Данный сайт предназначен для жителей г.п. Приобья, чтобы они могли удобно и с комфортом узнать о нужной им информация связанной с комунальными услугами.</p>
         </div>
         <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./img/img1.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
         </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
         <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Удобно и понятно. <span class="text-body-secondary">Убедитесь сами.</span></h2>
            <p class="lead">На данном сайте вы можете узнать о тарифах ЖКХ, подробную информацию о компании, получить ответы на популярные вопросы, найти контакты, а так же заказать нужную вам услугу.</p>
         </div>
         <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./img/img2.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
         </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
         <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Услуги достпуные жителям. <span class="text-body-secondary">Не нужно ждать очереди!</span></h2>
            <p class="lead">Вы можете заказать смену счётчиков, проведение сантехники, подключение отопления и электричества, ремонт, связаный с коммунальны обеспечением граждан.</p>
         </div>
         <div class="col-md-5">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./img/img3.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
         </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
         <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Всё для вас, дорогие жители</h2>
            <p class="lead">Пользутесь нашим сайтом и сообщайте нам о добавление нужного вам функционала</p>
         </div>
         <div class="col-md-5 order-md-1">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./img/img4.jpg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
         </div>
      </div>
   </div>
</main>
<!-- FOOTER -->
<div class="container">
   <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
      <div class="col mb-3">
         <div href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
            <img class="bi me-2" width="40" height="40" src="../img/logo.png" alt="Картинка отсутствует">
         </div>
         <p class="text-body-secondary">© <?php echo date("Y"); ?> Комунальные услуги</p>
         <p class="text-body-secondary">Номер телефона: 33-0-91</p>
         <p class="text-body-secondary">Почта: mp.oks@mail.ru</p>
         <p class="text-body-secondary">Адрес: 628126, пер. Телевизионный д.2, г.п. Приобье, Октябрьский район, Ханты-Мансийский автономный округ – Югра</p>
         <p class="text-body-secondary">Часы работы: 08:00-17:00</p>
      </div>

      <div class="col mb-3">

      </div>

      <div class="col mb-3">
        
      </div>

      <div class="col mb-3">
        
      </div>

      <div class="col mb-3">
         <h5>Меню</h5>
         <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-body-secondary">Главная</a></li>
            <li class="nav-item mb-2"><a href="/pages/rates.php" class="nav-link p-0 text-body-secondary">Тарифы</a></li>
            <li class="nav-item mb-2"><a href="/pages/company.php" class="nav-link p-0 text-body-secondary">О компании</a></li>
            <li class="nav-item mb-2"><a href="/pages/faq.php" class="nav-link p-0 text-body-secondary">Вопрос-ответ</a></li>
         </ul>
      </div>
   </footer>
</div>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/bootstrap.css">
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
            <?php if ($_COOKIE == null) : ?>

               <a class='btn btn-outline-primary me-2' role="button" aria-disabled="true" href="/pages/auth.php">Войти</a>
               <a class='btn btn-primary' role="button" aria-disabled="true" href="/pages/registration.php">Зарегистрироваться</a>
            <?php else : ?>
               <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_COOKIE['user'];?></button>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="/pages/profile.php">Личный кабинет</a></li>
                     <li><a class="dropdown-item" href="/">На главную</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="/database/logout.php" style = 'color: red;'>Выйти из аккаунта</a></li>
                  </ul>
               </div>
            <?php endif; ?>
         </div>
      </header>
   </div>
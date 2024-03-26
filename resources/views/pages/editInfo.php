<!-- HEADER AND CONNECTDB -->
<?php require('../layots/header.php');
require('../database/connectDB.php'); ?>
<section>
   <div class="container py-5">

      <div class="row">
         <div class="col-lg-4">
            <div class="card mb-4">
               <div class="card-body">
               <section class="w-100 p-4 d-flex justify-content-center pb-4">
                  <form style="width: 22rem;" data-gtm-form-interact-id="0" method="post" action="#">
                     <p class="h4 mb-4">Измените информацию о себе</p>

                     <?php
                     $item = new ConnectDB();
                     $conn = $item->connect();
                     $item->edit();
                     $id = $_COOKIE['id_user'];
                     $sql = "SELECT * FROM `Personal_Info` WHERE `id_user` = $id";
                     $list = $conn->query($sql)->fetch_object();
                     if (isset($_POST['done'])) {

                        $surname = trim($_POST['Surname']);
                        $name = trim($_POST['Name']);
                        $patronymic = trim($_POST['Patronymic']);
                        $passport = str_replace(' ', '', trim($_POST['passport']));
                        $tel = str_replace(' ', '', trim($_POST['Tel']));
                        $INN = str_replace(' ', '', trim($_POST['INN']));
                        $SNILS = str_replace(' ', '', trim($_POST['SNILS']));
                        $id = $_COOKIE['id_user'];
                        $surnameChek = strpos($surname, " ");
                        $nameChek = strpos($name, " ");
                        $patronymicChek = strpos($patronymic, " ");
                     }
                     ?>

                     <div class="form-outline mb-4">
                        <input type="text" name='Surname' class="form-control " value="<?php  echo isset($surname) ? htmlspecialchars($surname ) : $list->Surname; ?>">
                        <label class="form-label" for="form2Example1" style="margin-left: 0px;">Фамилия</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='Name' class="form-control" value="<?php echo isset($name) ? htmlspecialchars($name) : $list->Name; ?>">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Имя</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='Patronymic' class="form-control" value="<?php echo isset($patronymic) ? htmlspecialchars($patronymic) : $list->Patronymic; ?>">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Отчество</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='Tel' class="form-control" value="<?php echo isset($tel) ? htmlspecialchars($tel) : $list->Tel; ?>">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Телефон</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='passport' class="form-control" value="<?php echo isset($passport) ? htmlspecialchars($passport) : $list->passport; ?>">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Серия и номер паспорта (10 цифр)</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='INN' class="form-control" value="<?php echo isset($INN) ? htmlspecialchars($INN) : $list->INN; ?>">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">ИНН (10 или 12 цифр)</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='SNILS' class="form-control" value="<?php echo isset($SNILS) ? htmlspecialchars($SNILS) : $list->SNILS; ?>">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">СНИЛС (11 цифр)</label>
                     </div>

                     <input name="done" type="submit" class="btn btn-primary btn-block mb-4" style="width:100%" value="Изменить">
                     <a class='btn btn-outline-primary btn-block mb-4' role="button" aria-disabled="true" href="/pages/profile.php">Назад</a>
                  </form>
               </section>
               </div>
            </div>
         </div>

         <div class="col-lg-8">
            <div class="card mb-4">
               <div class="card-body">
                  <?php
                  $FIO = "$list->Surname" . " " . "$list->Name" . " " . "$list->Patronymic";
                  ?>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">ФИО</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php if ($list->Surname != null || $list->Name != null || $list->Patronymic != null) echo $FIO;
                        else echo 'Данные отсутствуют'; ?></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Телефон</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php if ($list->Tel != null) echo "+7" . " " . "(" . $list->Tel[1], $list->Tel[2], $list->Tel[3] . ")" . " " . $list->Tel[4], $list->Tel[5], $list->Tel[6] . "-" . $list->Tel[7], $list->Tel[8] . "-" . $list->Tel[9], $list->Tel[10];
                        else echo 'Данные отсутствуют'; ?></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Серия и номер паспорта</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php if ($list->passport != null) echo $list->passport[0], $list->passport[1], $list->passport[2], $list->passport[3] . " " . $list->passport[4], $list->passport[5], $list->passport[6], $list->passport[7], $list->passport[8], $list->passport[9];
                        else echo 'Данные отсутствуют'; ?></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">ИНН</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php if ($list->INN != null) echo $list->INN;
                        else echo 'Данные отсутствуют'; ?></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">СНИЛС</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"><?php if ($list->SNILS != null) echo $list->SNILS[0], $list->SNILS[1], $list->SNILS[2] . "-" . $list->SNILS[3], $list->SNILS[4], $list->SNILS[5] . "-" . $list->SNILS[6], $list->SNILS[7], $list->SNILS[8] . " " . $list->SNILS[9], $list->SNILS[10];
                        else echo 'Данные отсутствуют'; ?></p>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>
<!-- FOOTER -->
<?php require('../layots/footer.php'); ?>
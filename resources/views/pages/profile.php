<!-- HEADER -->
<?php require('../layots/header.php');
require('../database/connectDB.php'); ?>

<section>
   <div class="container py-5">

      <div class="row">
         <div class="col-lg-4">
            <div class="card mb-4">
               <div class="card-body text-center">
                  <h5 class="my-3"><?php echo $_COOKIE['user']; ?></h5>
                  <p class="text-muted mb-4">Ваш личный кабинет на сайте "Коммунальные услуги"</p>
                  <div class="d-flex justify-content-center mb-2">
                     <a class='btn btn-primary' role="button" aria-disabled="true" href="/pages/editInfo.php">Добавить или изменить информацию о вас</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-lg-8">
            <div class="card mb-4">
               <div class="card-body">
                  <?php
                  $item = new ConnectDB();
                  $conn = $item->connect();
                  $id = $_COOKIE['id_user'];
                  $sql = "SELECT * FROM `Personal_Info` WHERE `id_user` = $id";
                  $list = $conn->query($sql)->fetch_object();
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

            <div class="col-lg">
               <div class="card mb-4">
                  <div class="card-body">
                     <section class="w-100 p-4 d-flex justify-content-center pb-4">
                        <form style="width: 40rem;" data-gtm-form-interact-id="0" method="post" action="#">
                           <p class="h4 mb-4">Отправить заявку</p>

                           <?php
                           $item = new ConnectDB();
                           $conn = $item->sendMesseng();
                           if (isset($_POST['done'])) {
                              $address = trim($_POST['address']);
                              $tel = str_replace(' ', '', trim($_POST['tel']));
                              $messeng = trim($_POST['messeng']);
                           }
                           ?>

                           <div class="form-outline mb-4">
                              <input type="text" name='address' class="form-control " value="<?php echo isset($address) ? htmlspecialchars($address) : ''; ?>">
                              <label class="form-label" style="margin-left: 0px;">Адрес</label>
                           </div>

                           <div class="form-outline mb-4">
                              <input type="text" name='tel' class="form-control" value="<?php echo isset($tel) ? htmlspecialchars($tel) : ''; ?>">
                              <label class="form-label" style="margin-left: 0px;">Номер телефона</label>
                           </div>

                           <div class="form-outline mb-4">
                              <select class="form-select" aria-label=".form-select-sm example" name="selectMesseng">
                                 <option selected value="Жалоба">Жалоба</option>
                                 <option value="Пожелание">Пожелание</option>
                                 <option value="Сантехника">Сантехника</option>
                                 <option value="Газообеспечение">Газообеспечение</option>
                                 <option value="Ремонт">Ремонт</option>
                              </select>
                              <label class="form-label" style="margin-left: 0px;">Вид заявки</label>
                           </div>

                           <div class="form-outline mb-4">
                              <textarea class="form-control" rows="3" name="messeng"><?php echo isset($messeng) ? htmlspecialchars($messeng) : ''; ?></textarea>
                              <label class="form-label" style="margin-left: 0px;">Сообщение</label>
                           </div>

                           <input name="done" type="submit" class="btn btn-primary btn-block mb-4" style="width:100%" value="Отправить">
                        </form>
                     </section>
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
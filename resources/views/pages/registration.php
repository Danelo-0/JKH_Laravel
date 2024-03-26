<!-- HEADER AND CONNECTDB -->
<?php require('../layots/header.php');
require('../database/connectDB.php'); ?>

<div class='container'>

   <div class="bg-white border rounded-5">

      <section class="w-100 p-4 d-flex justify-content-center pb-4">
         
         <form style="width: 22rem;" data-gtm-form-interact-id="0" method="post" action="#">
         <p class="h3">Регистрация</p>
         
            <?php
            $item = new ConnectDB();
            $item->registration();
            if (isset($_POST['done'])) {
            $login = trim($_POST['login']);
            }
            ?>

            <div class="form-outline mb-4">
               <input type="text" name='login' class="form-control" value="<?php echo isset($login) ? htmlspecialchars($login) : ''; ?>">
               <label class="form-label" for="form2Example1" style="margin-left: 0px;">Логин</label>
            </div>

            <div class="form-outline mb-4">
               <input type="password" name='password' class="form-control">
               <label class="form-label" for="form2Example2" style="margin-left: 0px;">Пароль</label>
            </div>

            <div class="form-outline mb-4">
               <input type="password" name='passwordChek' class="form-control">
               <label class="form-label" for="form2Example2" style="margin-left: 0px;">Повторите пароль</label>
            </div>

            <input name="done" type="submit" class="btn btn-primary btn-block mb-4" style="width:100%" value="Зарегистрироваться">
          
         </form>
         

      </section>
   </div>

</div>

<!-- FOOTER -->
<?php require('../layots/footer.php'); ?>
<!-- HEADER -->
@extends('layots.main_layots')
@section('content')
<section>
   <div class="container py-5">

      <div class="row">
         <div class="col-lg-4">
            <div class="card mb-4">
               <div class="card-body text-center">
                  <h5 class="my-3"></h5>
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
                  
      
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">ФИО</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">{{$user->login}}</p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Телефон</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Серия и номер паспорта</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">ИНН</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"></p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">СНИЛС</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0"></p>
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

                           

                           <div class="form-outline mb-4">
                              <input type="text" name='address' class="form-control " value="">
                              <label class="form-label" style="margin-left: 0px;">Адрес</label>
                           </div>

                           <div class="form-outline mb-4">
                              <input type="text" name='tel' class="form-control" value="">
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
                              <textarea class="form-control" rows="3" name="messeng"></textarea>
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
@endsection
<!-- HEADER AND CONNECTDB -->
@extends('layots.main_layots')
@section('content')
<section>
   <div class="container py-5">

      <div class="row">
         <div class="col-lg-4">
            <div class="card mb-4">
               <div class="card-body">
                  <form style="width: 22rem;" data-gtm-form-interact-id="0" method="post" action="{{ route('editinfo.store') }}">
                  @csrf
                     <p class="h4 mb-4">Измените информацию о себе</p>

                    

                     <div class="form-outline mb-4">
                        <input type="text" name='surname' class="form-control " value="">
                        <label class="form-label" for="form2Example1" style="margin-left: 0px;">Фамилия</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='name' class="form-control" value="">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Имя</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='middle_name' class="form-control" value="">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Отчество</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='phone' class="form-control" value="">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Телефон</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='passport' class="form-control" value="">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">Серия и номер паспорта (10 цифр)</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='inn' class="form-control" value="">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">ИНН (10 или 12 цифр)</label>
                     </div>

                     <div class="form-outline mb-4">
                        <input type="text" name='snils' class="form-control" value="">
                        <label class="form-label" for="form2Example2" style="margin-left: 0px;">СНИЛС (11 цифр)</label>
                     </div>

                     <input name="done" type="submit" class="btn btn-primary btn-block mb-4" style="width:100%" value="Изменить">
                     <a class='btn btn-outline-primary btn-block mb-4' role="button" aria-disabled="true" href="/pages/profile.php">Назад</a>
                  </form>

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
                        <p class="text-muted mb-0"></p>
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

         </div>
      </div>
   </div>
</section>
<!-- FOOTER -->
@endsection
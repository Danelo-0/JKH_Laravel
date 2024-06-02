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
                  <p class="text-muted mb-4">Ваш личный кабинет администрации на сайте "Коммунальные услуги"</p>
                  <div class="d-flex justify-content-center mb-2">
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="card mb-4">
               <div class="card-body">
                  <h5 class="my-3 text-center">Отправленые заявки</h5>
                  @foreach ($messages as $message)
                  <div class="card mb-3">
                     <div class="card-body">
                        <h5 class="card-title text-center">{{ $message->type }}</h5>
                        <p class="card-text-start">Адресс: {{ $message->address }}</p>
                        <p class="card-text-start">Телефон: {{ $message->phone }}</p>
                        <p class="card-text-start">Сообщений: {{ $message->message }}</p>
                        <p class="card-text-start">Статус: {{ $message->status }}</p>
                        <div class="d-flex justify-content-center mb-2">
                           <a class='btn btn-success' role="button" aria-disabled="true" href="">Обработать заявку</a>
                        </div>
                        <div class="d-flex justify-content-center mb-2">
                           <a class='btn btn-danger' role="button" aria-disabled="true" href="">Отклонить</a>
                        </div>
                     </div>
                  </div>
                  @endforeach

               </div>
            </div>
         </div>
      </div>

   </div>


</section>

<!-- FOOTER -->
@endsection
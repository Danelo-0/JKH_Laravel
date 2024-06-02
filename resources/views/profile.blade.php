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
                     <a class='btn btn-primary' role="button" aria-disabled="true" href="{{ route('editinfo.show') }}">Добавить или изменить информацию о вас</a>
                  </div>
               </div>
            </div>

            <div class="list-group">
               <div class="list-group-item list-group-item-action active" aria-current="true">Ваши заявки</div>
               @foreach($user->messages as $message)
               <a href="#" class="list-group-item list-group-item-action">
                  <div class="conteiner">
                     <div class="row">
                        <div class="col text-left">
                           <div class="conteiner p-2" ; style="font-size: 10pt">
                              {{ $message->type }}
                           </div>
                        </div>
                        <div class="col text-left">
                           <div class="conteiner p-2" ; style="font-size: 10pt">
                              {{ $message->created_at->toDateString() }}
                           </div>
                        </div>
                        <div class="col-sm-auto text-end">
                           @switch($message->status)

                           @case('В обработке')
                           <div class="conteiner p-2 text-bg-warning text-light border rounded-3" ; style="font-size: 10pt">
                              {{ $message->status }}
                              @break

                              @case('Отклонено')
                              <div class="conteiner p-2 text-bg-danger text-light border rounded-3" ; style="font-size: 10pt">
                                 {{ $message->status }}
                                 @break

                                 @case('Обработана')
                                 <div class="conteiner p-2 text-bg-success text-light border rounded-3" ; style="font-size: 10pt">
                                    {{ $message->status }}
                                    @break
                                    @endswitch
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </a>
               @endforeach
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
                        <p class="text-muted mb-0">
                           @if($user->userInfo->name == null && $user->userInfo->surname == null && $user->userInfo->middle_name == null)
                           Данные о пользователе отсутствуют
                           @else
                           {{$user->userInfo->name}} {{$user->userInfo->surname}} {{$user->userInfo->middle_name}}
                           @endif
                        </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Телефон</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">
                           @if($user->userInfo->phone == null)
                           Данные о пользователе отсутствуют
                           @else
                           {{$user->userInfo->phone}}
                           @endif
                        </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Серия и номер паспорта</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">
                           @if($user->userInfo->passport == null)
                           Данные о пользователе отсутствуют
                           @else
                           {{$user->userInfo->passport}}
                           @endif
                        </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">ИНН</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">
                           @if($user->userInfo->inn == null)
                           Данные о пользователе отсутствуют
                           @else
                           {{$user->userInfo->inn}}
                           @endif
                        </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">СНИЛС</p>
                     </div>
                     <div class="col-sm-9">
                        <p class="text-muted mb-0">
                           @if($user->userInfo->snils == null)
                           Данные о пользователе отсутствуют
                           @else
                           {{$user->userInfo->snils}}
                           @endif
                        </p>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-sm-3">
                        <p class="mb-0">Задолжность</p>
                     </div>
                     <div class="col-sm-4">
                        @if($user->userInfo->credit > 0)
                        <p class=" mb-0 text-danger"> {{$user->userInfo->credit}} рублей </p>
                        @else
                        <p class=" mb-0 text-success"> {{$user->userInfo->credit}} рублей </p>
                        @endif
                     </div>
                     <div class="col-sm-5 text-left d-grid gap-2">
                        @if($user->userInfo->credit > 0)
                        <a class='btn btn-primary' role="button" aria-disabled="true" href="#">Оплатить</a>
                        @else
                        <a class='btn btn-primary disabled' role="button" aria-disabled="true" href="#">Оплатить</a>
                        @endif
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-lg">
               <div class="card mb-4">
                  <div class="card-body">
                     <section class="w-100 p-4 d-flex justify-content-center pb-4">
                        <form style="width: 40rem;" data-gtm-form-interact-id="0" method="post" action="{{ route('message.store') }}">
                           @csrf
                           <p class="h4 mb-4">Отправить заявку</p>

                           <div class="form-outline mb-4">
                              @error('address')
                              <p style='color:red'>{{$message}}</p>
                              @enderror
                              <input type="text" name='address' class="form-control " value="">
                              <label class="form-label" style="margin-left: 0px;">Адрес</label>
                           </div>

                           <div class="form-outline mb-4">
                              @error('phone')
                              <p style='color:red'>{{$message}}</p>
                              @enderror
                              <input type="text" name='phone' class="form-control" value="">
                              <label class="form-label" style="margin-left: 0px;">Номер телефона</label>
                           </div>

                           <div class="form-outline mb-4">
                              <select class="form-select" aria-label=".form-select-sm example" name="type">
                                 <option selected value="Жалоба">Жалоба</option>
                                 <option value="Пожелание">Пожелание</option>
                                 <option value="Сантехника">Сантехника</option>
                                 <option value="Газообеспечение">Газообеспечение</option>
                                 <option value="Ремонт">Ремонт</option>
                              </select>
                              <label class="form-label" style="margin-left: 0px;">Вид заявки</label>
                           </div>

                           <div class="form-outline mb-4">
                              @error('message')
                              <p style='color:red'>{{$message}}</p>
                              @enderror
                              <textarea class="form-control" rows="3" name="message"></textarea>
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
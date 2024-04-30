<!-- HEADER AND CONNECTDB -->
@extends('layots.main_layots')
@section('content')

<div class='container'>

   <div class="bg-white border rounded-5">

      <section class="w-100 p-4 d-flex justify-content-center pb-4">
         <form style="width: 22rem;" data-gtm-form-interact-id="0" method="post" action="{{ route('auth.store') }}">
         @csrf
            <p class="h3">Вход</p>

            @error('login')
               <p style='color:red'>{{$message}}</p>
            @enderror
            <div class="form-outline mb-4">
               <input type="text" name='login' class="form-control" value="">
               <label class="form-label" for="form2Example1" style="margin-left: 0px;">Логин</label>
            </div>

            <div class="form-outline mb-4">
               <input type="password" name='password' class="form-control">
               <label class="form-label" for="form2Example2" style="margin-left: 0px;">Пароль</label>
            </div>

            <!-- <div class="row mb-4">
               <div class="col d-flex justify-content-center">
                   Checkbox 
                  <div class="form-check">
                     <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked="" autocompleted="" data-gtm-form-interact-field-id="0">
                     <label class="form-check-label" for="form2Example31">Запомнить меня</label>
                  </div>
               </div>
            </div> -->
            <input name="done" type="submit" class="btn btn-primary btn-block mb-4" style="width:100%" value="Войти">

            <div class="text-center">
               <p>Вы не зарегистрированы? <a href="{{ route('registration.index') }}">Зарегистрироваться</a></p>
            </div>
         </form>
      </section>
   </div>

</div>
<!-- FOOTER -->
@endsection


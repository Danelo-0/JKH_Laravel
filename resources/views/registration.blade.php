<!-- HEADER AND CONNECTDB -->
@extends('layots.main_layots')
@section('content')

<div class='container'>

   <div class="bg-white border rounded-5">

      <section class="w-100 p-4 d-flex justify-content-center pb-4">

         <form style="width: 22rem;" data-gtm-form-interact-id="0" method="post" action="{{ route('registration.store') }}">
            @csrf
            <p class="h3">Регистрация</p>


            <div class="form-outline mb-4">
               @error('login')
               <p style='color:red'>{{$message}}</p>
               @enderror
               <input type="text" name='login' class="form-control" value="">
               <label class="form-label" for="form2Example1" style="margin-left: 0px;">Логин</label>
            </div>

            <div class="form-outline mb-4">
               @error('password')
               <p style='color:red'>{{$message}}</p>
               @enderror
               <input type="password" name='password' class="form-control">
               <label class="form-label" for="form2Example2" style="margin-left: 0px;">Пароль</label>
            </div>

            <div class="form-outline mb-4">
               @error('email')
               <p style='color:red'>{{$message}}</p>
               @enderror
               <input type="password" name='email' class="form-control">
               <label class="form-label" for="form2Example2" style="margin-left: 0px;">Email</label>
            </div>

            <input name="done" type="submit" class="btn btn-primary btn-block mb-4" style="width:100%" value="Зарегистрироваться">

         </form>


      </section>
   </div>

</div>

<!-- FOOTER -->
@endsection
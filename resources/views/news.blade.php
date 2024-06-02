<!-- HEADER -->
@extends('layots.main_layots')
@section('content')
<div class='container'>
   @foreach ($news as $newOne)
      <div class="card mb-3">
         <div class="card-body">
            <h5 class="card-title">{{ $newOne->title }}</h5>
            <p class="card-text">{{ $newOne->content }}</p>
            <p class="card-text"><small class="text-muted">{{ $newOne->created_at }}</small></p>
         </div>
      </div>
   @endforeach
</div>
@endsection
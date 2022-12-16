@extends('layouts.app')

@section('title')
Informasi
@endsection

@section('content')
<!-- Approach -->
<div class="card shadow mb-4 text-center">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary text-uppercase">
          HALO <span class="text-uppercase">"{{ Auth::user()->name }}"</span><br>
          PERHATIKAN INFORMASI SEPUTAR TES BERIKUT! <br>
        </h4>
    </div>
    <div class="card-body">
      <img src="{{ url('img/info.jpeg/') }}" alt="Button" class="float-start"> 
    </div>
</div>
@endsection
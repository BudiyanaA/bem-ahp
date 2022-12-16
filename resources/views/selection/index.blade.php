@extends('layouts.app')

@section('title')
Seleksi
@endsection

@section('content')
<!-- Approach -->
<div class="card shadow mb-4 text-center">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary text-uppercase">
          HALO <span class="text-uppercase">"{{ Auth::user()->name }}"</span><br>
          SILAHKAN MENGIKUTI TAHAPAN TES BERIKUT! <br>
        </h4>
    </div>
    <div class="card-body">
      <div class="row">
        @foreach($process as $p)
        <div class="col-lg-4 mb-4">
          <a href="{{ $p['link'] }}" target="_blank">
            <img src="{{ url('img/button/' . $p['image']) }}" alt="Button" class="float-start"> 
          </a>
        </div>
        @endforeach
      </div>
    </div>
</div>
@endsection
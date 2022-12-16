@extends('layouts.app')

@section('title')
Beranda
@endsection

@section('content')
<!-- Approach -->
<div class="card shadow mb-4 text-center">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary text-uppercase">
          SELAMAT DATANG {{ Auth::user()->name }} <br>
          DI <br>
          REKRUTMEN BEM UPI CIBIRU <br>
        </h4>
    </div>
    <div class="card-body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent leo purus, elementum at sem ut, porttitor congue libero. Praesent elit odio, imperdiet vitae tempor sit amet, aliquet euismod augue. Proin luctus ante quis nunc laoreet ultricies. Praesent vel ante a neque semper elementum commodo et diam. Pellentesque blandit suscipit efficitur. Praesent quis tincidunt diam. Phasellus ligula purus, ultrices non dolor sit amet, pharetra tincidunt diam. Proin sed consectetur elit, quis cursus velit. Sed tristique ipsum ultricies leo pulvinar, in elementum enim viverra.
        </p>
    </div>
</div>
@endsection
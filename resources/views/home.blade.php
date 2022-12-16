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
            Sistem informasi ini digunakan untuk proses seleksi Calon Pengurus Badan Eksekutif Mahasiswa <br>
            Universitas Pendidikan Indonesia Kampus Daerah di Cibiru yang terintegrasi dan menggunakan teknologi Decision Support System dengan Metode Analytical Hierarchy Process
        </p>
    </div>
</div>
@endsection
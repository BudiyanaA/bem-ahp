@extends('layouts.app')

@section('title')
Status
@endsection

@section('content')
<!-- Approach -->
<div class="card shadow mb-4 text-center">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary text-uppercase">
          HALO <span class="text-uppercase">"{{ Auth::user()->name }}"</span><br>
          BERIKUT ADALAH HASIL SELEKSI CALON PENGURUS BEM <br>
        </h4>
    </div>
    <div class="card-body">
      @if($isResult)
      <h4>
        Berdasarkan hasil akumulasi perhitungan, anda dinyatakan:
      </h4>
      <br>
      <h4><b>"{{ $status }}"</b></h4>
      @else
        <h4>
          Pengolahan hasil seleksi Calon Pengurus Badan Eksekutif Mahasiswa Kampus UPI di Cibiru masih dilakukan, 
          silakan kembali dilain waktu.
        </h4>
      @endif
      <br>
      <h4>Terima kasih.</h4>
    </div>
</div>
@endsection
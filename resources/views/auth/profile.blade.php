@extends('layouts.app')

@section('title')
Profile
@endsection

@section('content')

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
                </div>

                <div class="card-body">

                        <h6 class="heading-small text-muted mb-4">User Information</h6>

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Nama</label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', Auth::user()->name) }}" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email</label>
                                        <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', Auth::user()->email) }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Input Administrasi</label>
                                        <a target="_blank" href="https://bit.ly/Seleksi-Administrasi-BEM-UPI-Cibiru" class="btn btn-primary form-control">Isi Formulir</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Input Portofolio</label>
                                        <a target="_blank" href="https://bit.ly/Seleksi-Portofolio-BEM-UPI-Cibiru" class="btn btn-primary form-control">Isi Formulir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Tes Pengetahuan</label>
                                        <a target="_blank" href="https://bit.ly/Tes-Pengetahuan-BEM-UPI-Cibiru" class="btn btn-primary form-control">Isi Formulir</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Tes Psikotest</label>
                                        <a target="_blank" href="https://bit.ly/Psikotest-BEM-UPI-Cibiru" class="btn btn-primary form-control">Isi Formulir</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Tes Wawancara</label>
                                        <a target="_blank" href="https://bit.ly/Interview-Scheduling-BEM-UPI-Cibiru" class="btn btn-primary form-control">Isi Formulir</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>

        </div>

    </div>

@endsection

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #DBDFFD;
        }

        footer {
            background-color: #106466;
            color: #DBDFFD;
            font-size: 13px;
        }

        .opensans-medium {
            font-family: OpenSans-Medium;
            font-size: 17px;
        }

        .opensans-semibold {
            font-family: OpenSans-SemiBold;
        }

        .opensans-bold {
            font-family: OpenSans-Bold;
        }

        .opensans-extrabold {
            font-family: OpenSans-ExtraBold;
            font-size: 25px;
            color: #106466;
        }

        .color-navbar {
            color: #106466;
        }

        .pedia {
            left: 170px;
        }
    </style>

  <link rel="icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon"/>
  <title>Rekrutmen BEM UPI Cibiru</title>
</head>

<body>

    <div class="container mt-3 pt-5 pb-1">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 text-center">
                <img src="{{ url('img/unigen.png') }}" alt="Logo" width="82" height="82">
            </div>
            <div class="col-12 col-md-12 col-lg-12 mt-3 mt-md-0">
                <div class="opensans-extrabold text-center" style="color:#106466">
                    <b>SISTEM INFORMASI <br>
                    PENJURUSAN CALON PENGURUS BEM
                    KAMPUS UPI DI CIBIRU <br></b>
                </div>
            </div>
        </div>
    </div>

<style>
    .montserrat-semibold {
        font-family: Montserrat-SemiBold;
        font-size: 18px;
        color: #000000;
    }

    .montserrat-regular {
        font-family: Montserrat;
        font-size: 15px;
        text-align: left;
    }

    .label {
        font-family: Montserrat-Bold;
        font-size: 16px;
        color: #000000;
        text-align: left;
    }

    .btn-submit {
        background-color: #106466;
        font-family: Montserrat-SemiBold;
        font-size: 16px;
        color: #FFFFFF;
    }

    .border-style {
        border-color: #106466;
        border-width: 2px;
    }
</style>

<div class="container">
    <div class="card mt-3 pt-5 pb-5">
        <div class="card-body text-center pt-1 pb-5">
        <div>Silakan Mendaftar Akun</div>

            <br>
            
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

        <form class="user" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="col-12 col-md-9 col-lg-6 mt-1 mx-auto label">
                <label for="nim" class="form-label">Nama:</label>
                <input type="name" class="form-control border-style" id="email" name="name" value="" required autofocus autocomplete="off">
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 col-md-9 col-lg-6 mt-1 mx-auto label">
                <label for="nim" class="form-label">Email:</label>
                <input type="email" class="form-control border-style" id="email" name="email" value="" required autofocus autocomplete="off">
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 col-md-9 col-lg-6 mt-3 mx-auto label">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control border-style" id="password" name="password" value="" required autocomplete="off">
                <div class="valid-feedback"></div>
            </div>

            <div class="col-12 col-md-9 col-lg-6 mt-3 mx-auto label">
                <label for="password" class="form-label">Konfirmasi Password:</label>
                <input type="password" class="form-control border-style" id="password" name="confirm_password" value="" required autocomplete="off">
                <div class="valid-feedback"></div>
            </div>

            <br>
            <div class="d-grid gap-2 col-6 mt-4 mx-auto">
                <button class="btn btn-primary btn-submit" type="submit">Daftar</button>
            </div>
        </div>
        </form>        
        <div class="d-grid gap-2 col-12 col-md-9 col-lg-6 mt-2 mx-auto">
            <span>Sudah punya akun ? <b><a href="{{ route('login') }}">Masuk</a></b></span>
        </div>
    </div>
</div>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
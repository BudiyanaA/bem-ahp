@extends('layouts.app')

@section('title')
Nilai Bobot
@endsection

@section('content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Data Nilai Bobot</h6>
                            <a href="{{ route('bobot.create') }}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Alternatif</th>
                                            <th>Administrasi</th>
                                            <th>Pengetahuan</th>
                                            <th>Psikotest</th>
                                            <th>Interview</th>
                                            <th>Portofolio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pendaftar A</td>
                                            <td>Berkas Kurang 2</td>
                                            <td>78</td>
                                            <td>80</td>
                                            <td>75</td>
                                            <td>Sesuai dan Jumlah 2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
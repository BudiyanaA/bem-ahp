@extends('layouts.app')

@section('title')
Perhitungan
@endsection

@section('content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Perhitungan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
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
                                            <td><b>Pendaftar A</b></td>
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
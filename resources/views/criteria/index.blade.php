@extends('layouts.app')

@section('title')
Kriteria
@endsection

@section('content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>C01</td>
                                            <td>Administrasi</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>C01</td>
                                            <td>Pengetahuan</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>C01</td>
                                            <td>Psikotest</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>C01</td>
                                            <td>Interview</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>C01</td>
                                            <td>Portofolio</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
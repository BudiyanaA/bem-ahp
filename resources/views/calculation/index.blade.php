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
                                            <th>Total</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>Pendaftar A</b></td>
                                            <td>0.27</td>
                                            <td>0.25</td>
                                            <td>0.52</td>
                                            <td>0.27</td>
                                            <td>0.59</td>
                                            <td>1.90</td>
                                            <td>Tidak Lulus</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
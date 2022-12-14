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
                                        @foreach($calculations as $calculation)
                                            <tr>
                                                <td>{{ $calculation["alternative"] }}</td>
                                                <td>{{ $calculation["administration"] }}</td>
                                                <td>{{ $calculation["knowledge"] }}</td>
                                                <td>{{ $calculation["psikotest"] }}</td>
                                                <td>{{ $calculation["interview"] }}</td>
                                                <td>{{ $calculation["portfolio"] }}</td>
                                                <td>{{ $calculation["total"] }}</td>
                                                <td>{{ $calculation["result"] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
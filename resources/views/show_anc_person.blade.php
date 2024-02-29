@extends('home2')

@section('judul')
    <h1>Rekap Data BPJS</h1>
@endsection

@section('judul2')
    Data BPJS
@endsection

@section('isi')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien BPJS') }}</div>
                    <div>
                        <button class="custom-btn btn-1">Exsel</button>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="mulai">Mulai Tanggal :</label>
                            <input type="date" id="mulai">
                        </div>
                        <div>
                            <label for="sampai">Sampai Tanggal :</label>
                            <input type="date" id="sampai">
                        </div>
                        <div>
                            <form action="" method="get"><button type="submit"
                                    class="bn632-hover bn26">Mulai</button></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien BPJS') }}</div>
                    <div>
                        <button type="button" class="custom-btn btn-1"
                            onclick="location.href='{{ route('export_umum') }}'">Excel</button>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="scrollable-table">
                            <table class="table table1">
                                <caption>Tabel responsive dengan container</caption>
                                <thead>
                                    <tr>
                                        <th>Tanggal Periksa</th>
                                        <th>Keluhan</th>
                                        <th>Usia Kehamilan</th>
                                        <th>LILA</th>
                                        <th>BB</th>
                                        <th>TD</th>
                                        <th>TFU</th>
                                        <th>DJJ</th>
                                        <th>Keterangan</th>
                                        <!-- Add other table headers for the remaining attributes -->
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($anc as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->tanggal_periksa }}</td>
                                            <td>{{ $data->keluhan }}</td>
                                            <td>{{ $data->usia_kehamilan }}</td>
                                            <td>{{ $data->lila }}</td>
                                            <td>{{ $data->bb }}</td>
                                            <td>{{ $data->td }}</td>
                                            <td>{{ $data->tfu }}</td>
                                            <td>{{ $data->djj }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <!-- Add other table cells for the remaining attributes -->
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

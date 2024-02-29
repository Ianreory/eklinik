@extends('home2')

@section('judul')
    <h1>Rekap Data KB</h1>
@endsection

@section('judul2')
    Data KB
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien KB') }}</div>
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
    <div class="table-container bawah">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien KB') }}</div>
                    <div>
                        <button class="custom-btn btn-1">Exsel</button>
                    </div>
                    <div class="tbl">
                        <div class="table-responsive" id="scrollable-table">
                            <table class="table table1">
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">No</th>
                                        <th rowspan="2" style="vertical-align: middle;">tanggal</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nama</th>
                                        <th rowspan="2" style="vertical-align: middle;">Umur</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nama Suami</th>
                                        <th colspan="1">Alamat</th>
                                        <th rowspan="2" style="vertical-align: middle;">Alkon</th>
                                        <th colspan="12">Ulangan KB</th>
                                        <th rowspan="2" style="vertical-align: middle;">Pemeriksaan</th>
                                    </tr>
                                    <tr>
                                        <th>Nik</th>
                                        <th>januari</th>
                                        <th>Februari</th>
                                        <th>Maret</th>
                                        <th>April</th>
                                        <th>Mei</th>
                                        <th>Juni</th>
                                        <th>Juli</th>
                                        <th>Agustus</th>
                                        <th>September</th>
                                        <th>Oktober</th>
                                        <th>November</th>
                                        <th>Desember</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1; // Inisialisasi hitung
                                @endphp
                                <tbody>
                                    @foreach ($kb as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->umur }}</td>
                                            <td>{{ $data->nama_suami }}</td>
                                            <td>{{ $data->nik_alamat }}</td>
                                            <td>{{ $data->alkon }}</td>
                                            <td>{{ $data->januari }}</td>
                                            <td>{{ $data->februari }}</td>
                                            <td>{{ $data->maret }}</td>
                                            <td>{{ $data->april }}</td>
                                            <td>{{ $data->mei }}</td>
                                            <td>{{ $data->juni }}</td>
                                            <td>{{ $data->juli }}</td>
                                            <td>{{ $data->agustus }}</td>
                                            <td>{{ $data->september }}</td>
                                            <td>{{ $data->oktober }}</td>
                                            <td>{{ $data->november }}</td>
                                            <td>{{ $data->desember }}</td>
                                            <td>{{ $data->hasil_pemeriksaan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

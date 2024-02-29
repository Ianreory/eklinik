@extends('home2')

@section('judul')
    <h1>Rekap Data Labor</h1>
@endsection
@section('judul2')
    Data labor
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien labor') }}</div>
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
                    <div class="card-header text-center">{{ __('Pasien Labor') }}</div>
                    <div>
                        <button type="button" class="custom-btn btn-1"
                            onclick="location.href='{{ route('export_umum') }}'">Excel</button>

                    </div>
                    <div class="tbl">
                        <div class="table-responsive" id="scrollable-table">
                            <table class="table table1">
                                <caption>Tabel pasien labor</caption>
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">No</th>
                                        <th rowspan="2" style="vertical-align: middle;">tanggal</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nama Pasien</th>
                                        <th rowspan="2" style="vertical-align: middle;">Umur</th>
                                        <th colspan="1">Alamat</th>
                                        <th colspan="6">Pemeriksaan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <th>Nik</th>
                                        <th>T/D</th>
                                        <th>Pols</th>
                                        <th>GLU</th>
                                        <th>KHD</th>
                                        <th>URID ACID</th>
                                        <th>HB</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1; // Inisialisasi hitung
                                @endphp
                                @foreach ($labor as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->pasien ? $data->pasien->nama : 'Pasien Not Found' }}</td>
                                            <td>{{ $data->umur }}</td>
                                            <td>{{ $data->nik }}</td>
                                            <td>{{ $data->T_D }}</td>
                                            <td>{{ $data->pols }}</td>
                                            <td>{{ $data->glu }}</td>
                                            <td>{{ $data->khd }}</td>
                                            <td>{{ $data->urid }}</td>
                                            <td>{{ $data->hd }}</td>
                                            <td>{{ $data->keterangan }}</td>
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

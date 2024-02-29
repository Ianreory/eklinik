@extends('home2')

@section('judul')
    <h1>Rekap Data Inc</h1>
@endsection
@section('judul2')
    Data Inc
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien INC') }}</div>
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
                    <div class="card-header text-center">{{ __('REGISTRASI PARTUS') }}</div>
                    <div>
                        <button class="custom-btn btn-1">Exsel</button>
                    </div>
                    <div class="tbl">
                        <div class="table-responsive" id="scrollable-table">
                            <table class="table">
                                <caption>Tabel responsive dengan container</caption>
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">NO</th>
                                        <th rowspan="2" style="vertical-align: middle;">TANGGAL</th>
                                        <th rowspan="2" style="vertical-align: middle;">NAMA IBU/NIK</th>
                                        <th rowspan="2" style="vertical-align: middle;">NAMA SUAMI/NIK</th>
                                        <th rowspan="2" style="vertical-align: middle;">ALAMAT</th>
                                        <th rowspan="2" style="vertical-align: middle;">TGL LAHIR</th>
                                        <th rowspan="2" style="vertical-align: middle;">JENIS KELAMIN</th>
                                        <th rowspan="2" style="vertical-align: middle;">BERAT BADAN (BB)</th>
                                        <th rowspan="2" style="vertical-align: middle;">PANJANG BADAN (PB)</th>
                                        <th rowspan="2" style="vertical-align: middle;">LINGKAR KEPALA (LK)</th>
                                        <th rowspan="2" style="vertical-align: middle;">ANAK KE-</th>
                                        <th rowspan="2" style="vertical-align: middle;">JENIS PARTUS</th>
                                        <th rowspan="2" style="vertical-align: middle;">IMD</th>
                                        <th rowspan="2" style="vertical-align: middle;">PENOLONGAN</th>
                                        <th rowspan="2" style="vertical-align: middle;">KETERANGAN</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1; // Inisialisasi hitung
                                @endphp
                                @foreach ($inc as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tanggal }}</td>
                                            <td>{{ $data->pasien ? $data->pasien->nama : 'Pasien Not Found' }}</td>
                                            <td>{{ $data->namasuami }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->tanggal_lahir }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->bb }}</td>
                                            <td>{{ $data->pb }}</td>
                                            <td>{{ $data->lk }}</td>
                                            <td>{{ $data->anak_ke }}</td>
                                            <td>{{ $data->jenis_partus }}</td>
                                            <td>{{ $data->imd }}</td>
                                            <td>{{ $data->penolongan }}</td>
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
    </div>
@endsection

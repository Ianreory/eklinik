@extends('home2')

@section('judul')
    <h1>Rekap Data Persalinan</h1>
@endsection

@section('judul2')
    Persalinan
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien Persalinan') }}</div>
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
                    <div class="card-header text-center">{{ __('Pasien Persalinan') }}</div>
                    <div>
                        <button class="custom-btn btn-1">Exsel</button>
                    </div>
                    <div class="tbl">
                        <div class="table-responsive" id="scrollable-table">

                            <table class="table">
                                <caption>Tabel pasien persalinan</caption>
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">No</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nama Ibu</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nik Ibu</th>
                                        <th rowspan="2" style="vertical-align: middle;">Alamat <br>(Desa/Kelurahan)</th>
                                        <th rowspan="2" style="vertical-align: middle;">Sumber <br>Pembiayaan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Usia Ibu (Tahun)</th>
                                        <th rowspan="2" style="vertical-align: middle;">Status GPA</th>
                                        <th rowspan="2" style="vertical-align: middle;">Jarak Kehamilan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Taksiran <br>Persalinan</th>
                                        <th rowspan="2" style="vertical-align: middle;">TB(cm)</th>
                                        <th rowspan="2" style="vertical-align: middle;">LILA(cm)</th>

                                        <th colspan="2" style="text-align: center;">SKRINING <span>IMUNNISASI TD</span>
                                        </th>
                                        <th rowspan="2" style="vertical-align: middle; ">SKRINING TBC</th>
                                        <th colspan="12" style="text-align: center;">PEMERIKSAAN TAHUN</th>
                                        <th colspan="3" style="text-align: center;">STATUS PERSALINAN</th>
                                        <th rowspan="2" style="vertical-align: middle; ">CARA PERSALINAN</th>
                                    </tr>
                                    <tr>
                                        <th>Status Imunisasi TD</th>
                                        <th>Injeksi Td</th>
                                        <th>Januari</th>
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
                                        <th>Tgl Lahir Hidup <br>/Lahir Mati</th>
                                        <th>&lt;2500 gr</th>
                                        <th>&lt;2500 gr</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($persalinan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_ibu }}</td>
                                            <td>{{ $data->nik_ibu }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->sumber_pembiayaan }}</td>
                                            <td>{{ $data->usia_ibu }}</td>
                                            <td>{{ $data->status_gpa }}</td>
                                            <td>{{ $data->jarak }}</td>
                                            <td>{{ $data->taksiran }}</td>
                                            <td>{{ $data->tb }}</td>
                                            <td>{{ $data->lila }}</td>
                                            <td>{{ $data->status_imunisasi }}</td>
                                            <td>{{ $data->injeksi_td }}</td>
                                            <td>{{ $data->skrining }}</td>
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
                                            <td>{{ $data->tgl_lahir }}</td>
                                            <td>{{ $data->kurang_dari }} &lt;2500 gr</td>
                                            <td>{{ $data->lebih_dari }} &lt;2500 gr</td>
                                            <td>{{ $data->cara_persalinan }}</td>
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

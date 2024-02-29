@extends('home2')

@section('judul')
    <h1>Rekap Data BPJS</h1>
@endsection

@section('judul2')
    Data BPJS
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien BPJS') }}</div>
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
                    <div class="tbl">
                        <div class="table-responsive" id="scrollable-table">
                            <table class="table table1">
                                <caption>Tabel pasien bpjs</caption>
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">No</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nama Pasien</th>
                                        <th rowspan="2" style="vertical-align: middle;">Perawatan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Tanggal</th>
                                        <th rowspan="2" style="vertical-align: middle;">Keluhan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Anamnesa</th>
                                        <th colspan="3">Riwayat Alergi</th>
                                        <th rowspan="2" style="vertical-align: middle;">Prognosa</th>
                                        <th rowspan="2" style="vertical-align: middle;">Terapi Obat</th>
                                        <th rowspan="2" style="vertical-align: middle;">Terapi Non Obat</th>
                                        <th rowspan="2" style="vertical-align: middle;">BMHP</th>
                                        <th rowspan="2" style="vertical-align: middle;">Diagnosa</th>
                                        <th rowspan="2" style="vertical-align: middle;">Kesadaran</th>
                                        <th rowspan="2" style="vertical-align: middle;">Suhu</th>
                                        <th colspan="4">Pemeriksaan Fisik</th>
                                        <th colspan="4">Tekanan darah</th>
                                        <th rowspan="2" style="vertical-align: middle;">Tenaga Medis</th>
                                        <th rowspan="2" style="vertical-align: middle;">Pelayanan Non Kapitasi</th>
                                        <th rowspan="2" style="vertical-align: middle;">Status Pulang</th>
                                    </tr>
                                    <tr>
                                        <th>Makanan</th>
                                        <th>Udara</th>
                                        <th>Obat-Obatan</th>
                                        <th>TB</th>
                                        <th>BB</th>
                                        <th>LP</th>
                                        <th>IMT</th>
                                        <th>Sistole</th>
                                        <th>Diastole</th>
                                        <th>Respiratory Rate</th>
                                        <th>Heart Rate</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1; // Initialize the counter
                                @endphp
                                @foreach ($bpjs as $bpjs)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $bpjs->kunjungan_bpjs ? $bpjs->kunjungan_bpjs->nama : 'Pasien Not Found' }}
                                        </td>
                                        <td>{{ $bpjs->Perawatan }}</td>
                                        <td>{{ $bpjs->tgl_kunjungan }}</td>
                                        <td>{{ $bpjs->keluhan }}</td>
                                        <td>{{ $bpjs->anamnesa }}</td>
                                        <td>{{ $bpjs->makanan }}</td>
                                        <td>{{ $bpjs->udara }}</td>
                                        <td>{{ $bpjs->obat }}</td>
                                        <td>{{ $bpjs->prognosa }}</td>
                                        <td>{{ $bpjs->terapi }}</td>
                                        <td>{{ $bpjs->terapi_non }}</td>
                                        <td>{{ $bpjs->bmhp }}</td>
                                        <td>{{ $bpjs->diagnosis }}</td>
                                        <td>{{ $bpjs->kesadaran }}</td>
                                        <td>{{ $bpjs->suhu }} C</td>
                                        <td>
                                            <nobr>{{ $bpjs->tinggi_badan }} cm</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->berat_badan }} kg</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->lingkar_perut }} cm</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->imt }} kg/m2</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->sistole }} mmHg</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->diastole }} mmHg</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->respiratory_rate }} /minute</nobr>
                                        </td>
                                        <td>
                                            <nobr>{{ $bpjs->heart_rate }} bpm</nobr>
                                        </td>

                                        <td>{{ $bpjs->tenaga_medis }}</td>
                                        <td>{{ $bpjs->pelayanan }}</td>
                                        <td>{{ $bpjs->statuspulang }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

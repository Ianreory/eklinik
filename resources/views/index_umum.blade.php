@extends('home2')

@section('judul')
    <h1>Rekap Data Umum</h1>
@endsection
@section('judul2')
    Data Umum
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="table-container atas">
        <div class="justify-content-center align-items-center d-flex atas1">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien Umum') }}</div>
                    <div class="card-body">
                        <form action="{{ route('export_umum') }}" method="get">
                            <div class="export_tanggal">
                                <div>
                                    <label for="mulai">Mulai Tanggal :</label>
                                    <input type="date" id="mulai" name="mulai">
                                </div>
                                <div>
                                    <label for="sampai">Sampai Tanggal :</label>
                                    <input type="date" id="sampai" name="sampai">
                                </div>
                                <div>
                                    <button type="submit" class="bn632-hover bn26">Mulai</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-container bawah">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('Pasien Umum') }}</div>
                    <div>
                        <button type="button" class="custom-btn btn-1"
                            onclick="location.href='{{ route('export_umum') }}'">Excel</button>
                    </div>
                    <div class="tbl">
                        <div class="table-responsive" id="scrollable-table">
                            <table class="table table1">
                                <caption>Tabel kunjungan umum</caption>
                                <thead>
                                    <tr>
                                        <th rowspan="2" style="vertical-align: middle;">No</th>
                                        <th rowspan="2" style="vertical-align: middle;">Tanggal</th>
                                        <th colspan="2">Nomor</th>
                                        <th rowspan="2" style="vertical-align: middle;">Nama</th>
                                        <th colspan="2">Umur</th>
                                        <th rowspan="2" style="vertical-align: middle;">No Identitas</th>
                                        <th rowspan="2" style="vertical-align: middle;">Alamat</th>
                                        <th rowspan="2" style="vertical-align: middle;">Jenis Kunjungan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Tindak Lanjut Pelayanan</th>
                                        <th rowspan="2" style="vertical-align: middle;">Diagnosis</th>
                                        <th rowspan="2" style="vertical-align: middle;">Terapi Obat</th>
                                        <th rowspan="2" style="vertical-align: middle;">keterangan</th>
                                    </tr>
                                    <tr>
                                        <th>Urut</th>
                                        <th>Documen Medik</th>
                                        <th>L</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1; // Initialize the counter
                                @endphp
                                @foreach ($umum as $umum)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $umum->tanggal }}</td>
                                        <td>{{ $umum->urut }}</td>
                                        <td>{{ $umum->dokumen_medik }}</td>
                                        <td>{{ $umum->pasien ? $umum->pasien->nama : 'Pasien Not Found' }}</td>
                                        <td>{{ $umum->l }}</td>
                                        <td>{{ $umum->p }}</td>
                                        <td>{{ $umum->no_identitas }}</td>
                                        <td>{{ $umum->alamat }}</td>
                                        <td>{{ $umum->jenis_kunjungan }}</td>
                                        <td>{{ $umum->tindak_lanjut }}</td>
                                        <td>{{ $umum->diagnosis }}</td>
                                        <td>{{ $umum->terapi_obat }}</td>
                                        <td>{{ $umum->keterangan }}</td>

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

@extends('home2')

@section('judul')
    <h1>Rekap Data Anc</h1>
@endsection

@section('judul2')
    Data Anc
@endsection

@section('isi')
    <style>
        .anctable th {
            white-space: nowrap;
            /* Menghindari pemutihan teks ke baris baru */
        }
    </style>
    @include('sweetalert::alert')
    <div class="table-container bawah">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-12 cold">
                <div class="card1">
                    <div class="card-header text-center">{{ __('CATATAN PERKEMBANGAN PEMERIKSAAN ANC') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="anc">
                                <div class="anccontain">
                                    <div>
                                        <p> Nama Ibu <span class="isi">:
                                                {{ $anc->pasien ? $anc->pasien->nama : 'Pasien Not Found' }}</span>
                                        </p>
                                    </div>
                                    <!-- ... (bagian lain dari tampilan) -->
                                    <div>
                                        <p>
                                            NIK
                                            <span class="isi1">: {{ $anc->nim }}
                                            </span>
                                        </p>
                                    </div>
                                    <div>
                                        <p>Nama Suami
                                            <span class="isi2">: {{ $anc->nama_suami }}
                                            </span>
                                        </p>
                                    </div>
                                    <div>
                                        <p> NIK
                                            <span class="isi3">: {{ $anc->nik }}
                                            </span>
                                        </p>
                                    </div>
                                    <div>
                                        <p>
                                            No. KK <span class="isi4">: {{ $anc->no_kk }}
                                            </span>
                                        </p>
                                    </div>
                                    <div>
                                        <p>Alamat
                                            <span class="isi5">: {{ $anc->alamat }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p>No. HP
                                            <span class="isi6">: i{{ $anc->no_hp }}</span>
                                        </p>
                                    </div>


                                </div>
                                <div class="anccontain">
                                    <div>
                                        <p>Status Kehamilan
                                            <span class="isi7">: {{ $anc->status }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p>Status Imunisasi TT
                                            <span class="isi8">: {{ $anc->statustt }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p> HPHT
                                            <span class="isi9">: {{ $anc->hpht }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p> TP
                                            <span class="isi10">: {{ $anc->tp }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p> TB
                                            <span class="isi11">: {{ $anc->tb }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p> No BPJS
                                            <span class="isi12">: {{ $anc->no_bpjs }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <p> Nama Ibu Kandung
                                            <span class="isi13">: {{ $anc->namm_ibu }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="exportanc">
                                <div>
                                    <form action="{{ route('create_kunjungananc', $anc) }}" method="get">
                                        <button type="submit" class="btn btn-primary">Tambah Catatan</button>
                                    </form>
                                </div>
                                <div>
                                    <button type="button" class="custom-btn btn-1"
                                        onclick="location.href='{{ route('export_umum') }}'">Excel</button>
                                </div>
                            </div>
                            <table class="table table-bordered table-striped anctable">
                                <caption>Tabel responsive dengan container</caption>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
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
                                @foreach ($kunjungananc as $data)
                                    <tbody>
                                        <tr>
                                            <td class="text-wrap">{{ $no++ }}</td>
                                            <td class="text-wrap">{{ $data->anc_id }}</td>
                                            <td class="text-wrap">{{ $data->tanggal_periksa }}</td>
                                            <td class="text-wrap">{{ $data->keluhan }}</td>
                                            <td class="text-wrap">{{ $data->usia_kehamilan }}</td>
                                            <td class="text-wrap">{{ $data->lila }}</td>
                                            <td class="text-wrap">{{ $data->bb }}</td>
                                            <td class="text-wrap">{{ $data->td }}</td>
                                            <td class="text-wrap">{{ $data->tfu }}</td>
                                            <td class="text-wrap">{{ $data->djj }}</td>
                                            <td class="text-wrap">{{ $data->keterangan }}</td>
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

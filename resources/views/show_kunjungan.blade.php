@extends('home2')

@section('judul')
    <h1>Kunjungan Pasein</h1>
@endsection

@section('judul2')
    Kunjungan
@endsection

@section('isi')
    <div class="table-container">
        <div class="justify-content-center align-items-center d-flex"> <!-- Tambahkan kelas Bootstrap -->
            <div class="col-md-8">
                <div class="card1">
                    <div class="card-header">{{ __('Kunjungan') }}</div>
                    <div class="card-group m-auto">
                        <table border="1" class="table table-dark table-hover table-responsive ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Jenis Kunjungan</th>
                                    <th>Nama Pasien</th>
                                    <th>Nama Bidan</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1; // Inisialisasi hitung
                            @endphp
                            @foreach ($kunjungan as $data)
                                <tbody>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->tgl_kunjungan }}</td>
                                        <td>{{ $data->jenis_kunjungan }}</td>
                                        <td>{{ $data->pasien ? $data->pasien->nama : 'Pasien Not Found' }}</td>
                                        <td>{{ $data->user ? $data->user->name : 'User Not Found' }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

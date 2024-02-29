@extends('home2')

@section('judul')
    <h1>Data Pasien bpjs</h1>
@endsection

@section('judul2')
    Pasien bpjs
    @include('sweetalert::alert')
@endsection

@section('isi')
    <div class="col-md-4 search">
        <div class="form-group">
            <form action="{{ route('searchbpjs') }}" method="get">
                @csrf <!-- Tambahkan csrf token untuk keamanan -->
                <div class="input-group">
                    <input class="form-control" name="search" placeholder="Search...">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pasien BPJS</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <caption>Tabel Pasien BPJS</caption>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>No kartu</th>
                        <th>Nama</th>
                        <th>tgl lahir</th>
                        <th>jenis kelamin</th>
                        @if (Auth::check() && Auth::user()->is_admin)
                            <th>Nomer Telepon</th>
                            <th>Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1; // Initialize the counter
                    @endphp
                    @foreach ($kunjungan_bpjs as $kunjungan_bpjs)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kunjungan_bpjs->id }}</td>
                            <td>{{ $kunjungan_bpjs->tanggal }}</td>
                            <td>{{ $kunjungan_bpjs->no_kartu }}</td>
                            <td>{{ $kunjungan_bpjs->nama }}</td>
                            <td>{{ $kunjungan_bpjs->tgl_lahir }}</td>
                            <td>{{ $kunjungan_bpjs->jenis_kelamin }}</td>
                            @if (Auth::check() && Auth::user()->is_admin)
                                <td>{{ $kunjungan_bpjs->nomer_telepon }}</td>
                                <td>
                                    <div class="tombol">
                                        {{-- Tampilkan tombol Edit dan Delete hanya untuk admin --}}
                                        <form action="{{ route('edit_kunjunganbpjs', $kunjungan_bpjs) }}" method="get">
                                            <button class="btnumum2" type="submit">Edit</button>
                                        </form>
                                        <form action="{{ route('delete_kunjungan_bpjs', $kunjungan_bpjs) }}"
                                            method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btnumum ">Delete</button>
                                        </form>
                                        <form action="{{ route('show_pasienkunjunganbpjs', $kunjungan_bpjs) }}"
                                            method="get">
                                            <button type="submit" class="btnumum1">Lihat Kunjungan</button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

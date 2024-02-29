@extends('home2')

@section('judul')
    <h1>Data Pasien</h1>
@endsection

@section('judul2')
    Pasien
    @include('sweetalert::alert')
@endsection

@section('isi')
    <div class="col-md-4 search">
        <div class="form-group">
            <form action="{{ route('searchumum') }}" method="get">
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
            <h3 class="card-title">Data pasien Umum</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <caption>Tabel pasien umum</caption>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
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
                    @foreach ($pasien as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->tanggal_pendaftaran }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->jenis_kelamin }}</td>
                            <td>{{ $p->alamat }}</td>
                            @if (Auth::check() && Auth::user()->is_admin)
                                <td>{{ $p->nomer_telepon }}</td>
                                <td>
                                    <div class="tombol">
                                        {{-- Tampilkan tombol Edit dan Delete hanya untuk admin --}}
                                        <form action="{{ route('edit_pasien', $p) }}" method="get">
                                            <button class="btnumum1" type="submit">Edit</button>
                                        </form>
                                        <form action="{{ route('delete_pasien', $p) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btnumum ">Delete</button>
                                        </form>
                                        <form action="{{ route('showpasien', $p) }}" method="get">
                                            <button class="btnumum2" type="submit"> Click!
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div>{{ $pasien->links('pagination::bootstrap-5') }}</div> --}}
        </div>
    </div>
@endsection

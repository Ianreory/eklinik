@extends('home2')

@section('judul')
    <h1>Pasien Anc</h1>
@endsection
@section('judul2')
    Data Anc
@endsection

@section('isi')
    @include('sweetalert::alert')
    {{-- <div class="anccontain">
        <div class="ancchil">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            @foreach ($anc as $anc)
                                <h5 class="card-title"> {{ $anc->pasien ? $anc->pasien->nama : 'Pasien Not Found' }}</h5>
                                <p class="card-text">{{ $anc->alamat }}
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pasien Anc</h3>
        </div>
        <div>
            <button class="custom-btn btn-1">Exsel</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <caption>Tabel pasien anc</caption>
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Suami</th>
                        <th class="text-center">Nama Ibu</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                @php
                    $no = 1; // Inisialisasi hitung
                @endphp
                @foreach ($anc as $data)
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">{{ $data->nama_suami }}</td>
                            <td class="text-center">
                                {{ $data->pasien ? $data->pasien->nama : 'Pasien Not Found' }}</td>
                            <td class="text-center">
                                <div class="gridanc">
                                    <div class="tombol">
                                        <form action="{{ route('show_anc_utama', $data) }}" method="get">
                                            <button type="submit" class="btn btn-primary">Lihat
                                                Catatan</button>
                                        </form>
                                    </div>

                                    <div class="tombol">
                                        <form action="{{ route('delete_anc', $data) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger ">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection

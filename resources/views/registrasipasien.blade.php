@extends('home2')

@section('judul')
    <h1>Registrasi Pasien</h1>
@endsection

@section('judul2')
    Register
@endsection

@section('isi')
    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrasi Pasien') }}</div>
                    <div class="formpasien">
                        <form action="{{ route('store_pasien') }}" method="post" autocomplete="off">
                        @csrf
                            <div class="mb-3">
                                <label for="tanggal_pendaftaran" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal_pendaftaran" id="tanggal_pendaftaran"
                                    class="@error('tanggal_pendaftaran') is-invalid @enderror"
                                    value="{{ old('tanggal_pendaftaran') }}">
                                @error('tanggal_pendaftaran')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    class="@error('nama') is-invalid @enderror " value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    class="@error('alamat') is-invalid @enderror " value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nomer_telepon" class="form-label">Nomer Telepon</label>
                                <input type="text" name="nomer_telepon" id="nomer_telepon" class="form-control"
                                    class="@error('nomer_telepon') is-invalid @enderror "
                                    value="{{ old('nomer_telepon') }}">
                                @error('nomer_telepon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('home2')

@section('judul')
    <h1>Edit BPJS</h1>
@endsection

@section('judul2')
    BPJS
@endsection

@section('isi')
    <style>
        .formpasiena {
            margin: 20px;
        }

        .simpan {
            margin-top: 10px;
        }

        .divtgl {
            margin-top: 10px;
        }

        .tanggal {
            margin-left: 70px;
        }

        .tanggal1 {
            margin-left: 28px;
        }
    </style>
    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form edit BPJS') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('update_kunjunganbpjs', $kunjungan_bpjs) }}" method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <br>
                            <div class="mb-6">
                                <label for="tanggal" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal" id="tanggal"
                                    value="{{ old('tanggal', $kunjungan_bpjs->tanggal) }}" class="tanggal">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="no_kartu" class="form-label">No.Kartu BPJS</label>
                                <input type="text" name="no_kartu" id="no_kartu" class="form-control"
                                    value="{{ old('no_kartu', $kunjungan_bpjs->no_kartu) }}">
                                @error('no_kartu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ old('nama', $kunjungan_bpjs->nama) }}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6 divtgl">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir : </label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir"
                                    value="{{ old('tgl_lahir', $kunjungan_bpjs->tgl_lahir) }}" class="tanggal1">
                                @error('tgl_lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option value="Laki-laki"
                                        {{ old('jenis_kelamin', $kunjungan_bpjs->jenis_kelamin) === 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="Perempuan"
                                        {{ old('jenis_kelamin', $kunjungan_bpjs->jenis_kelamin) === 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>

                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="nomer_telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" name="nomer_telepon" id="nomer_telepon" class="form-control"
                                    value="{{ old('nomer_telepon', $kunjungan_bpjs->nomer_telepon) }}">
                                @error('nomer_telepon')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6 simpan">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

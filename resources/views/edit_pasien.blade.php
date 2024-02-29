@extends('home2')

@section('judul')
    <h1>Edit</h1>
@endsection

@section('judul2')
    Edit Pasien
@endsection

@section('isi')
    <style>
        .formpasiena {
            margin: 20px;
        }

        .simpan {
            margin-top: 10px;
            margin-left: 510px;
        }

        .mb-6 {
            margin-bottom: 10px;
        }

        .divtgl {
            margin-top: 10px;
        }

        .editpasien {
            display: grid;
            grid-template-columns: 1fr 1fr;
            margin: 0px 20px;
            margin-left: 120px;
        }
    </style>

    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form edit pasien umum') }}</div>

                    <div class="formpasiena">
                        <form action="{{ route('update_pasien', $pasien) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="editpasien">
                                <div class="mb-6">
                                    <label for="tanggal_pendaftaran" class="form-label">Tanggal</label>
                                </div>
                                <div>
                                    <input type="date" name="tanggal_pendaftaran" id="tanggal_pendaftaran"
                                        value="{{ old('tanggal_pendaftaran', $pasien->tanggal_pendaftaran) }}">
                                </div>
                                <div class="mb-6">
                                    <label for="nama" class="form-label">Nama</label>
                                </div>
                                <div>
                                    <input type="text" name="nama" id="nama"
                                        value="{{ old('nama', $pasien->nama) }}">
                                </div>
                                <div class="mb-6">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                </div>
                                <div>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki</option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div> <input type="text" name="alamat" id="alamat"
                                        value="{{ old('alamat', $pasien->alamat) }}">
                                </div>
                                <div class="mb-6">
                                    <label for="nomer_telepon">Nomer Telepon</label>
                                </div>
                                <div> <input type="text" name="nomer_telepon" id="nomer_telepon"
                                        value="{{ old('nomer_telepon', $pasien->nomer_telepon) }}">
                                </div>
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

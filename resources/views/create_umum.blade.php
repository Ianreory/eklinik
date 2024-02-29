@extends('home2')

@section('judul')
    <h1>Kunjungan Umum</h1>
@endsection

@section('judul2')
    Umum
@endsection

@section('isi')
    <style>
        .formpasiena {
            margin: 20px;
        }
    </style>
    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form Data Umum') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('store_umum', $pasien) }}" method="post" autocomplete="off">
                            @csrf <!-- Laravel CSRF protection -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="urut" class="form-label">Urut</label>
                                <input type="text" name="urut" id="urut" class="form-control"
                                    value="{{ old('urut') }}">
                                @error('urut')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="dokumen_medik" class="form-label">Dokumen Medik</label>
                                <textarea name="dokumen_medik" id="dokumen_medik" class="form-control">{{ old('dokumen_medik') }}</textarea>
                                @error('dokumen_medik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $pasien->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="l" class="form-label">L</label>
                                <input type="text" name="l" id="l" class="form-control"
                                    value="{{ old('l') }}">
                            </div>
                            <div class="mb-3">
                                <label for="p" class="form-label">P</label>
                                <input type="text" name="p" id="p" class="form-control"
                                    value="{{ old('p') }}">
                            </div>
                            <div class="mb-3">
                                <label for="no_identitas" class="form-label">No Identitas</label>
                                <input type="text" name="no_identitas" id="no_identitas" class="form-control"
                                    value="{{ old('no_identitas') }}">
                                @error('no_identitas')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kunjungan" class="form-label">Jenis Kunjungan</label>
                                <select name="jenis_kunjungan" id="jenis_kunjungan" class="form-select">
                                    <option value="Baru">Baru</option>
                                    <option value="Ulang">Ulang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tindak_lanjut" class="form-label">Tindak Lanjut</label>
                                <select name="tindak_lanjut" id="tindak_lanjut" class="form-select">
                                    <option value="Dirawat">Dirawat</option>
                                    <option value="Dirujuk">Dirujuk</option>
                                    <option value="Pulang">Pulang</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="diagnosis" class="form-label">Diagnosis</label>
                                <textarea name="diagnosis" id="diagnosis" class="form-control">{{ old('diagnosis') }}</textarea>
                                @error('diagnosis')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="terapi_obat" class="form-label">Terapi Obat</label>
                                <textarea name="terapi_obat" id="terapi_obat" class="form-control">{{ old('terapi_obat') }}</textarea>
                                @error('terapi_obat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
                                @error('keterangan')
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

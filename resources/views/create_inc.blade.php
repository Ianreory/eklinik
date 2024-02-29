@extends('home2')

@section('judul')
    <h1>Kunjungan Inc</h1>
@endsection

@section('judul2')
    Inc
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
                    <div class="card-header">{{ __('Form Data Inc') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('store_inc', $pasien) }}" method="post" autocomplete="off">
                            @csrf <!-- Laravel CSRF protection -->
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaibu" class="form-label">NAMA IBU/NIK</label>
                                <input type="text" name="namaibu" id="namaibu" class="form-control"
                                    value="{{ $pasien->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="namasuami" class="form-label">NAMA SUAMI/NIK</label>
                                <input type="text" name="namasuami" id="namasuami" class="form-control"
                                    value="{{ old('namasuami') }}">
                                @error('namasuami')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">ALAMAT</label>
                                <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">TGL LAHIR : </label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">JENIS KELAMIN</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="bb" class="form-label">BERAT BADAN</label>
                                <input type="text" name="bb" id="bb" class="form-control"
                                    value="{{ old('bb') }}">
                            </div>
                            <div class="mb-3">
                                <label for="pb" class="form-label">PANJANG BADAN</label>
                                <input type="text" name="pb" id="pb" class="form-control"
                                    value="{{ old('pb') }}">
                            </div>
                            <div class="mb-3">
                                <label for="lk" class="form-label">LINGKAR KEPALA</label>
                                <input type="text" name="lk" id="lk" class="form-control"
                                    value="{{ old('lk') }}">
                            </div>
                            <div class="mb-3">
                                <label for="anak_ke" class="form-label">ANAK KE-</label>
                                <input type="text" name="anak_ke" id="anak_ke" class="form-control"
                                    value="{{ old('anak_ke') }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_partus" class="form-label">JENIS PARTUS</label>
                                <input type="text" name="jenis_partus" id="jenis_partus" class="form-control"
                                    value="{{ old('jenis_partus') }}">
                            </div>
                            <div class="mb-3">
                                <label for="imd" class="form-label">IMD</label>
                                <textarea name="imd" id="imd" class="form-control">{{ old('imd') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="penolongan" class="form-label">PENOLONGAN</label>
                                <textarea name="penolongan" id="penolongan" class="form-control">{{ old('penolongan') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">KETERANGAN</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan') }}"></textarea>
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

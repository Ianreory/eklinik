@extends('home2')

@section('judul')
    <h1>Update Inc</h1>
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
                    <div class="card-header">{{ __('Form Update Inc') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('update_inc', $inc) }}" method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="pasien_id" class="form-label">ID PASIEN</label>
                                <input type="text" name="pasien_id" id="pasien_id" class="form-control"
                                    value="{{ old('pasien_id', $inc->pasien_id) }}">
                                <div>
                                    <p style="color: red">ID Dilarang untuk diubah</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal" id="tanggal"
                                    value="{{ old('tanggal', $inc->tanggal) }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaibu" class="form-label">Nama ibu/nik</label>
                                <input type="text" name="namaibu" id="namaibu" class="form-control"
                                    value="{{ $inc->namaibu }}">
                            </div>
                            <div class="mb-3">
                                <label for="namasuami" class="form-label">Nama suami/nik</label>
                                <input type="text" name="namasuami" id="namasuami" class="form-control"
                                    value="{{ old('namasuami', $inc->namasuami) }}">
                                @error('namasuami')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat', $inc->alamat) }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tgl lahir </label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', $inc->tanggal_lahir) }}">
                                @error('tanggal_lahir')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div>
                                    <p style="color: red">perhatikan jenis kelamin</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="bb" class="form-label">Berat badan</label>
                                <input type="text" name="bb" id="bb" class="form-control"
                                    value="{{ old('bb', $inc->bb) }}">
                            </div>
                            <div class="mb-3">
                                <label for="pb" class="form-label">Panjang badan</label>
                                <input type="text" name="pb" id="pb" class="form-control"
                                    value="{{ old('pb', $inc->pb) }}">
                            </div>
                            <div class="mb-3">
                                <label for="lk" class="form-label">Lingkar kepala</label>
                                <input type="text" name="lk" id="lk" class="form-control"
                                    value="{{ old('lk', $inc->lk) }}">
                            </div>
                            <div class="mb-3">
                                <label for="anak_ke" class="form-label">Anak ke-</label>
                                <input type="text" name="anak_ke" id="anak_ke" class="form-control"
                                    value="{{ old('anak_ke', $inc->anak_ke) }}">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_partus" class="form-label">Jenis partus</label>
                                <input type="text" name="jenis_partus" id="jenis_partus" class="form-control"
                                    value="{{ old('jenis_partus', $inc->jenis_partus) }}">
                            </div>
                            <div class="mb-3">
                                <label for="imd" class="form-label">IMD</label>
                                <textarea name="imd" id="imd" class="form-control">{{ old('imd', $inc->imd) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="penolongan" class="form-label">Penolongan</label>
                                <textarea name="penolongan" id="penolongan" class="form-control">{{ old('penolongan', $inc->penolongan) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan', $inc->keterangan) }}"></textarea>
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

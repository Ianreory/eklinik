@extends('home2')

@section('judul')
    <h1>Kunjungan Anc</h1>
@endsection

@section('judul2')
    Anc
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
                    <div class="card-header">{{ __('Form Data Kunjungan') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('store_anc', $pasien) }}" method="post" autocomplete="off">
                            @csrf <!-- Laravel CSRF protection -->
                            <br>

                            <div class="mb-3">
                                <label for="namaibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="namaibu" id="namaibu" class="form-control"
                                    value="{{ $pasien->nama }}">
                            </div>
                            <!-- Nim -->
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIK</label>
                                <input type="text" name="nim" id="nim" class="form-control"
                                    value="{{ old('nim') }}">
                                @error('nim')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Suami -->
                            <div class="mb-3">
                                <label for="nama_suami" class="form-label">Nama Suami</label>
                                <input type="text" name="nama_suami" id="nama_suami" class="form-control"
                                    value="{{ old('nama_suami') }}">
                                @error('nama_suami')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- NIK -->
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control"
                                    value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nomor KK -->
                            <div class="mb-3">
                                <label for="no_kk" class="form-label">No. KK</label>
                                <input type="text" name="no_kk" id="no_kk" class="form-control"
                                    value="{{ old('no_kk') }}">
                                @error('no_kk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    value="{{ old('alamat') }}">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nomor HP -->
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control"
                                    value="{{ old('no_hp') }}">
                                @error('no_hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status Kehamilan</label>
                                <input type="text" name="status" id="status" class="form-control"
                                    value="{{ old('status') }}">
                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="statustt" class="form-label">Status Imunisasi TT</label>
                                <input type="text" name="statustt" id="statustt" class="form-control"
                                    value="{{ old('statustt') }}">
                                @error('statustt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- HPHT -->
                            <div class="mb-3">
                                <label for="hpht" class="form-label">HPHT</label>
                                <input type="text" name="hpht" id="hpht" class="form-control"
                                    placeholder="Optional" value="{{ old('hpht') }}">
                            </div>

                            <!-- TP -->
                            <div class="mb-3">
                                <label for="tp" class="form-label">TP</label>
                                <input type="text" name="tp" id="tp" class="form-control"
                                    placeholder="Optional" value="{{ old('tp') }}">
                            </div>

                            <!-- TB -->
                            <div class="mb-3">
                                <label for="tb" class="form-label">TB</label>
                                <input type="text" name="tb" id="tb" class="form-control"
                                    placeholder="Optional" value="{{ old('tb') }}">
                            </div>

                            <!-- No BPJS -->
                            <div class="mb-3">
                                <label for="no_bpjs" class="form-label">No BPJS</label>
                                <input type="text" name="no_bpjs" id="no_bpjs" class="form-control"
                                    placeholder="Optional" value="{{ old('no_bpjs') }}">
                            </div>

                            <!-- Nama Ibu -->
                            <div class="mb-3">
                                <label for="namm_ibu" class="form-label">Nama Ibu Kandung</label>
                                <input type="text" name="namm_ibu" id="namm_ibu" class="form-control"
                                    placeholder="Optional" value="{{ old('namm_ibu') }}">
                            </div>

                            <!-- Tanggal Periksa -->
                            {{-- <div class="mb-3">
                                <label for="tanggal_periksa" class="form-label">Tanggal Periksa : </label>
                                <input type="date" name="tanggal_periksa" id="tanggal_periksa" placeholder="Optional"
                                    value="{{ old('tanggal_periksa') }}">
                            </div>

                            <!-- Keluhan -->
                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control"
                                    placeholder="Optional" value="{{ old('keluhan') }}">
                            </div>

                            <!-- Usia Kehamilan -->
                            <div class="mb-3">
                                <label for="usia_kehamilan" class="form-label">Usia Kehamilan</label>
                                <input type="text" name="usia_kehamilan" id="usia_kehamilan" class="form-control"
                                    placeholder="Optional" value="{{ old('usia_kehamilan') }}">
                            </div>

                            <!-- LILA -->
                            <div class="mb-3">
                                <label for="lila" class="form-label">LILA</label>
                                <input type="text" name="lila" id="lila" class="form-control"
                                    placeholder="Optional" value="{{ old('lila') }}">
                            </div>

                            <!-- Berat Badan -->
                            <div class="mb-3">
                                <label for="bb" class="form-label">Berat Badan</label>
                                <input type="text" name="bb" id="bb" class="form-control"
                                    placeholder="Optional" value="{{ old('bb') }}">
                            </div>

                            <!-- Tekanan Darah -->
                            <div class="mb-3">
                                <label for="td" class="form-label">Tekanan Darah</label>
                                <input type="text" name="td" id="td" class="form-control"
                                    placeholder="Optional" value="{{ old('td') }}">
                            </div>

                            <!-- TFU -->
                            <div class="mb-3">
                                <label for="tfu" class="form-label">TFU</label>
                                <input type="text" name="tfu" id="tfu" class="form-control"
                                    placeholder="Optional" value="{{ old('tfu') }}">
                            </div>

                            <!-- DJJ -->
                            <div class="mb-3">
                                <label for="djj" class="form-label">DJJ</label>
                                <input type="text" name="djj" id="djj" class="form-control"
                                    placeholder="Optional" value="{{ old('djj') }}">
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
                            </div> --}}
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

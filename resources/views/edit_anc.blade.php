@extends('home2')

@section('judul')
    <h1>Update Anc</h1>
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
                    <div class="card-header">{{ __('Form Update Anc') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('update_anc', $anc) }}" method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="pasien_id" class="form-label">ID PASIEN</label>
                                <input type="text" name="pasien_id" id="pasien_id" class="form-control"
                                    value="{{ old('pasien_id', $anc->pasien_id) }}">
                                <div>
                                    <p style="color: red">ID Dilarang untuk diubah</p>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="namaibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="namaibu" id="namaibu" class="form-control"
                                    value="{{ old('namaibu', $anc->namaibu) }}">
                            </div>

                            <!-- Nim -->
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIK</label>
                                <input type="text" name="nim" id="nim" class="form-control"
                                    value="{{ old('nim', $anc->nim) }}">
                                @error('nim')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Suami -->
                            <div class="mb-3">
                                <label for="nama_suami" class="form-label">Nama Suami</label>
                                <input type="text" name="nama_suami" id="nama_suami" class="form-control"
                                    value="{{ old('nama_suami', $anc->nama_suami) }}">
                                @error('nama_suami')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- NIK -->
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control"
                                    value="{{ old('nik', $anc->nik) }}">
                                @error('nik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nomor KK -->
                            <div class="mb-3">
                                <label for="no_kk" class="form-label">No. KK</label>
                                <input type="text" name="no_kk" id="no_kk" class="form-control"
                                    value="{{ old('no_kk', $anc->no_kk) }}">
                                @error('no_kk')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    value="{{ old('alamat', $anc->alamat) }}">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nomor HP -->
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="text" name="no_hp" id="no_hp" class="form-control"
                                    value="{{ old('no_hp', $anc->no_hp) }}">
                                @error('no_hp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status Kehamilan</label>
                                <input type="text" name="status" id="status" class="form-control"
                                    value="{{ old('status', $anc->status) }}">
                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="statustt" class="form-label">Status Imunisasi TT</label>
                                <input type="text" name="statustt" id="statustt" class="form-control"
                                    value="{{ old('statustt', $anc->statustt) }}">
                                @error('statustt')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- HPHT -->
                            <div class="mb-3">
                                <label for="hpht" class="form-label">HPHT</label>
                                <input type="text" name="hpht" id="hpht" class="form-control"
                                    placeholder="Optional" value="{{ old('hpht', $anc->hpht) }}">
                            </div>

                            <!-- TP -->
                            <div class="mb-3">
                                <label for="tp" class="form-label">TP</label>
                                <input type="text" name="tp" id="tp" class="form-control"
                                    placeholder="Optional" value="{{ old('tp', $anc->tp) }}">
                            </div>

                            <!-- TB -->
                            <div class="mb-3">
                                <label for="tb" class="form-label">TB</label>
                                <input type="text" name="tb" id="tb" class="form-control"
                                    placeholder="Optional" value="{{ old('tb', $anc->tb) }}">
                            </div>

                            <!-- No BPJS -->
                            <div class="mb-3">
                                <label for="no_bpjs" class="form-label">No BPJS</label>
                                <input type="text" name="no_bpjs" id="no_bpjs" class="form-control"
                                    placeholder="Optional" value="{{ old('no_bpjs', $anc->no_bpjs) }}">
                            </div>

                            <!-- Nama Ibu -->
                            <div class="mb-3">
                                <label for="namm_ibu" class="form-label">Nama Ibu Kandung</label>
                                <input type="text" name="namm_ibu" id="namm_ibu" class="form-control"
                                    placeholder="Optional" value="{{ old('namm_ibu', $anc->namm_ibu) }}">
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

@extends('home2')

@section('judul')
    <h1>Kunjungan Labor</h1>
@endsection

@section('judul2')
    Labor
@endsection

@section('isi')
    <style>
        .formpasiena {
            margin: 20px;
        }

        .simpan {
            margin-top: 10px;
        }
    </style>
    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form Data labor') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('store_labor', $pasien) }}" method="post" autocomplete="off">
                            @csrf <!-- Laravel CSRF protection -->
                            <br>
                            <div class="mb-6">
                                <label for="tanggal" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $pasien->nama }}">
                            </div>
                            <div class="mb-6">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="text" name="umur" id="umur" class="form-control"
                                    value="{{ old('umur') }}">
                                @error('umur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="nik_alamat" class="form-label">NIK Alamat</label>
                                <input type="text" name="nik" id="nik_alamat" class="form-control"
                                    value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label for="T_D" class="form-label">T_D</label>
                                <textarea name="T_D" id="T_D" class="form-control">{{ old('T_D') }}</textarea>
                            </div>

                            <div class="mb-6">
                                <label for="pols" class="form-label">pols</label>
                                <textarea name="pols" id="pols" class="form-control">{{ old('pols') }}</textarea>
                            </div>

                            <div class="mb-6">
                                <label for="glu" class="form-label">glu</label>
                                <textarea name="glu" id="glu" class="form-control">{{ old('glu') }}</textarea>
                            </div>

                            <div class="mb-6">
                                <label for="khd" class="form-label">khd</label>
                                <textarea name="khd" id="khd" class="form-control">{{ old('khd') }}</textarea>
                            </div>

                            <div class="mb-6">
                                <label for="urid" class="form-label">urid</label>
                                <textarea name="urid" id="urid" class="form-control">{{ old('urid') }}</textarea>
                            </div>

                            <div class="mb-6">
                                <label for="hd" class="form-label">hb</label>
                                <textarea name="hd" id="hd" class="form-control">{{ old('hd') }}</textarea>
                            </div>
                            <div class="mb-6">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
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

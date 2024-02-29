@extends('home2')

@section('judul')
    <h1>Update KB</h1>
@endsection
@section('judul2')
    KB
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
                    <div class="card-header">{{ __('Form Update KB') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('update_kb', $kb) }}" method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <br>
                            <div class="mb-3">
                                <label for="pasien_id" class="form-label">ID PASIEN</label>
                                <input type="text" name="pasien_id" id="pasien_id" class="form-control"
                                    value="{{ old('pasien_id', $kb->pasien_id) }}">
                                <div>
                                    <p style="color: red">ID Dilarang untuk diubah</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal : </label>
                                <input type="date" name="tanggal" id="tanggal"
                                    value="{{ old('tanggal', $kb->tanggal) }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $kb->nama }}">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="text" name="umur" id="umur" class="form-control"
                                    value="{{ old('umur', $kb->umur) }}">
                                @error('umur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_suami" class="form-label">Nama Suami</label>
                                <input type="text" name="nama_suami" id="nama_suami" class="form-control"
                                    value="{{ old('nama_suami', $kb->nama_suami) }}">
                            </div>
                            <div class="mb-3">
                                <label for="nik_alamat" class="form-label">NIK Alamat</label>
                                <input type="text" name="nik_alamat" id="nik_alamat" class="form-control"
                                    value="{{ old('nik_alamat', $kb->nik_alamat) }}">
                                @error('nik_alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alkon" class="form-label">Alkon</label>
                                <textarea name="alkon" id="alkon" class="form-control">{{ old('alkon', $kb->alkon) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="januari" class="form-label">Januari</label>
                                <textarea name="januari" id="januari" class="form-control">{{ old('januari', $kb->januari) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="februari" class="form-label">Februari</label>
                                <textarea name="februari" id="februari" class="form-control">{{ old('februari', $kb->februari) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="maret" class="form-label">Maret</label>
                                <textarea name="maret" id="maret" class="form-control">{{ old('maret', $kb->maret) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="april" class="form-label">April</label>
                                <textarea name="april" id="april" class="form-control">{{ old('april', $kb->april) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="mei" class="form-label">Mei</label>
                                <textarea name="mei" id="mei" class="form-control">{{ old('mei', $kb->mei) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="juni" class="form-label">Juni</label>
                                <textarea name="juni" id="juni" class="form-control">{{ old('juni', $kb->juni) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="juli" class="form-label">Juli</label>
                                <textarea name="juli" id="juli" class="form-control">{{ old('juli', $kb->juni) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="agustus" class="form-label">Agustus</label>
                                <textarea name="agustus" id="agustus" class="form-control">{{ old('agustus', $kb->agustus) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="september" class="form-label">September</label>
                                <textarea name="september" id="september" class="form-control">{{ old('september', $kb->september) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="oktober" class="form-label">Oktober</label>
                                <textarea name="oktober" id="oktober" class="form-control">{{ old('oktober', $kb->oktober) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="november" class="form-label">November</label>
                                <textarea name="november" id="november" class="form-control">{{ old('november', $kb->november) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="desember" class="form-label">Desember</label>
                                <textarea name="desember" id="desember" class="form-control">{{ old('desember', $kb->desember) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="hasil_pemeriksaan" class="form-label">Hasil Pemeriksaan</label>
                                <textarea name="hasil_pemeriksaan" id="hasil_pemeriksaan" class="form-control">{{ old('hasil_pemeriksaan', $kb->hasil_pemeriksaan) }}</textarea>
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

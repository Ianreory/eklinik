@extends('home2')

@section('judul')
    <h1>Kunjungan Persalinan</h1>
@endsection

@section('judul2')
    Persalinan
@endsection

@section('isi')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <style>
        .formpasiena {
            margin: 20px;
        }
    </style>
    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Form Data persalinan') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('store_persalinan', $pasien) }}" method="post" autocomplete="off">
                            @csrf <!-- Laravel CSRF protection -->
                            <div class="mb-3">
                                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control"
                                    value="{{ $pasien->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="nik_ibu" class="form-label">NIK Ibu</label>
                                <input type="text" name="nik_ibu" id="nik_ibu" class="form-control"
                                    value="{{ old('nik_ibu') }}">
                                @error('nik_ibu')
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
                                <label for="sumber_pembiayaan" class="form-label">Sumber Pembiayaan</label>
                                <input type="text" name="sumber_pembiayaan" id="sumber_pembiayaan" class="form-control"
                                    value="{{ old('sumber_pembiayaan') }}">
                                @error('sumber_pembiayaan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="usia_ibu" class="form-label">Usia Ibu</label>
                                <input type="text" name="usia_ibu" id="usia_ibu" class="form-control"
                                    value="{{ old('usia_ibu') }}">
                                @error('usia_ibu')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="status_gpa" class="form-label">Status GPA</label>
                                <input type="text" name="status_gpa" id="status_gpa" class="form-control"
                                    value="{{ old('status_gpa') }}">
                            </div>
                            <div class="mb-3">
                                <label for="jarak" class="form-label">Jarak Kehamilan</label>
                                <input type="text" name="jarak" id="jarak" class="form-control"
                                    value="{{ old('jarak') }}">
                            </div>
                            <div class="mb-3">
                                <label for="taksiran" class="form-label">Taksiran Persalinan</label>
                                <input type="text" name="taksiran" id="taksiran" class="form-control"
                                    value="{{ old('taksiran') }}">
                            </div>
                            <div class="mb-3">
                                <label for="tb" class="form-label">Tinggi Badan</label>
                                <input type="text" name="tb" id="tb" class="form-control"
                                    value="{{ old('tb') }}">
                            </div>
                            <div class="mb-3">
                                <label for="lila" class="form-label">LILA</label>
                                <input type="text" name="lila" id="lila" class="form-control"
                                    value="{{ old('lila') }}">
                            </div>
                            <div class="mb-3">
                                <label for="status_imunisasi" class="form-label">Status Imunisasi</label>
                                <input type="text" name="status_imunisasi" id="status_imunisasi" class="form-control"
                                    value="{{ old('status_imunisasi') }}">
                            </div>
                            <div class="mb-3">
                                <label for="injeksi_td" class="form-label">Injeksi TD</label>
                                <input type="text" name="injeksi_td" id="injeksi_td" class="form-control"
                                    value="{{ old('injeksi_td') }}">
                            </div>
                            <div class="mb-3">
                                <label for="skrining" class="form-label">Skrining</label>
                                <textarea name="skrining" id="skrining" class="form-control">{{ old('skrining') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="januari" class="form-label">Januari</label>
                                <textarea name="januari" id="januari" class="form-control">{{ old('januari') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="februari" class="form-label">Februari</label>
                                <textarea name="februari" id="februari" class="form-control">{{ old('februari') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="maret" class="form-label">Maret</label>
                                <textarea name="maret" id="maret" class="form-control">{{ old('maret') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="april" class="form-label">April</label>
                                <textarea name="april" id="april" class="form-control">{{ old('april') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="mei" class="form-label">Mei</label>
                                <textarea name="mei" id="mei" class="form-control">{{ old('mei') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="juni" class="form-label">Juni</label>
                                <textarea name="juni" id="juni" class="form-control">{{ old('juni') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="juli" class="form-label">Juli</label>
                                <textarea name="juli" id="juli" class="form-control">{{ old('juli') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="agustus" class="form-label">Agustus</label>
                                <textarea name="agustus" id="agustus" class="form-control">{{ old('agustus') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="september" class="form-label">September</label>
                                <textarea name="september" id="september" class="form-control">{{ old('september') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="oktober" class="form-label">Oktober</label>
                                <textarea name="oktober" id="oktober" class="form-control">{{ old('oktober') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="november" class="form-label">November</label>
                                <textarea name="november" id="november" class="form-control">{{ old('november') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="desember" class="form-label">Desember</label>
                                <textarea name="desember" id="desember" class="form-control">{{ old('desember') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir : </label>
                                <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            </div>
                            <div class="mb-3">
                                <label for="kurang_dari" class="form-label">&lt;2500 gr</label>
                                <input type="text" name="kurang_dari" id="kurang_dari" class="form-control"
                                    value="{{ old('kurang_dari') }}">
                            </div>
                            <div class="mb-3">
                                <label for="lebih_dari" class="form-label">&lt;2500 gr</label>
                                <input type="text" name="lebih_dari" id="lebih_dari" class="form-control"
                                    value="{{ old('lebih_dari') }}">
                            </div>
                            <div class="mb-3">
                                <label for="cara_persalinan" class="form-label">Cara Persalinan</label>
                                <input type="text" name="cara_persalinan" id="cara_persalinan" class="form-control"
                                    value="{{ old('cara_persalinan') }}">
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

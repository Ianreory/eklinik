@extends('home2')

@section('judul')
    <h1>Kunjungan bpjs</h1>
@endsection

@section('judul2')
    BPJS
@endsection

@section('isi')
    <style>
        .formpasiena {
            margin: 20px;
        }
    </style>
    <div class="table-container1">
        <div class="justify-content-center align-items-center d-flex">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Form Data bpjs') }}</div>
                    <div class="formpasiena1">
                        <div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    Terdapat Inputan yang kosong Apa Bila ingin di kosongkan bisa di isi<strong> Titik
                                    </strong><br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('store_bpjs', $pasien) }}" method="post" autocomplete="off">
                            @csrf <!-- Laravel CSRF protection -->
                            <br>
                            <div class="">
                                <div class="mb-6">
                                    <label for="Perawatan" class="form-label">Perawatan </label>
                                </div>
                                <div>
                                    <select name="Perawatan" id="Perawatan" class="form-control">
                                        <option value="Rawat jalan"
                                            {{ old('Perawatan') === 'Rawat jalan' ? 'selected' : '' }}>
                                            Rawat jalan</option>
                                        <option value="Rawat inap"
                                            {{ old('Perawatan') === 'Rawat inap' ? 'selected' : '' }}>
                                            Rawat inap</option>
                                        <option value="Promotif preventif"
                                            {{ old('Perawatan') === 'Promotif preventif' ? 'selected' : '' }}>Promotif
                                            preventif
                                        </option>
                                    </select>
                                    @error('Perawatan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="formbpjs">
                                    <div class="mb-6 ">
                                        <label for="tgl_kunjungan" class="form-label">Tgl Kunjungan </label>
                                    </div>
                                    <div>
                                        <input class="label" type="date" name="tgl_kunjungan" id="tgl_kunjungan"
                                            value="{{ old('tgl_kunjungan') }}">
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="keluhan" class="form-label">Keluhan</label>
                                </div>
                                <div>
                                    <textarea name="keluhan" id="keluhan" class="form-control">{{ old('keluhan') }}</textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="anamnesa" class="form-label">Anamnesa</label>
                                </div>
                                <div>
                                    <input type="text" name="anamnesa" id="anamnesa" class="form-control"
                                        value="{{ old('anamnesa') }}">
                                </div>
                                <div class="formbpjs">
                                    <div>
                                        <label for="" class="form-label">Riwayat alergi</label>
                                    </div>
                                    <div class="label">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="makanan">Makanan</span>
                                            </div>
                                            <input type="text" name="makanan" class="form-control"
                                                value="{{ old('makanan') }}" aria-describedby="makanan">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="udara">Udara </span>
                                            </div>
                                            <input type="text" name="udara" class="form-control"
                                                value="{{ old('udara') }}" aria-describedby="udara">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="obat">Obat-obatan </span>
                                            </div>
                                            <input type="text" name="obat" class="form-control"
                                                value="{{ old('obat') }}" aria-describedby="obat">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="prognosa" class="form-label">Prognosa</label>
                                </div>
                                <div>
                                    <input type="text" name="prognosa" id="prognosa" class="form-control"
                                        value="{{ old('prognosa') }}"></input>
                                </div>
                                <div class="mb-6">
                                    <label for="terapi" class="form-label">Terapi Obat</label>
                                </div>
                                <div>
                                    <input type="text" name="terapi" id="terapi" class="form-control"
                                        value="{{ old('terapi') }}"></input>
                                </div>
                                <div class="mb-6">
                                    <label for="terapi_non" class="form-label">Terapi Non Obat</label>
                                </div>
                                <div>
                                    <input type="text" name="terapi_non" id="terapi_non" class="form-control"
                                        value="{{ old('terapi_non') }}"></input>
                                </div>
                                <div class="mb-6">
                                    <label for="bmhp" class="form-label">BMHP</label>
                                </div>
                                <div>
                                    <textarea name="bmhp" id="bmhp" class="form-control">{{ old('bmhp') }}</textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="diagnosis" class="form-label">Diagnosis</label>
                                </div>
                                <div>
                                    <textarea name="diagnosis" id="diagnosis" class="form-control">{{ old('diagnosis') }}</textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="kesadaran" class="form-label">Kesadaran</label>
                                </div>
                                <div>
                                    <textarea name="kesadaran" id="kesadaran" class="form-control">{{ old('kesadaran') }}</textarea>
                                </div>
                                <div class="formbpjs2">
                                    <div>
                                        <label for="">Suhu</label>
                                    </div>
                                    <div class="label">
                                        <div class="input-group">
                                            <div class="input-group mb-3">
                                                <input type="text" name="suhu" id="suhu" class="form-control"
                                                    value="{{ old('suhu') }}" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">C</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tekanan">
                                    <div>
                                        <label for="">Pemeriksaan fisik</label>
                                    </div>
                                    <div class="label">
                                        {{-- <div class="mb-6">
                                            <label for="tinggi_badan" class="form-label">tinggi_badan</label>
                                        </div> --}}
                                        <div>
                                            <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="tinggi_badan" id="tinggi_badan"
                                                    class="form-control" value="{{ old('tinggi_badan') }}"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="mb-6">
                                            <label for="berat_badan" class="form-label">berat_badan</label>
                                        </div> --}}
                                        <div>
                                            <label for="berat_badan" class="form-label">Berat Badan</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="berat_badan" id="berat_badan"
                                                    class="form-control" value="{{ old('berat_badan') }}"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="mb-6">
                                            <label for="lingkar_perut" class="form-label">lingkar_perut</label>
                                        </div> --}}
                                        <div>
                                            <label for="lingkar_perut" class="form-label">Lingkar Perut</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="lingkar_perut" id="lingkar_perut"
                                                    class="form-control" value="{{ old('lingkar_perut') }}"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="mb-6">
                                            <label for="imt" class="form-label">imt</label>
                                        </div> --}}
                                        <div>
                                            <label for="imt" class="form-label">IMT</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="imt" id="imt" class="form-control"
                                                    value="{{ old('imt') }}" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">kg/m2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tekanan1">
                                    <div class="mb-6 label2">
                                        <label for="sistole" class="form-label">Tekanan Darah</label>
                                    </div>

                                    <div class="label" id="label1">
                                        <div>
                                            <label for="sistole" class="form-label">Sistole</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="sistole" id="sistole" class="form-control"
                                                    value="{{ old('sistole') }}" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="diastole" class="form-label">Diastole</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="diastole" id="diastole"
                                                    class="form-control" value="{{ old('diastole') }}"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="respiratory_rate" class="form-label">Respiratory Rate</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="respiratory_rate" id="respiratory_rate"
                                                    class="form-control" value="{{ old('respiratory_rate') }}"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="heart_rate" class="form-label">Heart Rate</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="heart_rate" id="heart_rate"
                                                    class="form-control" value="{{ old('heart_rate') }}"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">cm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="tenaga_medis" class="form-label">Tenaga Medis</label>
                                </div>
                                <div>
                                    <textarea name="tenaga_medis" id="tenaga_medis" class="form-control">{{ old('tenaga_medis') }}</textarea>
                                </div>
                                {{-- kk --}}
                                <div class="mb-6">
                                    <label for="pelayanan" class="form-label">Pelayanan Non Kapitasi</label>
                                </div>
                                <div>
                                    <textarea name="pelayanan" id="pelayanan" class="form-control">{{ old('pelayanan') }}</textarea>
                                </div>
                                <div class="mb-6">
                                    <label for="statuspulang" class="form-label">Status Pulang</label>
                                </div>
                                <div>
                                    <textarea name="statuspulang" id="statuspulang" class="form-control">{{ old('statuspulang') }}</textarea>
                                </div>
                                <div class="simpan1">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

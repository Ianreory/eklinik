@extends('home2')

@section('judul')
    <h1>Update Kunjungan Anc</h1>
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
                    <div class="card-header">{{ __('Form Update Kunjungan Anc') }}</div>
                    <div class="formpasiena">
                        <form action="{{ route('update_kunjungananc', $kunjungananc) }}" method="post" autocomplete="off">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="anc_id" class="form-label">ID PASIEN</label>
                                <input type="text" name="anc_id" id="anc_id" class="form-control"
                                    value="{{ old('anc_id', $kunjungananc->anc_id) }}">
                                <div>
                                    <p style="color: red">ID Dilarang untuk diubah</p>
                                </div>
                            </div>
                            <!-- Tanggal Periksa -->
                            <div class="mb-3">
                                <label for="tanggal_periksa" class="form-label">Tanggal Periksa : </label>
                                <input type="date" name="tanggal_periksa" id="tanggal_periksa" placeholder="Optional"
                                    value="{{ old('tanggal_periksa', $kunjungananc->tanggal_pemeriksaan) }}">
                            </div>

                            <!-- Keluhan -->
                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan</label>
                                <input type="text" name="keluhan" id="keluhan" class="form-control"
                                    placeholder="Optional" value="{{ old('keluhan', $kunjungananc->keluhan) }}">
                            </div>

                            <!-- Usia Kehamilan -->
                            <div class="mb-3">
                                <label for="usia_kehamilan" class="form-label">Usia Kehamilan</label>
                                <input type="text" name="usia_kehamilan" id="usia_kehamilan" class="form-control"
                                    placeholder="Optional"
                                    value="{{ old('usia_kehamilan', $kunjungananc->usia_kehamilan) }}">
                            </div>

                            <!-- LILA -->
                            <div class="mb-3">
                                <label for="lila" class="form-label">LILA</label>
                                <input type="text" name="lila" id="lila" class="form-control"
                                    placeholder="Optional" value="{{ old('lila', $kunjungananc->lila) }}">
                            </div>

                            <!-- Berat Badan -->
                            <div class="mb-3">
                                <label for="bb" class="form-label">Berat Badan</label>
                                <input type="text" name="bb" id="bb" class="form-control"
                                    placeholder="Optional" value="{{ old('bb', $kunjungananc->bb) }}">
                            </div>

                            <!-- Tekanan Darah -->
                            <div class="mb-3">
                                <label for="td" class="form-label">TD</label>
                                <input type="text" name="td" id="td" class="form-control"
                                    placeholder="Optional" value="{{ old('td', $kunjungananc->td) }}">
                            </div>

                            <!-- TFU -->
                            <div class="mb-3">
                                <label for="tfu" class="form-label">TFU (cm)</label>
                                <input type="text" name="tfu" id="tfu" class="form-control"
                                    placeholder="Optional" value="{{ old('tfu', $kunjungananc->tfu) }}">
                            </div>

                            <!-- DJJ -->
                            <div class="mb-3">
                                <label for="djj" class="form-label">DJJ</label>
                                <input type="text" name="djj" id="djj" class="form-control"
                                    placeholder="Optional" value="{{ old('djj', $kunjungananc->djj) }}">
                            </div>

                            <!-- Keterangan -->
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan', $kunjungananc->keterangan) }}</textarea>
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

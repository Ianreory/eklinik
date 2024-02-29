{{-- @extends('home2')

@section('judul')
    <h1>Kunjungan</h1>
@endsection

@section('judul2')
    Kunjungan
@endsection

@section('isi') --}}
<style>
    /* Body */
    .container {
        display: grid;
        grid-template-columns: auto;
        gap: 0px;
        margin: 40px 500px;
    }

    hr {
        height: 1px;
        background-color: rgba(16, 86, 82, .75);
        ;
        border: none;
    }

    .card {
        width: 400px;
        background: rgb(255, 250, 235);
        box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
    }

    .title {
        width: 100%;
        height: 40px;
        position: relative;
        display: flex;
        align-items: center;
        border-bottom: 1px solid rgba(16, 86, 82, .75);
        ;
        font-weight: 700;
        font-size: 11px;
        color: #000000;
    }

    /* Cart */
    .cart {
        border-radius: 19px 19px 0px 0px;
    }

    .cart .steps {
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .cart .steps .step {
        display: grid;
        gap: 10px;
    }

    .cart .steps .step span {
        font-size: 13px;
        font-weight: 600;
        color: #000000;
        margin-bottom: 8px;
        display: block;
    }

    .cart .steps .step p {
        font-size: 11px;
        font-weight: 600;
        color: #000000;
    }

    /* Promo */
    .promo form {
        display: grid;
        grid-template-columns: 1fr 80px;
        gap: 10px;
        padding: 0px;
    }

    .input_field {
        width: auto;
        height: 36px;
        padding: 0 0 0 12px;
        border-radius: 5px;
        outline: none;
        border: 1px solid rgb(16, 86, 82);
        background-color: rgb(251, 243, 228);
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
    }

    .input_field:focus {
        border: 1px solid transparent;
        box-shadow: 0px 0px 0px 2px rgb(251, 243, 228);
        background-color: rgb(201, 193, 178);
    }

    .promo form button {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 10px 18px;
        gap: 10px;
        width: 100%;
        height: 36px;
        background: rgba(16, 86, 82, .75);
        box-shadow: 0px 0.5px 0.5px #F3D2C9, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
        border-radius: 5px;
        border: 0;
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        line-height: 15px;
        color: #000000;
    }

    /* Checkout */
    .payments .details {
        display: grid;
        grid-template-columns: 10fr 1fr;
        padding: 0px;
        gap: 5px;
    }

    .payments .details span:nth-child(odd) {
        font-size: 12px;
        font-weight: 600;
        color: #000000;
        margin: auto auto auto 0;
    }

    .payments .details span:nth-child(even) {
        font-size: 13px;
        font-weight: 600;
        color: #000000;
        margin: auto 0 auto auto;
    }

    .checkout .footer {
        padding: 10px 10px 10px 20px;
        background-color: rgba(16, 86, 82, .5);
    }

    .price {
        position: relative;
        font-size: 22px;
        color: #2B2B2F;
        font-weight: 900;
    }

    .checkout .checkout-btn {
        margin-left: 110px;
        width: 150px;
        height: 36px;
        background: rgba(16, 86, 82, .55);
        box-shadow: 0px 0.5px 0.5px rgba(16, 86, 82, .75), 0px 1px 0.5px rgba(16, 86, 82, .75);
        ;
        border-radius: 7px;
        border: 1px solid rgb(16, 86, 82);
        ;
        color: #000000;
        font-size: 13px;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
    }

    .checkout .checkout-btn:active {
        background-color: #338722
    }

    .step1 {
        display: flex;
        justify-content: center;
        gap: 130px;
    }

    h2 {
        margin-left: 160px;
    }

    .btnbalik {
        display: flex;
        height: 40px;
        width: 100px;
        align-items: center;
        justify-content: center;
        background-color: #4228284b;
        border-radius: 3px;
        letter-spacing: 1px;
        transition: all 0.2s linear;
        cursor: pointer;
        border: none;
        background: #a96b6b;
    }

    .btnbalik>svg {
        margin-right: 5px;
        margin-left: 5px;
        font-size: 20px;
        transition: all 0.4s ease-in;
    }

    .btnbalik:hover>svg {
        font-size: 1.2em;
        transform: translateX(-5px);
    }

    .btnbalik:hover {
        box-shadow: 9px 9px 33px #3f1a1a, -9px -9px 33px #ffffff;
        transform: translateY(-2px);
    }

    .btnbalik1 {
        margin-top: 30px;
    }
</style>
<div class="btnbalik1">
    <form action="{{ route('showpasien', $pasien) }}" method="get">
        <button class="btnbalik">
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
                <path
                    d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                </path>
            </svg>
            <span>Back</span>
        </button>
    </form>
</div>
<div class="container">
    <form action="{{ route('store_kunjungan', $pasien) }}" method="post" autocomplete="off">
        <div class="card cart">
            <label class="title">
                <h2>Form Pilih</h2>
            </label>
            @csrf
            <div class="steps">
                <div class="step">
                    <div>
                        <span>Tanggal Kunjungan</span>
                        <input type="date" name="tgl_kunjungan" id="tgl_kunjungan" required>
                    </div>
                    <hr>
                    <div class="step1">
                        <div>
                            <span>Bidan</span>
                            <p>{{ $user->name }}</p>
                        </div>
                        <div>
                            <span>Pasien</span>
                            <p>{{ $pasien->nama }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="promo">
                        <span>Jenis Kunjungan</span>
                        <select name="jenis_kunjungan" id="jenis_kunjungan" class="form-select" required>
                            <option value="kb">KB</option>
                            <option value="umum">Umum</option>
                            <option value="labor">Labor</option>
                            <option value="inc">Inc</option>
                            <option value="anc">Anc</option>
                            <option value="persalinan">Persalinan</option>
                        </select>
                    </div>
                    <hr>
                </div>
            </div>
        </div>

        <div class="card checkout">
            <div class="footer">
                <button type="submit" class="checkout-btn">Submit</button>
            </div>
        </div>
    </form>
</div>

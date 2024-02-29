@extends('home2')

@section('judul')
    <h4>Daftar Kunjungan {{ $pasien->nama }}</h4>
@endsection

@section('judul2')
    Daftar
@endsection

@section('isi')
    <div class="btnpersonal">
        <div>
            <form action="{{ route('index_pasien') }}" method="get">
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
        <div>
            <form action="{{ route('create_kunjungan', $pasien) }}" method="get">
                <button class="btntambahkunjungan">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125"
                            stroke="#fffffff" stroke-width="2"></path>
                        <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#fffffff" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    ADD NEW
                </button>
            </form>
        </div>
    </div>
    <div class="create-pasien">
        <div class="card-client">
            <div class="user-picture">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg>
            </div>
            <p class="name-client"> {{ $umum }}
                <span>Kunjungan Umum
                </span>
            </p>
            <div class="social-media">
                <form action="{{ route('show_kunjungan_umum', $pasien) }}" method="get"> <button class="btnpasien">Cek
                        disini!
                    </button></form>

            </div>
        </div>
        <div class="card-client">
            <div class="user-picture">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg>
            </div>
            <p class="name-client"> {{ $labor }}
                <span>Kunjungan Labor
                </span>
            </p>
            <div class="social-media">
                <form action="{{ route('show_kunjungan_labor', $pasien) }}" method="get">
                    <button class="btnpasien">Cek disini!
                    </button>
                </form>
            </div>
        </div>
        <div class="card-client">
            <div class="user-picture">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg>
            </div>
            <p class="name-client"> {{ $kb }}
                <span>Kunjungan KB
                </span>
            </p>
            <div class="social-media">
                <form action="{{ route('show_kunjungan_kb', $pasien) }}" method="get">
                    <button class="btnpasien">Cek disini!
                    </button>
                </form>
            </div>
        </div>
        <div class="card-client">
            <div class="user-picture">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg>
            </div>
            <p class="name-client"> {{ $anc }}
                <span>Kunjungan Anc
                </span>
            </p>
            <div class="social-media">
                <form action="{{ route('show_kunjungan_anc', $pasien) }}" method="get">
                    <button class="btnpasien">Cek disini!
                    </button>
                </form>
            </div>
        </div>

    </div>
    <div class="create-pasien1">
        <div class="card-client">
            <div class="user-picture">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg>
            </div>
            <p class="name-client"> {{ $inc }}
                <span>Kunjungan Inc
                </span>
            </p>
            <div class="social-media">
                <form action="{{ route('show_kunjungan_inc', $pasien) }}" method="get">
                    <button class="btnpasien">Cek disini!
                    </button>
                </form>
            </div>
        </div>
        <div class="card-client claint">
            <div class="user-picture">
                <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg>
            </div>
            <p class="name-client"> {{ $persalinan }}
                <span>Kunjungan Persalinan
                </span>
            </p>
            <div class="social-media">
                <form action="{{ route('show_kunjungan_persalinan', $pasien) }}" method="get">
                    <button class="btnpasien">Cek disini!
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

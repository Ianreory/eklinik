@extends('home2')

@section('judul')
    <h1>Pasien bpjs</h1>
@endsection
@section('judul2')
    Kunjungan BPJS
@endsection

@section('isi')
    @include('sweetalert::alert')
    <div class="btnpersonal">
        <div>
            <form action="{{ route('show_kunjunganbpjs') }}" method="get">
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
            <form action="{{ route('create_bpjs', $kunjungan_bpjs) }}" method="get">
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
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr style="text-align: center">
                    <th scope="col">#</th>
                    <th scope="col">Tgl Daftar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Kartu BPJS</th>
                    <th scope="col" style="white-space: nowrap; min-width: 100px;">Aksi</th>
                    </th>
                </tr>
            </thead>
            @php
                $no = 1; // Inisialisasi hitung
            @endphp
            @foreach ($bpjs as $bpjs)
                <tbody>
                    <tr>
                        <th scope="row" class="bg-white">{{ $no++ }}</th>
                        <td>{{ $bpjs->tgl_kunjungan }}</td>
                        <td> {{ $bpjs->anamnesa }}</td>
                        <td>{{ $bpjs->keluhan }}</td>
                        <td class="center-button">
                            <div class="btndetail">
                                <form action="{{ route('surat_bpjs', $bpjs) }}" method="get">
                                    <button class="contactButton">
                                        Catatan
                                        <div class="iconButton">
                                            <svg height="24" width="24" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </form>
                                <form action="{{ route('delete_bpjs', $bpjs) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btnumum ">Delete</button>
                                </form>
                                <form action="{{ route('edit_bpjs', $bpjs) }}" method="get">
                                    <button class="btnumum1" type="submit">Update</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection

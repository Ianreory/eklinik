@extends('home2')

@section('judul')
    <h1>Dashboard</h1>
@endsection
@section('judul2')
    Dashboard
@endsection

@section('isi')
    <style>
        .new {
            border-radius: 0px;
            background: #24103d;
            box-shadow: 8px 8px 15px #706e72, -8px -8px 15px #464547;
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-lg-3 col-6 ">
                    <!-- small box -->
                    <div class="small-box bg-info custom-box new"> <!-- Tambahkan class custom-box -->
                        <div class="inner">
                            <h3>{{ $jumlah_umum }}</h3>
                            <p>Pasien Umum</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-hand-holding-medical"></i>
                        </div>
                        <a href="{{ route('index_umum') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success new">
                        <div class="inner">
                            <h3>{{ $jumlah_labor }}</h3>

                            <p>Pasien Laboratorium</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-tablets"></i>
                        </div>
                        <a href="{{ route('show_labor') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning new">
                        <div class="inner">
                            <h3>{{ $jumlah }}</h3>

                            <p>Pasien KB</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <a href="{{ route('show_kb') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger new">
                        <div class="inner">
                            <h3>{{ $jumlah_anc }}</h3>

                            <p>Pasien Anc</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-fire-flame-simple"></i>
                        </div>
                        <a href="{{ route('show_anc') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary text-white new">
                        <div class="inner">
                            <h3>{{ $jumlah_inc }}</h3>

                            <p>Pasien Inc</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-book-medical"></i>
                        </div>
                        <a href="{{ route('show_inc') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success text-white new">
                        <div class="inner">
                            <h3>{{ $jumlah_persalinan }}</h3>

                            <p>Pasien Persalinan</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-notes-medical"></i>
                        </div>
                        <a href="{{ route('show_persalinan') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info text-white new">
                        <div class="inner">
                            <h3>{{ $bpjs }}</h3>

                            <p>Pasien bpjs</p>
                        </div>
                        <div class="icon custom-icon">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <a href="{{ route('show_bpjs') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
            </div>
        </div>
    </section>
@endsection

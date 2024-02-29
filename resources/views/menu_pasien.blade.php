@extends('home2')

@section('judul')
    <h1>Kunjungan</h1>
@endsection
@section('judul2')
    Kunjungan
@endsection
@section('isi')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .container {
                display: flex;
            }

            .box {
                width: 150px;
                height: 80px;
                margin: 10px;
                background-color: #3498db;
                color: #fff;
                text-align: center;
                line-height: 80px;
                font-size: 14px;
            }
        </style>
        <title>Horizontal Boxes</title>
    </head>

    <body>
        <div class="container">
            <div class="box"><a href="{{ route('create_kunjungan', $pasien) }}"></a><button type="submit">Lanjut
                    Kunjungan</button>
            </div>
        </div>
        <div class="container">
            <div class="box"><a href=""></a>Pasien Umum</div>
            <div class="box">Pasien KB</div>
            <div class="box">Pasien Ibu Hamil</div>
            <div class="box">Pasien Labor</div>
            <div class="box">Pasien Persalinan</div>
        </div>
    </body>

    </html>
@endsection

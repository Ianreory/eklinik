<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Kunjungan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 5px;
        }

        .content {
            margin: 20px 0;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
        }

        .tampilumum div {
            margin: 30px;
            padding: 10px;
            border-radius: 10px;
            border: solid blanchedalmond
        }

        .tampilumum span {
            margin-left: 20px;
        }

        .tampilumumseluruh {
            margin-bottom: 20px;
        }

        .tampilumumseluruh {
            display: flex;
            align-content: center;
            gap: 150px;
            margin-left: 260px;
        }

        /* btn balik */
        .btnbalik {
            display: flex;
            height: 40px;
            width: 100px;
            align-items: center;
            justify-content: center;
            background-color: #eeeeee4b;
            border-radius: 3px;
            letter-spacing: 1px;
            transition: all 0.2s linear;
            cursor: pointer;
            border: none;
            background: #17c60b;
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
            box-shadow: 9px 9px 33px #d1d1d1, -9px -9px 33px #ffffff;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <header>
        <h1>Detail Kunjungan Pasien</h1>
        <p>Eklinik</p>
    </header>
    <div class="btnpersonal">
        <div>
            <form action="{{ route('index_pasien') }}" method="get">
                <button class="btnbalik">
                    <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        viewBox="0 0 1024 1024">
                        <path
                            d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z">
                        </path>
                    </svg>
                    <span>Back</span>
                </button>
            </form>
        </div>
    </div>
    <div class="tampilumumseluruh">
        <div class="tampilumum">
            <div>
                <p>Nama Ibu
                    <span> :{{ $persalinan->nama_ibu }}</span>
                </p>
            </div>
            <div>
                <p>Nik Ibu
                    <span> :{{ $persalinan->nik_ibu }}</span>
                </p>
            </div>
            <div>
                <p>Alamat
                    <span> :{{ $persalinan->alamat }}</span>
                </p>
            </div>
            <div>
                <p>Sumber Pembiayaan
                    <span> :{{ $persalinan->sumber_pembiayaan }}</span>
                </p>
            </div>
            <div>
                <p>Usia Ibu
                    <span> :{{ $persalinan->usia_ibu }}</span>
                </p>
            </div>
            <div>
                <p>Status GPA
                    <span> :{{ $persalinan->status_gpa }}</span>
                </p>
            </div>
            <div>
                <p>Jarak
                    <span> :{{ $persalinan->jarak }}</span>
                </p>
            </div>
            <div>
                <p>Taksiran
                    <span> :{{ $persalinan->taksiran }}</span>
                </p>
            </div>
            <div>
                <p>TB
                    <span> :{{ $persalinan->tb }}</span>
                </p>
            </div>
            <div>
                <p>Lila
                    <span> :{{ $persalinan->lila }}</span>
                </p>
            </div>
            <div>
                <p>Status Imunisasi
                    <span> :{{ $persalinan->status_imunisasi }}</span>
                </p>
            </div>
            <div>
                <p>Injeksi TD
                    <span> :{{ $persalinan->injeksi_td }}</span>
                </p>
            </div>
            <div>
                <p>Skrining
                    <span> :{{ $persalinan->skrining }}</span>
                </p>
            </div>
            <div>
                <p>Januari
                    <span> :{{ $persalinan->januari }}</span>
                </p>
            </div>

        </div>
        <div class="tampilumum">
            <div>
                <p>Februari
                    <span> :{{ $persalinan->februari }}</span>
                </p>
            </div>
            <div>
                <p>Maret
                    <span> :{{ $persalinan->maret }}</span>
                </p>
            </div>
            <div>
                <p>April
                    <span> :{{ $persalinan->april }}</span>
                </p>
            </div>
            <div>
                <p>Mei
                    <span> :{{ $persalinan->mei }}</span>
                </p>
            </div>
            <div>
                <p>Juni
                    <span> :{{ $persalinan->juni }}</span>
                </p>
            </div>
            <div>
                <p>Juli
                    <span> :{{ $persalinan->juli }}</span>
                </p>
            </div>
            <div>
                <p>Agustus
                    <span> :{{ $persalinan->agustus }}</span>
                </p>
            </div>
            <div>
                <p>September
                    <span> :{{ $persalinan->september }}</span>
                </p>
            </div>
            <div>
                <p>Oktober
                    <span> :{{ $persalinan->oktober }}</span>
                </p>
            </div>
            <div>
                <p>November
                    <span> :{{ $persalinan->november }}</span>
                </p>
            </div>
            <div>
                <p>Desember
                    <span> :{{ $persalinan->desember }}</span>
                </p>
            </div>
            <div>
                <p>Tgl Lahir
                    <span> :{{ $persalinan->tgl_lahir }}</span>
                </p>
            </div>
            <div>
                <p>&lt;2500 gr
                    <span> :{{ $persalinan->kurang_dari }}</span>
                </p>
            </div>
            <div>
                <p>&lt;2500 gr
                    <span> :{{ $persalinan->lebih_dari }}</span>
                </p>
            </div>
            <div>
                <p>cara_persalinan
                    <span> :{{ $persalinan->cara_persalinan }}</span>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <p>Detail Kunjungan Persalinan!</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

    <script>
        function exportToPDF() {
            html2canvas(document.body).then(function(canvas) {
                var imgData = canvas.toDataURL('image/png');
                var pdf = new jsPDF('p', 'mm', 'a4');
                pdf.addImage(imgData, 'PNG', 0, 0, 210, 297);
                pdf.save('surat_pendaftaran.pdf');
            });
        }

        function printPage() {
            window.print();
        }
    </script>
</body>

</html>

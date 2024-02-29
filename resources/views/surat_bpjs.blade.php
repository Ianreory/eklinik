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
            <form action="{{ route('show_kunjunganbpjs') }}" method="get">
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
                <p>Perawatan
                    <span> :{{ $bpjs->Perawatan }}</span>
                </p>
            </div>
            <div>
                <p>Tanggal Kunjungan
                    <span> :{{ $bpjs->tgl_kunjungan }}</span>
                </p>
            </div>
            <div>
                <p>Keluhan
                    <span> :{{ $bpjs->keluhan }}</span>
                </p>
            </div>
            <div>
                <p>Anamnesa
                    <span> :{{ $bpjs->anamnesa }}</span>
                </p>
            </div>
            <div>
                <p>Makanan
                    <span> :{{ $bpjs->makanan }}</span>
                </p>
            </div>
            <div>
                <p>Udara
                    <span> :{{ $bpjs->udara }}</span>
                </p>
            </div>
            <div>
                <p>Obat
                    <span> :{{ $bpjs->obat }}</span>
                </p>
            </div>
            <div>
                <p>Prognosa
                    <span> :{{ $bpjs->prognosa }}</span>
                </p>
            </div>
            <div>
                <p>Terapi Obat
                    <span> :{{ $bpjs->terapi }}</span>
                </p>
            </div>

            <div>
                <p>Terapi non Obat
                    <span> :{{ $bpjs->terapi_non }}</span>
                </p>
            </div>
            <div>
                <p>BMHP
                    <span> :{{ $bpjs->bmhp }}</span>
                </p>
            </div>
            <div>
                <p>Diagnosis
                    <span> :{{ $bpjs->diagnosis }}</span>
                </p>
            </div>
        </div>
        <div class="tampilumum">
            <div>
                <p>Kesadaran
                    <span> :{{ $bpjs->kesadaran }}</span>
                </p>
            </div>
            <div>
                <p>Suhu
                    <span> :{{ $bpjs->suhu }}</span>
                </p>
            </div>
            <div>
                <p>Tinggi Badan
                    <span> :{{ $bpjs->tinggi_badan }}</span>
                </p>
            </div>
            <div>
                <p>Berat Badan
                    <span> :{{ $bpjs->berat_badan }}</span>
                </p>
            </div>
            <div>
                <p>Lingkar Perut
                    <span> :{{ $bpjs->lingkar_perut }}</span>
                </p>
            </div>
            <div>
                <p>IMT
                    <span> :{{ $bpjs->imt }}</span>
                </p>
            </div>
            <div>
                <p>Sistole
                    <span> :{{ $bpjs->sistole }}</span>
                </p>
            </div>
            <div>
                <p>Diastole
                    <span> :{{ $bpjs->diastole }}</span>
                </p>
            </div>
            <div>
                <p>Respiratory Rate
                    <span> :{{ $bpjs->respiratory_rate }}</span>
                </p>
            </div>
            <div>
                <p>Heart Rate
                    <span> :{{ $bpjs->heart_rate }}</span>
                </p>
            </div>
            <div>
                <p>Tenaga Medis
                    <span> :{{ $bpjs->tenaga_medis }}</span>
                </p>
            </div>
            <div>
                <p>Pelayanan
                    <span> :{{ $bpjs->pelayanan }}</span>
                </p>
            </div>
            <div>
                <p>Status Pulang
                    <span> :{{ $bpjs->statuspulang }}</span>
                </p>
            </div>
        </div>
    </div>
    <footer>
        <p>Detail Kunjungan bpjs!</p>
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

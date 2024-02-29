<?php

namespace App\Exports;

use App\Models\Umum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class ExportPasien implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{

    public function collection()
    {
        return Umum::all();
    }

    public function map($umum): array
    {
        return [
            $umum->id,
            $umum->tanggal,
            $umum->urut,
            $umum->dokumen_medik,
            $umum->pasien ? $umum->pasien->nama : '',
            $umum->l,
            $umum->p,
            $umum->no_identitas,
            $umum->alamat,
            $umum->jenis_kunjungan,
            $umum->tindak_lanjut,
            $umum->diagnosis,
            $umum->terapi_obat,
            $umum->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'Tanggal',
            'Urut',
            'Dokumen Medik',
            'Nama',
            'L',
            'P',
            'No Identitas',
            'Alamat',
            'Jenis Kunjungan',
            'Tindak Lanjut Pelayanan',
            'Diagnosis',
            'Terapi Obat',
            'Keterangan',
        ];
    }



    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRangeHeader = 'A1:N1';
                $event->sheet->getDelegate()->getStyle($cellRangeHeader)->getFont()->setSize(12);
                $event->sheet->getDelegate()->getStyle($cellRangeHeader)->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('40ff00');
                $event->sheet->getDelegate()->getStyle($cellRangeHeader)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
                $event->sheet->getDelegate()->getStyle($cellRangeHeader)->getFont()->setBold(true);

                // Set border and styles for the entire data range
                $lastRow = $event->sheet->getDelegate()->getHighestRow();
                $lastColumn = $event->sheet->getDelegate()->getHighestColumn();
                $cellRangeData = 'A2:' . $lastColumn . $lastRow;

                $event->sheet->getDelegate()->getStyle($cellRangeData)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
            },
        ];
    }
}




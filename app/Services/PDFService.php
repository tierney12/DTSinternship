<?php

namespace App\Services;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PDFService
{
    public function printPDF($view)
    {
        $pdf = $this->preparePDF($view);

        if (in_array(env('FILESYSTEM_DRIVER'), ['', 'local', 'public'])) {
            Storage::put('pdfs/generic.pdf', $pdf);

            return response()->download(storage_path().'/app/pdfs/generic.pdf')->deleteFileAfterSend(true);
        } elseif (env('FILESYSTEM_DRIVER') == 's3') {
            Storage::disk('s3')->put('_jack_temp/generic.pdf', $pdf);

            $file = Storage::disk('s3')->get('pdfs/generic.pdf');

            $headers = [
                'Content-Type'        => 'application/pdf',
                'Content-Description' => 'File Transfer',
                'Content-Disposition' => 'attachment; filename=generic.pdf',
                'filename'            => 'generic.pdf',
            ];

            return response($file, 200, $headers);
        }
    }

    public function printBarcodes()
    {
        $barcodes = PDF::loadView('pdfs.barcodes', ['test' => 'test'])
            ->setOption('page-width', '54')
            ->setOption('page-height', '25')
            ->setOption('margin-top', '2')
            ->setOption('margin-right', '2')
            ->setOption('margin-bottom', '2')
            ->setOption('margin-left', '2');

        return $barcodes;
    }


    protected function preparePDF($view)
    {
        $pdf = PDF::loadView($view)->setPaper('a4')->setOrientation('portrait');

        if (isset($options)) {
            foreach ($options as $key => $value) {
                $pdf = $pdf->setOption($key, $value);
            }
        }

        return $pdf->output();
    }
}

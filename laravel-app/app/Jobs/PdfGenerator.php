<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Knp\Snappy\Pdf;

class PdfGenerator implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $path = '';

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function handle(Pdf $pdf)
    {
        // html形式でPDF出力を指定
        $pdf->generateFromHtml(
            '<h1>Sample</h1><p>PDF Output.</p>', $this->path
        );
    }
}

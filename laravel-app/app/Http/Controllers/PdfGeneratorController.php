<?php

namespace App\Http\Controllers;

use App\Jobs\PdfGenerator;
use Illuminate\Contracts\Bus\Dispatcher;

class PdfGeneratorController extends Controller
{
    public function index()
    {
        $generator = new PdfGenerator(storage_path('pdf/sample.pdf'));
        // dispatchヘルパ関数で実行指示
        dispatch($generator);
    }

    //インターフェースを記述してメソッドインジェクションでインスタンス生成                      
    // public function methodInjectExample(Dispatcher $dispatcher)
    // {
    //     $generator = new PdfGenerator(storage_path('pdf/sample.pdf'));
    //     $dispatcher->dispatch($generator);
    // }
}

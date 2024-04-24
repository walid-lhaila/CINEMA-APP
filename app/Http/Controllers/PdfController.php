<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function printPdf()
    {
        $view =  view('/ticket')->render();

        $path = public_path("/pdf_temp/");
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }
        Browsershot::html($view)->save($path.'htmlToPdf.pdf');

    }
}

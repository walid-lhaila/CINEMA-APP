<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
  public function generate(Request $request)
  {
      $cinema = $request->input('cinema');
      $title = $request->input('title');
      $image = $request->input('image');
      $seats = $request->input('seats');
      $date = Carbon::parse($request->input('date'))->format('d/m/y');
      $address = $request->input('address');



      $data = [
          'cinema' => $cinema,
          'title' => $title,
          'image' => $image,
          'seats' => $seats,
          'date' => $date,
          'address' => $address,
      ];

      if($request->has('preview')) {
          $data['css'] = 'css/pdf.css';
          return view('pdf', $data);
      } else {
          $data['css'] = public_path('css/invoice.css');
      }

      $pdf = Pdf::loadView('client.pdf', $data);
       return $pdf->download('ticket.pdf');
  }
}

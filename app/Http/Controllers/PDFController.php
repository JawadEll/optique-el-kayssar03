<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($factureId){
        
        $facture = Facture::find($factureId);

        if (!$facture) {
            abort(404); 
        }

        $data = [
            'title' => 'KAYSSAR03',
            'date' => date('m/d/y'),
            'facture' => $facture
        ];

        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->stream('facture_'.$facture->id.'.pdf');
    }
}

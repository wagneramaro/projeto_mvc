<?php

use App\core\Controller;
use Dompdf\Dompdf;

class Pdf extends Controller{
    public function index(){
      
        ob_start();
        require 'teste.php';
        $dompdf = new Dompdf();
        $dompdf->loadHtml(ob_get_clean());
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream("documento", ["Attachment" => false]);       

       $this->view('pdf/index');
    }

   



}
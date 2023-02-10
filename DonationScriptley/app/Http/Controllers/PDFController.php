<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use PDF;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        // return view('myPDF');
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
        // $pdf = PDF::setPaper('letter', 'landscape');
        // $pdf = PDF::setOption('isRemoteEnabled',true);
        // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']); 
        PDF::setOptions(['isRemoteEnabled' => TRUE, 'enable_javascript' => TRUE]);
        $pdf = \App::make('dompdf.wrapper');
        $html = view('myPDF')->render(); 
        // $html .= '<link type="text/css" href="https://127.0.0.1:8000/style.css" rel="stylesheet" />';
        $pdf = PDF::loadHtml($html);
        // $pdf = PDF::loadView('myPDF', $data)->setPaper('a4', 'landscape');
        // $pdf = PDF::render();
        return $pdf->stream();
        // return $pdf->download('test.pdf');
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
        // dd($details);
       
        // \Mail::to('k.p.shaktawat9@gmail.com')->send(new \App\Mail\SendMailphp($details));
        // return view('myPDF');

       
        try{
            Mail::send('emails.myTestMail',["details"=> $details], function($message)use($pdf,$details) {
            $message->to("k.p.shaktawat9@gmail.com")
            ->attachData($pdf->output(), "reciept.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";
 
        }else{
 
           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
        }
    }
   /*  public function sendmail(Request $request){
            $data["email"]=$request->get("email");
            $data["client_name"]=$request->get("client_name");
            $data["subject"]=$request->get("subject");
    
            $pdf = PDF::loadView('test', $data);
    
            try{
                Mail::send('mails.mail', $data, function($message)use($data,$pdf) {
                $message->to($data["email"], $data["client_name"])
                ->subject($data["subject"])
                ->attachData($pdf->output(), "invoice.pdf");
                });
            }catch(JWTException $exception){
                $this->serverstatuscode = "0";
                $this->serverstatusdes = $exception->getMessage();
            }
            if (Mail::failures()) {
                $this->statusdesc  =   "Error sending mail";
                $this->statuscode  =   "0";
    
            }else{
    
            $this->statusdesc  =   "Message sent Succesfully";
            $this->statuscode  =   "1";
            }
            return response()->json(compact('this'));
    } */
}

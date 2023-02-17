<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Mail;
use PDF;
use DB;

class PDFController extends Controller
{
    //
    public function generatePDF()
    {
        $imagepath = public_path("custom/img/logo.png");
        $image = "data:image/png;base64,".base64_encode(file_get_contents($imagepath));
        $data = [
            'name' => 'Naturteal',
            'date' => date('m/d/Y'),
            'email'=>'k@gmail.com',
            'amount'=>"108",
            'r_no'=>"NF00108"

        ];
        // return view('myPDF2',['image'=>$image,"data"=>$data]);
        // $pdf = PDF::setPaper('letter', 'landscape');
        // $pdf = PDF::setOption('isRemoteEnabled',true);
        // PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']); 
        // PDF::setOptions(['isRemoteEnabled' => TRUE, 'enable_javascript' => TRUE]);
        // $pdf = \App::make('dompdf.wrapper');
        // $html = view('myPDF')->render(); 
        // $html .= '<link type="text/css" href="https://127.0.0.1:8000/style.css" rel="stylesheet" />';
        // $pdf = PDF::loadHtml($html);
        $pdf = PDF::loadView('myPDF2',['image'=>$image,"data"=>$data])->setPaper('a4', 'landscape');
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

       
        /* try{
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
        } */
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
    public function generate2($id)
    {
        $final_data = DB::table('donations')
        ->Where('receipt_no','=',$id)
        ->get();
        // $final_data = Donation::where('receipt_no',$id);
        // dd($final_data);
        $imagepath = public_path("custom/img/logo.png");
        $image = "data:image/png;base64,".base64_encode(file_get_contents($imagepath));
        // $data = [
        //     'name' => 'Naturteal',
        //     'date' => date('m/d/Y'),
        //     'email'=>'k@gmail.com',
        //     'amount'=>"108",
        //     'r_no'=>"NF00108"

        // ];
        $pdf = PDF::loadView('myPDF2',['image'=>$image,"data"=>$final_data[0]])->setPaper('a4', 'landscape');
        // $pdf = PDF::render();
        return $pdf->stream();
        // return view('myPDF2',['image'=>$image,"data"=>$final_data]);
    }
}

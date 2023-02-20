<?php

namespace App\Http\Controllers;
use NumberToWords\NumberToWords;

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
    }
   
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
        // $numberToWords = new NumberToWords();
        $word = NumberToWords::transformNumber('en', $final_data[0]->amount,'INR');
        // $word = NumberToWords::transformCurrency('en', $final_data[0]->amount,'USD');
        $final_data[0]->amount_words= $word;
        $customPaper = array(0,0,720,1240);
        $pdf = PDF::loadView('myPDF2',['image'=>$image,"data"=>$final_data[0]])->setPaper($customPaper, 'landscape');
        // $pdf = PDF::render();
        return $pdf->stream();
        // return view('myPDF2',['image'=>$image,"data"=>$final_data[0]]);
    }
    public function download($id)
    {
        $final_data = DB::table('donations')
        ->Where('receipt_no','=',$id)
        ->get();
        $imagepath = public_path("custom/img/logo.png");
        $image = "data:image/png;base64,".base64_encode(file_get_contents($imagepath));
        $pdf = PDF::loadView('myPDF2',['image'=>$image,"data"=>$final_data[0]])->setPaper('a4', 'landscape');
        return $pdf->download($id.'.pdf');
    }
    public function mail($id)
    {
        $final_data = DB::table('donations')
        ->Where('receipt_no','=',$id)
        ->get();
        $imagepath = public_path("custom/img/logo.png");
        $image = "data:image/png;base64,".base64_encode(file_get_contents($imagepath));
        $pdf = PDF::loadView('myPDF2',['image'=>$image,"data"=>$final_data[0]])->setPaper('a4', 'landscape');
        
            $path = public_path('/custom/pdf/');
            $fileName =  $id. '.' . 'pdf' ;
            $pdf->save($path . '/' . $fileName);

            $file = public_path('/custom/pdf/'.$fileName);
            

            $data["email"] = "k.p.shaktawat9@gmail.com";
            $data["title"] = "From Natureal Admin";
            $data["body"] = "This is Demo";
      
            Mail::send('emails.myTestMail',["data"=>$data], function($message)use($data, $file) {
                $message->to($data["email"])
                ->subject($data["title"])
                ->attach($file);
                           
            });


        // 
        // Mail::send('emails.myTestMail',  function($message)use( $file) {
        //     $message->to($data["email"], $data["email"])
        //             ->subject($data["title"]);
        //         $message->attach($file);
            
        }
        // 
     
}

<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationCategory;
use App\Models\Cause;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use DB;


class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Donation;

    public function __construct(Donation $Donation)
    {
        $this->Donation=new UserRepository($Donation);
       
    }
    public function index()
    {
        
        $data =Donation::count();
        if($data > 0){
            $data = DB::table('donations')
                    ->select('*',DB::raw('donations.id as id, donation_categories.id as cid,donation_categories.title as cname,donation_categories.status as cstatus, causes.id as csid, causes.title as cstitle '))
                    ->join('donation_categories', 'donation_categories.id', '=', 'donations.category')
                    ->join('causes', 'causes.id', '=', 'donations.cause')
                    // ->where('users.name', 'like', '%' . $request->name . '%')
                    ->get();
            return view('donation',['data'=>$data]);
        }else{
            $data = Donation::all();
            return view('donation',['data'=>$data]);
        }
        
                  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = DonationCategory::where('status','active')->get();
        $cause = Cause::where('status','active')->get();
        return view('add_donation',['category'=>$category,'cause'=> $cause]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate(['fname' => 'required']);
        $data = $request->except([
            '_token',
            'user_id',
            'payment',
          ]);
        if($this->Donation->create($data)){
            return response()->json(['response'=>true,'message'=>'Donation Saved successfully']);
              
          }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
          
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = $this->Donation->show($id);
        $category = DonationCategory::where('status','active')->get();
        $cause = Cause::where('status','active')->get();

        return view('edit_donation',['data'=>$data,'category'=>$category,'cause'=>$cause]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
        $id = $request->user_id;
        $data = $request->except([
            '_token',
            'user_id',
            'payment',
          ]);
        $response=$this->Donation->update($data,$id);
        // dd($response);
        return $response;
            
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $response = $this->Donation->delete($id);
        return $response;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DonationCategory;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class DonationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $DonationCategory;

    public function __construct(DonationCategory $DonationCategory)
    {
        $this->DonationCategory=new UserRepository($DonationCategory);
       
    }
    public function index()
    {
        //
        $data = $this->DonationCategory->all();
        return view('donation_category',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_donation_category');
        
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
        $data = $request->except([
            '_token',
            'isstatus',
        ]);
        if($this->DonationCategory->create($data)){
            return response()->json(['response'=>true,'message'=>'Donation Category Saved successfully']);
              
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonationCategory  $donationCategory
     * @return \Illuminate\Http\Response
     */
    public function show(DonationCategory $donationCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonationCategory  $donationCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = $this->DonationCategory->show($id);
        return view('edit_donation_category',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DonationCategory  $donationCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DonationCategory $donationCategory)
    {
        //
        $id = $request->user_id;
        $data = $request->except([
            '_token',
            'user_id',
            'isstatus',
          ]);
        $response=$this->DonationCategory->update($data,$id);
        return $response;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonationCategory  $donationCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        if(DonationCategory::where('id',$id)->delete()){
            return response()->json(['response'=>true,'message'=>'Donation Category Deleted successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }
    }
}

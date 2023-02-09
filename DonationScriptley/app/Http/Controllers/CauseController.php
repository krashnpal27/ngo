<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Cause;

    public function __construct(Cause $Cause)
    {
        $this->Cause=new UserRepository($Cause);
       
    }
    public function index()
    {
        //
        $data = $this->Cause->all();
        return view('causes',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_cause');

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
          ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $teaser_image = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/cause');
            $image->move($destinationPath, $teaser_image);
            $data['image'] = 'uploads/cause/'.$teaser_image;
        }

        if($this->Cause->create($data)){
            return response()->json(['response'=>true,'message'=>'Cause Saved successfully']);
              
          }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
          
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function show(Cause $cause)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = $this->Cause->show($id);
        return view('edit_cause',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cause $cause)
    {
        //
        $id = $request->user_id;
        $data = $request->except([
            '_token',
            'user_id',
            'isstatus',
            'file',
          ]);
        if ($request->hasFile('image')) {
              $image = $request->file('image');
              $teaser_image = time().'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/uploads/cause');
              $image->move($destinationPath, $teaser_image);
              $data['image'] = 'uploads/cause/'.$teaser_image;
          }

        $response=$this->Cause->update($data,$id);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $img = $request->img;
        // $response = $this->Cause->delete($id);
        if(Cause::where('id',$id)->delete()){
            if($img != ''){
                $image = explode('/',$img)[2];
                unlink("uploads/cause/".$image);
            }
            return response()->json(['response'=>true,'message'=>'Cause Deleted successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Expense;

    public function __construct(Expense $Expense)
    {
        $this->Expense=new UserRepository($Expense);
       
    }

    public function index()
    {
        //
        $data = $this->Expense->all();
        $data = DB::table('Expenses')
                    ->select('*',DB::raw('Expenses.id as id, expense_categories.id as cid,expense_categories.title as cname,expense_categories.status as cstatus '))
                    ->join('expense_categories', 'expense_categories.id', '=', 'Expenses.category')
                    // ->where('users.name', 'like', '%' . $request->name . '%')
                    ->get();
        return view('expense',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = ExpenseCategory::where('status','active')->get();
        return view('add_expense',['category'=>$category]);
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
            $destinationPath = public_path('/uploads/expenses');
            $image->move($destinationPath, $teaser_image);
            $data['image'] = 'uploads/expenses/'.$teaser_image;
        }
        if($this->Expense->create($data)){
            return response()->json(['response'=>true,'message'=>'Expenses Saved successfully']);
              
          }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
          
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = $this->Expense->show($id);
        $category = ExpenseCategory::where('status','active')->get();
        return view('edit_expense',['data'=>$data,'category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense $expense)
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
              $destinationPath = public_path('/uploads/expenses');
              $image->move($destinationPath, $teaser_image);
              $data['image'] = 'uploads/expenses/'.$teaser_image;
          }

        $response=$this->Expense->update($data,$id);
        return $response;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        $img = $request->img;
        // $response = $this->Cause->delete($id);
        if(Expense::where('id',$id)->delete()){
            if($img != ''){
                $image = explode('/',$img)[2];
                unlink("uploads/expenses/".$image);
            }
            return response()->json(['response'=>true,'message'=>'Expense Deleted successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }
    }
}

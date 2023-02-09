<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $ExpenseCategory;

    public function __construct(ExpenseCategory $ExpenseCategory)
    {
        $this->ExpenseCategory=new UserRepository($ExpenseCategory);
       
    }

    public function index()
    {
        //
        $data = $this->ExpenseCategory->all();
        return view('expense_category',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_expense_category');
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
        if($this->ExpenseCategory->create($data)){
            return response()->json(['response'=>true,'message'=>'Expense Category Saved successfully']);
              
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = $this->ExpenseCategory->show($id);
        return view('edit_expense_category',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        //
        $id = $request->user_id;
        $data = $request->except([
            '_token',
            'user_id',
            'isstatus',
          ]);
        $response=$this->ExpenseCategory->update($data,$id);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        if(ExpenseCategory::where('id',$id)->delete()){
            return response()->json(['response'=>true,'message'=>'Expense Category Deleted successfully']);
            
        }else{
            return response()->json(['response'=>false,'message'=>'Something went wrong']);
        
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Interfaces\ExpenseRepositoryInterface;
use App\Models\V1\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ExpensesController extends Controller
{
    private $ExpenseRepositoryInterface;
    public function __construct(ExpenseRepositoryInterface $ExpenseRepositoryInterface)
    {
        $this->ExpenseRepositoryInterface = $ExpenseRepositoryInterface;
    }

    public function index(){
        $expenses = $this->ExpenseRepositoryInterface->index();
        // dd($sales);
        return view('expenses.index',[
            'expenses' => $expenses
        ]);
    }

    public function item($id){
        $expense = $this->ExpenseRepositoryInterface->find($id);
        // dd($sale);
        return view('expenses.item',[
            'expense' => $expense
        ]);
    }

    public function create(){
        return view('expenses.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'amount' => 'required',
            'monthly' => 'required',
        ],[
            'title.required' => 'فیلد عنوان باید پر شده باشد',
            'amount.required' => 'فیلد مقدار باید پر شده باشد',
            'monthly.required' => 'فیلد ماهانه باید پر شده باشد',
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $request['user_id'] = Auth::user()->id;

        Expense::create($request->all());
        
        return redirect('expenses');
    }

    public function update($id, Request $request){
        $sale = $this->ExpenseRepositoryInterface->update($id, $request);
        return back();
    }
    
    public function destroy($id){
        dd(2);
        $this->ExpenseRepositoryInterface->destroy($id);
        return redirect('/expenses');
    }
}

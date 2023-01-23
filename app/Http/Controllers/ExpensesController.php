<?php

namespace App\Http\Controllers;

use App\Interfaces\ExpenseRepositoryInterface;
use Illuminate\Http\Request;

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

    public function update($id, Request $request){
        dd(1);
        $sale = $this->ExpenseRepositoryInterface->update($id, $request);
        return back();
    }
    
    public function destroy($id){
        dd(2);
        $this->ExpenseRepositoryInterface->destroy($id);
        return redirect('/expenses');
    }
}

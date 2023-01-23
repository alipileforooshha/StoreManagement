<?php

namespace App\Repositories;

use App\Helpers\DateHelper;
use App\Interfaces\ExpenseRepositoryInterface;
use App\Models\V1\Expense;
use App\Models\V1\Sale;
use Illuminate\Support\Facades\Auth;

class ExpenseRepository implements ExpenseRepositoryInterface{
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index(){
        $user = Auth::user();
        $sales = $user->expenses()->paginate(10);
        foreach($sales as $sale){
            $sale->created_at = DateHelper::toShamsi($sale->created_at);
        }
        return $sales;
    }

    public function find($id){
        $item = Expense::find($id);
        $item->created_at = DateHelper::toShamsi($item->created_at);
        return $item;
    }

    public function destroy($id){
        Expense::destroy($id);
        return;
    }


    public function update($id, $request){
        $expense = Expense::find($id);
        $expense->update($request->all());
        return;
    }
}
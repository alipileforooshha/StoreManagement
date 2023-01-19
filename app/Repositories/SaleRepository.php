<?php

namespace App\Repositories;

use App\Helpers\DateHelper;
use App\Interfaces\SaleRepositoryInterface;
use App\Models\V1\Sale;
use Illuminate\Support\Facades\Auth;

class SaleRepository implements SaleRepositoryInterface{
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index(){
        $user = Auth::user();
        $sales = $user->sales()->paginate(10);
        foreach($sales as $sale){
            $sale->created_at = DateHelper::toShamsi($sale->created_at);
        }
        return $sales;
    }

    public function destroy($id){
        Sale::destroy($id);
        return;
    }

    public function find($id){
        $item = Sale::find($id);
        $item->created_at = DateHelper::toShamsi($item->created_at);
        return $item;
    }

    public function update($id, $request){
        $sale = Sale::find($id);
        $sale->update($request->all());
        return;
    }
}
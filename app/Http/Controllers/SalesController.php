<?php

namespace App\Http\Controllers;

use App\Interfaces\SaleRepositoryInterface;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    private $SaleRepositoryInterface;
    public function __construct(SaleRepositoryInterface $saleRepositoryInterface)
    {
        $this->SaleRepositoryInterface = $saleRepositoryInterface;
    }

    public function index(){
        $sales = $this->SaleRepositoryInterface->index();
        // dd($sales);
        return view('sales.index',[
            'sales' => $sales
        ]);
    }

    public function destroy($id){
        $this->SaleRepositoryInterface->destroy($id);
        return redirect('/sales');
    }

    public function item($id){
        $sale = $this->SaleRepositoryInterface->find($id);
        // dd($sale);
        return view('sales.item',[
            'sale' => $sale
        ]);
    }

    public function update($id, Request $request){
        $sale = $this->SaleRepositoryInterface->update($id, $request);
        return back();
    }
}

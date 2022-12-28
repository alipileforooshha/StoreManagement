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
        return view('sales',[
            'sales' => $sales
        ]);
    }

    public function destroy($id){
        $this->SaleRepositoryInterface->destroy($id);
        return redirect('/sales');
    }
}

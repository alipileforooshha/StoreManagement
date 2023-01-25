<?php

namespace App\Http\Controllers;

use App\Interfaces\SaleRepositoryInterface;
use App\Models\V1\Item;
use App\Models\V1\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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

    public function create(){
        $items = Item::all();
        return view('sales.create',[
            'items' => $items
        ]);
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'item_id' => 'required',
            'sale_price' => 'required',
            'number' => 'required',
        ],[
            'item_id.required' => 'فیلد نام کالا باید پر شده باشد',
            'sale_price.required' => 'فیلد قیمت فروش باید پر شده باشد',
            'number.required' => 'فیلد تعداد باید پر شده باشد',
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $request['user_id'] = Auth::user()->id;
        $request['profit'] = $request->sale_price - Item::find($request->item_id)->buy_price;

        Sale::create($request->all()); 
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

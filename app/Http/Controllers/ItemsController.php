<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Interfaces\ItemsRepositoryInterface;
use App\Models\V1\Category;
use App\Models\V1\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    private $ItemsRepositoryInterface;
    public function __construct(ItemsRepositoryInterface $ItemsRepositoryInterface)
    {
        $this->ItemsRepositoryInterface = $ItemsRepositoryInterface;
    }

    public function index(){
        $items = $this->ItemsRepositoryInterface->index();
        // dd($sales);
        return view('items.index',[
            'items' => $items
        ]);
    }

    public function item($id){
        $item = $this->ItemsRepositoryInterface->find($id);
        // dd($sale);
        return view('items.item',[
            'item' => $item
        ]);
    }

    public function update($id, Request $request){
        $item = $this->ItemsRepositoryInterface->update($id, $request);
        return back();
    }

    public function destroy($id){
        $this->ItemsRepositoryInterface->destroy($id);
        return redirect('/items');
    }

    public function create(){
        $categories = Category::all();
        return view('items.create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'sell_price' => 'required',
            'buy_price' => 'required',
            'count' => 'required',
            'category_id' => 'required',
        ],[
            'name.required' => 'فیلد نام باید پر شده باشد',
            'sell_price.required' => 'فیلد قیمت فروش باید پر شده باشد',
            'buy_price.required' => 'فیلد قیمت خرید باید پر شده باشد',
            'count.required' => 'فیلد تعداد باید پر شده باشد',
            'category_id.required' => 'فیلد دسته بندی باید پر شده باشد'
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $request['user_id'] = Auth::user()->id;

        Item::create($request->all()); 
    }
}

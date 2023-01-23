<?php

namespace App\Http\Controllers;

use App\Interfaces\ItemsRepositoryInterface;
use Illuminate\Http\Request;

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
}

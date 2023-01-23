<?php

namespace App\Repositories;

use App\Helpers\DateHelper;
use App\Interfaces\ItemsRepositoryInterface;
use App\Models\V1\Item;
use App\Models\V1\Sale;
use Illuminate\Support\Facades\Auth;

class ItemsRepository implements ItemsRepositoryInterface{
    
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index(){
        $user = Auth::user();
        $items = $user->items()->paginate(10);
        foreach($items as $item){
            $item->created_at = DateHelper::toShamsi($item->created_at);
        }
        return $items;
    }

    public function destroy($id){
        Item::destroy($id);
        return;
    }

    public function find($id){
        $item = Item::find($id);
        $item->created_at = DateHelper::toShamsi($item->created_at);
        return $item;
    }

    public function update($id, $request){
        $item = Item::find($id);
        $item->update($request->all());
        return;
    }
}
<?php

namespace App\Repositories;

use App\Helpers\DateHelper;
use App\Interfaces\CategoryRepositoryInterface;
use App\Models\V1\Category;
use App\Models\V1\Item;
use App\Models\V1\Sale;
use Illuminate\Support\Facades\Auth;

class CategoryRepository implements CategoryRepositoryInterface{
    
    private $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index(){
        $user = Auth::user();
        $categories = $user->categories()->paginate(10);
        foreach($categories as $category){
            $category->created_at = DateHelper::toShamsi($category->created_at);
        }
        return $categories;
    }

    public function destroy($id){
        Category::destroy($id);
        return;
    }

    public function find($id){
        $item = Category::find($id);
        $item->created_at = DateHelper::toShamsi($item->created_at);
        return $item;
    }

    public function update($id, $request){
        $item = Category::find($id);
        $item->update($request->all());
        return;
    }
}
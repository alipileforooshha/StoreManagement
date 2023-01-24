<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $CategoryRepositoryInterface;

    public function __construct(CategoryRepositoryInterface $CategoryRepositoryInterface)
    {
        $this->CategoryRepositoryInterface = $CategoryRepositoryInterface;
    }

    public function index(){
        $categories = $this->CategoryRepositoryInterface->index();
        return view('categories.index',[
            'categories' => $categories
        ]);
    }

    public function item($id){
        $category = $this->CategoryRepositoryInterface->find($id);
        return view('categories.item',[
            'category' => $category
        ]);
    }

    public function update($id, Request $request){
        $item = $this->CategoryRepositoryInterface->update($id, $request);
        return back();
    }

    public function destroy($id){
        $this->CategoryRepositoryInterface->destroy($id);
        return redirect('/categories');
    }
}

<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\V1\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
        ],[
            'name.required' => 'فیلد نام باید پر شده باشد',
        ]);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $request['user_id'] = Auth::user()->id;

        Category::create($request->all());
        
        return redirect('categories');
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

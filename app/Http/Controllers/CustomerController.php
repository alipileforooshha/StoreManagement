<?php

namespace App\Http\Controllers;

use App\Models\V1\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index(){
        $user = Auth::user();
        $customers = $user->customers()->paginate(10);
        return view('customers.index',[
            'customers' => $customers
        ]);
    }

    public function create(){
        return view('customers.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'mobile' => 'required',
        ],[
            'name.required' => 'فیلد نام مشتری باید پر شده باشد',
            'mobile.required' => 'فیلد شماره موبایل باید پر شده باشد',
        ]);

        $user = Auth::user();

        if($validator->fails()){
            return Redirect::back()->withErrors($validator);
        }

        $request['user_id'] = $user->id;

        Customer::create($request->all()); 

        return redirect('/customers');
    }

    public function destroy($id){
        Customer::destroy($id);
        return redirect('/customers');
    }

    public function item($id){
        $customer = Customer::find($id);
        return view('customers.item',[
            'customer' => $customer
        ]);
    }

    public function update($id, Request $request){
        Customer::find($id)->update($request->all());
        return back();
    }
}

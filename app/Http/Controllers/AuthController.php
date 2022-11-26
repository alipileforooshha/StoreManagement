<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    private $userRespositoryInterface;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->userRespositoryInterface = $userRepositoryInterface;
    }

    public function login(Request $request){
        // dd(1);
        $validator = Validator::make($request->all(),[
            'mobile' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])){
            return redirect('/dashboard');
        }else{
            return view('login',['message'=>'اطلاعات ورودی اشتباه است']);
        }

    }
    
    public function register(Request $request){
        $validator = Validator::make($request->all(),[
            'mobile' => 'required',
            'password' => 'required | confirmed'
        ]);
        
        $user = $this->userRespositoryInterface->create($request);
        Auth::loginUsingId($user->id);
        
        return redirect('/dashboard');
    }
}

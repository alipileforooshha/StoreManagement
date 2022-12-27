<?php

namespace App\Repositories;

use App\Helpers\VerificationCode;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Models\V1\Sale;
use App\Models\V1\VerificationCodes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public function Create(Request $request){
        $user = User::create([
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'expiration_date' => Carbon::now()->addWeek()
        ]);

        VerificationCodes::create([
            'verification_code' => VerificationCode::UniqueCode(5),
            'user_id' => $user->id
        ]);

        return $user;
    }

    public function GetUser()
    {

    }
    public function GetTopThreeSales($start_date = null,$end_date = null)
    {
        $user = Auth::user();
        $item_amount_sales = Sale::where('user_id',$user->id)
        ->selectRaw("item_id ,SUM(number) as number")
        ->groupBy('item_id')
        ->orderBy('number','Desc')
        ->limit(3)->with('item')->get();

        return $item_amount_sales;
    }
    public function GetTopThreeExpenses($start_date = null,$end_date = null)
    {

    }
    public function GetTopThreeProfits($start_date = null,$end_date = null)
    {

    }
    public function GetExpenses($start_date = null,$end_date = null)
    {
        $user = Auth::user();
        return $user->expenses;
    }
    public function GetSales($start_date = null,$end_date = null)
    {
        $user = Auth::user();

        return $user->sales;
    }
}
<?php

namespace App\Repositories;

use App\Helpers\VerificationCode;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Models\V1\VerificationCodes;
use Carbon\Carbon;
use Illuminate\Http\Request;
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

    public function GetUser($id)
    {

    }
    public function GetTopThreeSales($id,$start_date,$end_date)
    {

    }
    public function GetTopThreeExpenses($id,$start_date,$end_date)
    {

    }
    public function GetTopThreeProfits($id,$start_date,$end_date)
    {

    }
    public function GetExpenses($id,$start_date,$end_date)
    {

    }
    public function GetSales($id,$start_date,$end_date)
    {

    }
}
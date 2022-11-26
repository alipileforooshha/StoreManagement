<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private UserRepositoryInterface $userInterface;

    public function __construct(UserRepositoryInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }

    public function index()
    {
        $user = auth()->user();
        $start_date = Carbon::now();
        $start_date = Carbon::now();
        return view('dashboard',['user'=>$user]); 
    }
}

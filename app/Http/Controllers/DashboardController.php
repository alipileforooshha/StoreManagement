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

        //first card
        $whole_sales = $this->userInterface->GetSales();
        $all_sales_total_amount = $this->userInterface->GetSales()->sum('sale_price');
        $all_sales_total_profit = $this->userInterface->GetSales()->sum('profit');
        $all_expenses_total_amount = $this->userInterface->GetExpenses()->sum('amount');

        //second card
        $top_three_sales = $this->userInterface->GetTopThreeSales();

        //third card
        $top_three_expenses = $this->userInterface->GetTopThreeExpenses();
        

        //fourth card
        $top_three_profits = $this->userInterface->GetTopThreeProfits();
        return view('dashboard',[
            'user'=>$user,
            'all_sales_total_amount' => $all_sales_total_amount,
            'all_sales_total_profit' => $all_sales_total_profit,
            'all_expenses_total_amount' => $all_expenses_total_amount,
            'top_three_sales' => $top_three_sales,
            'top_three_expenses' => $top_three_expenses,
            'top_three_profits' => $top_three_profits,
        ]); 
    }
}

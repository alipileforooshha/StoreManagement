<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function GetUser();
    public function GetTopThreeSales($start_date = null,$end_date = null);
    public function GetTopThreeExpenses($start_date = null,$end_date = null);
    public function GetTopThreeProfits($start_date = null,$end_date = null);
    public function GetExpenses($start_date = null,$end_date = null);
    public function GetSales($start_date = null,$end_date = null);
    public function Create(Request $request);
}
<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function GetUser($id);
    public function GetTopThreeSales($id,$start_date,$end_date);
    public function GetTopThreeExpenses($id,$start_date,$end_date);
    public function GetTopThreeProfits($id,$start_date,$end_date);
    public function GetExpenses($id,$start_date,$end_date);
    public function GetSales($id,$start_date,$end_date);
    public function Create(Request $request);
}
<?php

namespace App\Helpers;

use Carbon\Carbon;
use Morilog\Jalali\Jalalian;

class DateHelper{
    static public function toShamsi($date){
        // dd(Jalalian::fromDateTime(Carbon::parse($date))->format('Y-m-d'));
        return Jalalian::fromDateTime(Carbon::parse($date));
        // return Jalalian::fromCarbon(Carbon::parse($date))->format('Y/m/d');      
        // return Jalalian::fromCarbon(Carbon::parse($date)->toDateString());      
    }
}
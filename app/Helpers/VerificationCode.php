<?php

namespace App\Helpers;

class VerificationCode {
    static public function UniqueCode($number){
        $start = pow(10,$number - 1);
        $end = pow(10,$number) - 1;
        return rand($start, $end);
    }
}
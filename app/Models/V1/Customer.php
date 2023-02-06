<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mobile',
        'user_id'
    ];

    public function sales(){
        return $this->hasManyThrough(Sale::class, CustomerSale::class, 'customer_id', 'id', 'id', 'id');
    }
}

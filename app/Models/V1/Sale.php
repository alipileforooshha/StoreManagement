<?php

namespace App\Models\V1;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'sale_price',
        'profit',
        'number',
        'user_id'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
}

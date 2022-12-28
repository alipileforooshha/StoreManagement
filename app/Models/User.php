<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\V1\Category;
use App\Models\V1\Expense;
use App\Models\V1\Item;
use App\Models\V1\Sale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mobile',
        'password',
        'expiration_date'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sales(){
        return $this->hasMany(Sale::class, 'user_id', 'id');
    }

    public function items(){
        return $this->hasMany(Item::class, 'user_id', 'id');
    }

    public function categories(){
        return $this->hasMany(Category::class, 'user_id', 'id');
    }

    public function expenses(){
        return $this->hasMany(Expense::class, 'user_id', 'id');
    }
}

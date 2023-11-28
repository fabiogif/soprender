<?php

namespace App\Models;

use App\Models\Traits\UserACLTrait;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasApiTokens, UserACLTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'tenant_id'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}

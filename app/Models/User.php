<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
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
    protected $guarded = [];

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
        'password' => 'hashed',
    ];


    // 
    public function admin_wallets() : HasMany{
        return $this->hasMany(Admin_wallets::class);
    }
    // 
    public function ai_plans() : HasMany{
        return $this->hasMany(AI_Plans::class);
    }

    // 
    public function kyc() : HasMany{
        return $this->hasMany(KYC::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notifications::class);
    }

    public function real_Estates(): HasMany
    {
        return $this->hasMany(Real_Estate::class);
    }

    public function signal_plans(): HasMany
    {
        return $this->hasMany(Signal_plans::class);
    }

    public function status_plans(): HasMany
    {
        return $this->hasMany(Status_plan::class);
    }

    public function stock_stakes(): HasMany
    {
        return $this->hasMany(Stock_Stake::class);
    }

    public function tokens(): HasMany
    {
        return $this->hasMany(token::class);
    }

    public function trades(): HasMany
    {
        return $this->hasMany(Trades::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transactions::class);
    }

    public function plans_transactions(): HasMany
    {
        return $this->hasMany(Plans_Transactions::class);
    }

}
